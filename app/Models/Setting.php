<?php

namespace App\Models;

use Config;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * @var string
     */
    protected $table = 'settings';

    /**
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * @param $key
     */
    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->first();
        if (!$entry) {
            return;
        }
        return $entry->value;
    }

    /**
     * @param $key
     * @param null $value
     * @return bool
     */
    public static function set($key, $value = null)
    {   
        $setting = new self();
        $entry = $setting->where('key', $key)->firstOrFail();
        $entry->value = $value;
        $entry->saveOrFail();
        Config::set('key', $value);
        if (Config::get($key) == $value) {
            return true;
        }
        return false;
    }

    public function accountTypeOptions()
    {
        return [ "Savings Account", "Current Account", ];
    }
    
    public function genderOptions(){
        return [
            'm' => 'Male',
            'f' => 'Female', 
        ];
    }

    public function dobDayOptions()
    {
        return [ '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', ];
    }

    public function dobMonthOptions()
    {
        return [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
    }

    public function dobYearOptions()
    {
        return [ '2001', '2000', '1999', '1998', '1997', '1996', '1995', '1994', '1993', '1992', '1991', '1990', '1989', '1988', '1987', '1986', '1985', '1984', '1983', '1982', '1981', '1980', '1979', '1978', '1977', '1976', '1975', '1974', '1973', '1972', '1971', '1970', '1969', '1968', '1967', '1966', '1965', '1964', '1963', '1962', '1961', '1960',
        ];
    }

    public function bankOptions()
    {
        return [ "Access Bank", "Citibank", "Diamond Bank", "Ecobank", "Fidelity Bank", "First Bank of Nigeria (FBN)", "First City Monument Bank (FCMB)", "Guaranty Trust Bank (GTBank)", "Heritage Bank", "Keystone Bank", "Skye Bank", "Stanbic IBTC Bank", "Sterling Bank", "Union Bank", "United Bank for Africa", "Unity Bank", "Wema Bank", "Zenith Bank", ];
    }
    
    public function bankDepositMethods(){
        return [ "Bank Deposit", "ATM Transfer", "Quickteller", "Mobile App Transfer", "Internet Banking", "USSD Mobile Transfer", "Bank Counter Transfer",
        ];
    }

    public function stateOptions()
    {
        return [ 'Abuja FCT', 'Abia State', 'Adamawa State', 'Akwa Ibom State',
            'Anambra' => 'Anambra State', 'Bauchi State', 'Bayelsa State', 'Benue State', 'Borno State', 'Cross River State', 'Delta State', 'Ebonyi State', 'Edo State', 'Ekiti State', 'Enugu State', 'Gombe State', 'Imo State', 'Jigawa State', 'Kaduna State', 'Kano State', 'Katsina State', 'Kebbi State', 'Kogi State', 'Kwara State', 'Lagos State', 'Nasarawa State', 'Niger State', 'Ogun State', 'Ondo State', 'Osun State', 'Oyo State', 'Plateau State', 'Rivers State', 'Sokoto State', 'Taraba State', 'Yobe State', 'Zamfara State',
        ];
    }

    public function countryOptions()
    {
        return [
            // english speaking countries
            'United States'=> 'United States',
            'Afghanistan'=> 'Afghanistan',
            'Aland Islands'=> 'Aland Islands',
            'Albania'=> 'Albania',
            'Algeria'=> 'Algeria',
            'American Samoa'=> 'American Samoa',
            'Andorra'=> 'Andorra',
            'Angola'=> 'Angola',
            'Anguilla'=> 'Anguilla',
            'Antarctica'=> 'Antarctica',
            'Antigua And Barbuda'=> 'Antigua And Barbuda',
            'Argentina'=> 'Argentina',
            'Armenia'=> 'Armenia',
            'Aruba'=> 'Aruba',
            'Australia'=> 'Australia',
            'Austria'=> 'Austria',
            'Azerbaijan'=> 'Azerbaijan',
            'Bahamas'=> 'Bahamas',
            'Bahrain'=> 'Bahrain',
            'Bangladesh'=> 'Bangladesh',
            'Barbados'=> 'Barbados',
            'Belarus'=> 'Belarus',
            'Belgium'=> 'Belgium',
            'Belize'=> 'Belize',
            'Benin'=> 'Benin',
            'Bermuda'=> 'Bermuda',
            'Bhutan'=> 'Bhutan',
            'Bolivia'=> 'Bolivia',
            'Bosnia And Herzegovina'=> 'Bosnia And Herzegovina',
            'Botswana'=> 'Botswana',
            'Bouvet Island'=> 'Bouvet Island',
            'Brazil'=> 'Brazil',
            'British Indian Ocean Territory'=> 'British Indian Ocean Territory',
            'Brunei Darussalam'=> 'Brunei Darussalam',
            'Bulgaria'=> 'Bulgaria',
            'Burkina Faso'=> 'Burkina Faso',
            'Burundi'=> 'Burundi',
            'Cambodia'=> 'Cambodia',
            'Cameroon'=> 'Cameroon',
            'Canada'=> 'Canada',
            'Cape Verde'=> 'Cape Verde',
            'Cayman Islands'=> 'Cayman Islands',
            'Central African Republic'=> 'Central African Republic',
            'Chad'=> 'Chad',
            'Chile'=> 'Chile',
            'China'=> 'China',
            'Christmas Island'=> 'Christmas Island',
            'Cocos (Keeling) Islands'=> 'Cocos (Keeling) Islands',
            'Colombia'=> 'Colombia',
            'Comoros'=> 'Comoros',
            'Congo'=> 'Congo',
            'Congo Democratic Republic'=> 'Congo, Democratic Republic',
            'Cook Islands'=> 'Cook Islands',
            'Costa Rica'=> 'Costa Rica',
            'Cote D\'Ivoire'=> 'Cote D\'Ivoire',
            'Croatia'=> 'Croatia',
            'Cuba'=> 'Cuba',
            'Cyprus'=> 'Cyprus',
            'Czech Republic'=> 'Czech Republic',
            'Denmark'=> 'Denmark',
            'Djibouti'=> 'Djibouti',
            'Dominica'=> 'Dominica',
            'Dominican Republic'=> 'Dominican Republic',
            'Ecuador'=> 'Ecuador',
            'Egypt'=> 'Egypt',
            'El Salvador'=> 'El Salvador',
            'Equatorial Guinea'=> 'Equatorial Guinea',
            'Eritrea'=> 'Eritrea',
            'Estonia'=> 'Estonia',
            'Ethiopia'=> 'Ethiopia',
            'Falkland Islands (Malvinas)'=> 'Falkland Islands (Malvinas)',
            'Faroe Islands'=> 'Faroe Islands',
            'Fiji'=> 'Fiji',
            'Finland'=> 'Finland',
            'France'=> 'France',
            'French Guiana'=> 'French Guiana',
            'French Polynesia'=> 'French Polynesia',
            'French Southern Territories'=> 'French Southern Territories',
            'Gabon'=> 'Gabon',
            'Gambia'=> 'Gambia',
            'Georgia'=> 'Georgia',
            'Germany'=> 'Germany',
            'Ghana'=> 'Ghana',
            'Gibraltar'=> 'Gibraltar',
            'Greece'=> 'Greece',
            'Greenland'=> 'Greenland',
            'Grenada'=> 'Grenada',
            'Guadeloupe'=> 'Guadeloupe',
            'Guam'=> 'Guam',
            'Guatemala'=> 'Guatemala',
            'Guernsey'=> 'Guernsey',
            'Guinea'=> 'Guinea',
            'Guinea-Bissau'=> 'Guinea-Bissau',
            'Guyana'=> 'Guyana',
            'Haiti'=> 'Haiti',
            'Heard Island & Mcdonald Islands'=> 'Heard Island & Mcdonald Islands',
            'Holy See (Vatican City State)'=> 'Holy See (Vatican City State)',
            'Honduras'=> 'Honduras',
            'Hong Kong'=> 'Hong Kong',
            'Hungary'=> 'Hungary',
            'Iceland'=> 'Iceland',
            'India'=> 'India',
            'Indonesia'=> 'Indonesia',
            'Iran Islamic Republic Of'=> 'Iran, Islamic Republic Of',
            'Iraq'=> 'Iraq',
            'Ireland'=> 'Ireland',
            'Isle Of Man'=> 'Isle Of Man',
            'Israel'=> 'Israel',
            'Italy'=> 'Italy',
            'Jamaica'=> 'Jamaica',
            'Japan'=> 'Japan',
            'Jersey'=> 'Jersey',
            'Jordan'=> 'Jordan',
            'Kazakhstan'=> 'Kazakhstan',
            'Kenya'=> 'Kenya',
            'Kiribati'=> 'Kiribati',
            'Korea'=> 'Korea',
            'Kuwait'=> 'Kuwait',
            'Kyrgyzstan'=> 'Kyrgyzstan',
            'Lao People\'s Democratic Republic'=> 'Lao People\'s Democratic Republic',
            'Latvia'=> 'Latvia',
            'Lebanon'=> 'Lebanon',
            'Lesotho'=> 'Lesotho',
            'Liberia'=> 'Liberia',
            'Libyan Arab Jamahiriya'=> 'Libyan Arab Jamahiriya',
            'Liechtenstein'=> 'Liechtenstein',
            'Lithuania'=> 'Lithuania',
            'Luxembourg'=> 'Luxembourg',
            'Macao'=> 'Macao',
            'Macedonia'=> 'Macedonia',
            'Madagascar'=> 'Madagascar',
            'Malawi'=> 'Malawi',
            'Malaysia'=> 'Malaysia',
            'Maldives'=> 'Maldives',
            'Mali'=> 'Mali',
            'Malta'=> 'Malta',
            'Marshall Islands'=> 'Marshall Islands',
            'Martinique'=> 'Martinique',
            'Mauritania'=> 'Mauritania',
            'Mauritius'=> 'Mauritius',
            'Mayotte'=> 'Mayotte',
            'Mexico'=> 'Mexico',
            'Micronesia Federated States Of'=> 'Micronesia, Federated States Of',
            'Moldova'=> 'Moldova',
            'Monaco'=> 'Monaco',
            'Mongolia'=> 'Mongolia',
            'Montenegro'=> 'Montenegro',
            'Montserrat'=> 'Montserrat',
            'Morocco'=> 'Morocco',
            'Mozambique'=> 'Mozambique',
            'Myanmar'=> 'Myanmar',
            'Namibia'=> 'Namibia',
            'Nauru'=> 'Nauru',
            'Nepal'=> 'Nepal',
            'Netherlands'=> 'Netherlands',
            'Netherlands Antilles'=> 'Netherlands Antilles',
            'New Caledonia'=> 'New Caledonia',
            'New Zealand'=> 'New Zealand',
            'Nicaragua'=> 'Nicaragua',
            'Niger'=> 'Niger',
            'Nigeria'=> 'Nigeria',
            'Niue'=> 'Niue',
            'Norfolk Island'=> 'Norfolk Island',
            'Northern Mariana Islands'=> 'Northern Mariana Islands',
            'Norway'=> 'Norway',
            'Oman'=> 'Oman',
            'Pakistan'=> 'Pakistan',
            'Palau'=> 'Palau',
            'Palestinian Territory Occupied'=> 'Palestinian Territory, Occupied',
            'Panama'=> 'Panama',
            'Papua New Guinea'=> 'Papua New Guinea',
            'Paraguay'=> 'Paraguay',
            'Peru'=> 'Peru',
            'Philippines'=> 'Philippines',
            'Pitcairn'=> 'Pitcairn',
            'Poland'=> 'Poland',
            'Portugal'=> 'Portugal',
            'Puerto Rico'=> 'Puerto Rico',
            'Qatar'=> 'Qatar',
            'Reunion'=> 'Reunion',
            'Romania'=> 'Romania',
            'Russian Federation'=> 'Russian Federation',
            'Rwanda'=> 'Rwanda',
            'Saint Barthelemy'=> 'Saint Barthelemy',
            'Saint Helena'=> 'Saint Helena',
            'Saint Kitts And Nevis'=> 'Saint Kitts And Nevis',
            'Saint Lucia'=> 'Saint Lucia',
            'Saint Martin'=> 'Saint Martin',
            'Saint Pierre And Miquelon'=> 'Saint Pierre And Miquelon',
            'Saint Vincent And Grenadines'=> 'Saint Vincent And Grenadines',
            'Samoa'=> 'Samoa',
            'San Marino'=> 'San Marino',
            'Sao Tome And Principe'=> 'Sao Tome And Principe',
            'Saudi Arabia'=> 'Saudi Arabia',
            'Senegal'=> 'Senegal',
            'Serbia'=> 'Serbia',
            'Seychelles'=> 'Seychelles',
            'Sierra Leone'=> 'Sierra Leone',
            'Singapore'=> 'Singapore',
            'Slovakia'=> 'Slovakia',
            'Slovenia'=> 'Slovenia',
            'Solomon Islands'=> 'Solomon Islands',
            'Somalia'=> 'Somalia',
            'South Africa'=> 'South Africa',
            'South Georgia And Sandwich Isl.'=> 'South Georgia And Sandwich Isl.',
            'Spain'=> 'Spain',
            'Sri Lanka'=> 'Sri Lanka',
            'Sudan'=> 'Sudan',
            'Suriname'=> 'Suriname',
            'Svalbard And Jan Mayen'=> 'Svalbard And Jan Mayen',
            'Swaziland'=> 'Swaziland',
            'Sweden'=> 'Sweden',
            'Switzerland'=> 'Switzerland',
            'Syrian Arab Republic'=> 'Syrian Arab Republic',
            'Taiwan'=> 'Taiwan',
            'Tajikistan'=> 'Tajikistan',
            'Tanzania'=> 'Tanzania',
            'Thailand'=> 'Thailand',
            'Timor-Leste'=> 'Timor-Leste',
            'Togo'=> 'Togo',
            'Tokelau'=> 'Tokelau',
            'Tonga'=> 'Tonga',
            'Trinidad And Tobago'=> 'Trinidad And Tobago',
            'Tunisia'=> 'Tunisia',
            'Turkey'=> 'Turkey',
            'Turkmenistan'=> 'Turkmenistan',
            'Turks And Caicos Islands'=> 'Turks And Caicos Islands',
            'Tuvalu'=> 'Tuvalu',
            'Uganda'=> 'Uganda',
            'Ukraine'=> 'Ukraine',
            'United Arab Emirates'=> 'United Arab Emirates',
            'United Kingdom'=> 'United Kingdom',
            'United States Outlying Islands'=> 'United States Outlying Islands',
            'Uruguay'=> 'Uruguay',
            'Uzbekistan'=> 'Uzbekistan',
            'Vanuatu'=> 'Vanuatu',
            'Venezuela'=> 'Venezuela',
            'Viet Nam'=> 'Viet Nam',
            'Virgin Islands British'=> 'Virgin Islands, British',
            'Virgin Islands U.S.'=> 'Virgin Islands, U.S.',
            'Wallis And Futuna'=> 'Wallis And Futuna',
            'Western Sahara'=> 'Western Sahara',
            'Yemen'=> 'Yemen',
            'Zambia'=> 'Zambia',
            'Zimbabwe'=> 'Zimbabwe',
        ];
    }
}
