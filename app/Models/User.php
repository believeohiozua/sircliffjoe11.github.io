<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Setting;
use Plank\Mediable\Mediable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Mediable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'type' => 0,
        'source' => 0,
        'credit_limit' => 5000,
    ];

    public function fromSetting()
    {
        return new Setting();
    }

    public function dobDayOptions()
    {
        return $this->fromSetting()->dobDayOptions();
    }

    public function dobMonthOptions()
    {
        return $this->fromSetting()->dobMonthOptions();
    }

    public function dobYearOptions()
    {
        return $this->fromSetting()->dobYearOptions();
    }

    public function stateOptions()
    {
        return $this->fromSetting()->stateOptions();
    }

    public function accTypeOptions()
    {
        return $this->fromSetting()->accountTypeOptions();
    }

    public function bankOptions()
    {
        return $this->fromSetting()->bankOptions();
    }
    
    // Product methods
    public function fromProduct()
    {
        return new Product();
    }

    public function productOptions(){
        return $this->fromProduct()->amountOptions();
    }
    
    public function getSourceAttribute($attribute) {
        return $this->sourceOptions() [$attribute];
    }
    
    public function sourceOptions(){
        return [
            '0' => 'Offline',
            '1' => 'Online',
        ];
    }
    
    public function getGenderAttribute($attribute) {
        return $this->genderOptions() [$attribute];
    }
    
    public function genderOptions(){
        return [
            'm' => 'Male',
            'f' => 'Female',
        ];
    }

    public function getNameAttribute($value)
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function formatUsername()
    {
        return '@'.$this->username;
    }

    public function getBirthdayAttribute($value)
    {
        return $this->profile->birthday;
    }

    public function getBankDetails()
    {
        $bank = $this->profile->bank_name ?? 'Absent';
        $account_name = $this->profile->account_name ?? 'Absent';
        $account_number = $this->profile->account_number ?? 'Absent';
        $account_type = $this->profile->account_type ?? 'Absent';

        return $details = [
            'bank' => $bank,
            'account_name' => $account_name,
            'account_number' => $account_number,
            'account_type' => $account_type, 
        ];
    }
    
    public function getTypeAttribute($attribute) {
        return $this->typeOptions() [$attribute];
    }
    
    public function typeOptions(){
        return [
            '0' => 'Member',
            '1' => 'Admin',
        ];
    }

    public function application()
    {
        return $this->hasOne(Application::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function activeOrders()
    {
        return $this->hasMany(Order::class)->where('status', 1)->get();
    }

    public function pendingOrders()
    {
        return $this->hasMany(Order::class)->where('status', 0)->get();
    }

    public function pendingPayments()
    {
        return $this->hasMany(Payment::class)->whereIn('status', [0, 1])->get();
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function totalOrderValue()
    {

        $count = count( $this->activeOrders() );
        $amount = 0;

        foreach ($this->activeOrders() as $order) {
            $a = 1;
            do {
                $orderAmount = $order->amount * $order->getOriginal('quantity');
                $amount = $amount + $orderAmount;
                $a++;
            } while ( $a <= $count );
        }
        
        return $amount;
    }
    
    public function packageSlots()
    {
        return $this->hasManyThrough(Slot::class, Package::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function payouts()
    {
        return $this->hasMany(Payout::class);
    }

    public function timelines()
    {
        return $this->hasMany(Timeline::class);
    }
}
