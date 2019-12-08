<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        $this->belongsTo(User::class);
    }
    
    public function getTypeAttribute($attribute) {
        return $this->typeOptions() [$attribute];
    }
    
    public function typeOptions(){
        return [
            '0' => 'Info',
            '1' => 'Success',
            '2' => 'Warning',
            '3' => 'Danger',
        ];
    }
}
