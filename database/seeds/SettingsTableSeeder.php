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
            'value'                     =>  'Kobu Innovative Solutions',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'BrainStaq',
        ],
        [
            'key'                       =>  'site_admin',
            'value'                     =>  'BrainStaq Admin',
        ],
        [
            'key'                       =>  'domain_name',
            'value'                     =>  'brainstaq.com',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'brainstaq@gmail.com',
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
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_keywords',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  '',
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
            'key'                       =>  'sms_token',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'sms_sender',
            'value'                     =>  'BrainStaq',
        ],


        [
            'key'                       =>  'default_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'default_bank_name', //
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'default_account_name', //
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'default_account_number', //
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'default_account_type', //
            'value'                     =>  '',
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
        foreach ($this->settings as $index => $setting) {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted ' . count($this->settings) . ' records');
    }
}
