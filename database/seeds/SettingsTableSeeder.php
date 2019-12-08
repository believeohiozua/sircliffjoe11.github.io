<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [ 
        [
            'key'                       =>  'site_name',
            'value'                     =>  'ChiMony And Friends',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'ChiMony',
        ],
        [
            'key'                       =>  'site_admin',
            'value'                     =>  'ChiMony Admin',
        ],
        [
            'key'                       =>  'domain_name',
            'value'                     =>  'ChiMony.com',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'chimoneyng@gmail.com',
        ],
        [
            'key'                       =>  'contact_email_address', // 
            'value'                     =>  'contact@chimony.com',
        ],
        [
            'key'                       =>  'currency_code',
            'value'                     =>  'NGN',
        ],
        [
            'key'                       =>  'currency_symbol',
            'value'                     =>  'N',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'footer_copyright_text',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  'ChiMony And Friends',
        ],
        [
            'key'                       =>  'seo_meta_keywords',
            'value'                     =>  'osusu, collections, chinyere, osuoha, chimoney, chimony, savings, money',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  'ChiMony.com is a private platform to manage collections between                                       Madam Chinyere and her friends.',
        ],
        [
            'key'                       =>  'social_facebook',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_twitter',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_instagram',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_linkedin',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'google_analytics',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'facebook_pixels',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'auto_approve', //
            'value'                     =>  'on',
        ],


        [
            'key'                       =>  'sms_token',
            'value'                     =>  'kQd0NbGTnNO42KF6ldZKSOxF8oFSUjZyygEkUzqMeBn6hEaCqN9NUwT4FHHd',
        ],
        [
            'key'                       =>  'sms_sender',
            'value'                     =>  'ChiMony',
        ],

        
        [
            'key'                       =>  'default_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'default_bank_name', //
            'value'                     =>  'First Bank of Nigeria',
        ],
        [
            'key'                       =>  'default_account_name', //
            'value'                     =>  'Osuoha Chinyere O.',
        ],
        [
            'key'                       =>  'default_account_number', //
            'value'                     =>  '3043931919',
        ],
        [
            'key'                       =>  'default_account_type', //
            'value'                     =>  'Savings',
        ],


        [
            'key'                       =>  'stripe_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_secret_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_client_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_secret_id',
            'value'                     =>  '',
        ],
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}