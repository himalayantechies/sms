<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlobalSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('global_settings')->delete();
        
        \DB::table('global_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'system_name',
                'value' => 'School Managment',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'system_title',
                'value' => 'SMS',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'system_email',
                'value' => 'ekattor@example.com',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'phone',
                'value' => '900500000',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'address',
                'value' => 'Anamnagar, Kathmandu',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'purchase_code',
                'value' => '3fffe808-fb06-49c0-9a9e-e4791123ebfb',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'system_currency',
                'value' => 'NPR',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'currency_position',
                'value' => 'left-space',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'running_session',
                'value' => '1',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'language',
                'value' => 'english',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'payment_settings',
                'value' => '[]',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'footer_text',
                'value' => 'By HT Solution Pvt Ltd',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'footer_link',
                'value' => 'http://himalayantechies.com/',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'version',
                'value' => '1.3',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'fax',
                'value' => '1234567890',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'timezone',
                'value' => 'Asia/Kathmandu',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'smtp_protocol',
                'value' => 'smtp',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'smtp_crypto',
                'value' => 'tls',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'smtp_host',
                'value' => 'smtp.googlemail.com',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'smtp_port',
                'value' => '587',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'smtp_user',
                'value' => 'your-email',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'smtp_pass',
                'value' => 'Email-password',
            ),
            22 => 
            array (
                'id' => 28,
                'key' => 'offline',
                'value' => '{"status":"1"}',
            ),
            23 => 
            array (
                'id' => 29,
                'key' => 'light_logo',
                'value' => 'light-logo.png',
            ),
            24 => 
            array (
                'id' => 30,
                'key' => 'dark_logo',
                'value' => '16630508541.png',
            ),
            25 => 
            array (
                'id' => 31,
                'key' => 'favicon',
                'value' => 'favicon.png',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'randCallRange',
                'value' => '30',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'help_link',
                'value' => 'http://support.edufinity.net',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'youtube_api_key',
                'value' => 'youtube-api-key',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'vimeo_api_key',
                'value' => 'vimeo-api-key',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'banner_title',
                'value' => 'Bringing Excellence To Students',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'banner_subtitle',
                'value' => 'Empowering and inspiring all students to excel as life long learners',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'facebook_link',
                'value' => 'https://www.facebook.com/CreativeitemApps',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'twitter_link',
                'value' => 'https://twitter.com/creativeitem',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'linkedin_link',
                'value' => 'https://www.linkedin.com/company/creativeitem',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'instagram_link',
                'value' => 'http://www.instagram.com/creativeitem',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'price_subtitle',
                'value' => 'Choose the best subscription plan for your school',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'copyright_text',
                'value' => '2022 Academy, All rights reserved',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'contact_email',
                'value' => 'ekattor@domain.com',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'frontend_footer_text',
            'value' => 'Ekattor 8 is a collection of programs designed to assist schools in administering their executive responsibilities on a day-to-day basis. It is designed for SAAS (Software as a Service) projects.',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'faq_subtitle',
                'value' => 'Frequently asked questions',
            ),
            41 => 
            array (
                'id' => 49,
                'key' => 'frontend_view',
                'value' => '1',
            ),
        ));
        
        
    }
}