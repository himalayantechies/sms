<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language')->delete();
        
        \DB::table('language')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'english',
                'phrase' => 'Dashboard',
                'translated' => 'Dashboard',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'english',
                'phrase' => 'Home',
                'translated' => 'Home',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'english',
                'phrase' => 'Schools',
                'translated' => 'Schools',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'english',
                'phrase' => 'Total Schools',
                'translated' => 'Total Schools',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'english',
                'phrase' => 'Subscription',
                'translated' => 'Subscription',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'english',
                'phrase' => 'Total Active Subscription',
                'translated' => 'Total Active Subscription',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'english',
                'phrase' => 'Subscription Payment',
                'translated' => 'Subscription Payment',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'english',
                'phrase' => 'Superadmin | Ekator 8',
                'translated' => 'Superadmin | Ekator 8',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'english',
                'phrase' => 'Close',
                'translated' => 'Close',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'english',
                'phrase' => 'School List',
                'translated' => 'School List',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'english',
                'phrase' => 'Create school',
                'translated' => 'Create school',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'english',
                'phrase' => 'Pending List',
                'translated' => 'Pending List',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'english',
                'phrase' => 'Package',
                'translated' => 'Package',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'english',
                'phrase' => 'Subscriptions',
                'translated' => 'Subscriptions',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'english',
                'phrase' => 'Subscription Report',
                'translated' => 'Subscription Report',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'english',
                'phrase' => 'Pending Request',
                'translated' => 'Pending Request',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'english',
                'phrase' => 'Confirmed Payment',
                'translated' => 'Confirmed Payment',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'english',
                'phrase' => 'Addons',
                'translated' => 'Addons',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'english',
                'phrase' => 'Settings',
                'translated' => 'Settings',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'english',
                'phrase' => 'System Settings',
                'translated' => 'System Settings',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'english',
                'phrase' => 'Session Manager',
                'translated' => 'Session Manager',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'english',
                'phrase' => 'Payment Settings',
                'translated' => 'Payment Settings',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'english',
                'phrase' => 'Smtp settings',
                'translated' => 'Smtp settings',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'english',
                'phrase' => 'About',
                'translated' => 'About',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'english',
                'phrase' => 'Superadmin',
                'translated' => 'Superadmin',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'english',
                'phrase' => 'My Account',
                'translated' => 'My Account',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'english',
                'phrase' => 'Change Password',
                'translated' => 'Change Password',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'english',
                'phrase' => 'Log out',
                'translated' => 'Log out',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'english',
                'phrase' => 'Loading...',
                'translated' => 'Loading...',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'english',
                'phrase' => 'Heads up!',
                'translated' => 'Heads up!',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'english',
                'phrase' => 'Are you sure?',
                'translated' => 'Are you sure?',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'english',
                'phrase' => 'Back',
                'translated' => 'Back',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'english',
                'phrase' => 'Continue',
                'translated' => 'Continue',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'english',
                'phrase' => 'You won\'t able to revert this!',
                'translated' => 'You won\'t able to revert this!',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'english',
                'phrase' => 'Yes',
                'translated' => 'Yes',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'english',
                'phrase' => 'Cancel',
                'translated' => 'Cancel',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'english',
                'phrase' => 'Add School',
                'translated' => 'Add School',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'english',
                'phrase' => 'Name',
                'translated' => 'Name',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'english',
                'phrase' => 'Address',
                'translated' => 'Address',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'english',
                'phrase' => 'Phone',
                'translated' => 'Phone',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'english',
                'phrase' => 'Info',
                'translated' => 'Info',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'english',
                'phrase' => 'Status',
                'translated' => 'Status',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'english',
                'phrase' => 'Action',
                'translated' => 'Action',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'english',
                'phrase' => 'Active',
                'translated' => 'Active',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'english',
                'phrase' => 'Actions',
                'translated' => 'Actions',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'english',
                'phrase' => 'Edit School',
                'translated' => 'Edit School',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'english',
                'phrase' => 'Edit',
                'translated' => 'Edit',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'english',
                'phrase' => 'Delete',
                'translated' => 'Delete',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'english',
                'phrase' => 'School Form',
                'translated' => 'School Form',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'english',
                'phrase' => 'Provide all the information required for your school.',
                'translated' => 'Provide all the information required for your school.',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'english',
                'phrase' => 'Also provide a admin information with email and passwoard.',
                'translated' => 'Also provide a admin information with email and passwoard.',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'english',
                'phrase' => 'So that admin can access the created school.',
                'translated' => 'So that admin can access the created school.',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'english',
                'phrase' => 'SCHOOL INFO',
                'translated' => 'SCHOOL INFO',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'english',
                'phrase' => 'School Name',
                'translated' => 'School Name',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'english',
                'phrase' => 'School Address',
                'translated' => 'School Address',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'english',
                'phrase' => 'School Email',
                'translated' => 'School Email',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'english',
                'phrase' => 'School Phone',
                'translated' => 'School Phone',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'english',
                'phrase' => 'ADMIN INFO',
                'translated' => 'ADMIN INFO',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'english',
                'phrase' => 'Gender',
                'translated' => 'Gender',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'english',
                'phrase' => 'Select a gender',
                'translated' => 'Select a gender',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'english',
                'phrase' => 'Male',
                'translated' => 'Male',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'english',
                'phrase' => 'Female',
                'translated' => 'Female',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'english',
                'phrase' => 'Blood group',
                'translated' => 'Blood group',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'english',
                'phrase' => 'Select a blood group',
                'translated' => 'Select a blood group',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'english',
                'phrase' => 'A+',
                'translated' => 'A+',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'english',
                'phrase' => 'A-',
                'translated' => 'A-',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'english',
                'phrase' => 'B+',
                'translated' => 'B+',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'english',
                'phrase' => 'B-',
                'translated' => 'B-',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'english',
                'phrase' => 'AB+',
                'translated' => 'AB+',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'english',
                'phrase' => 'AB-',
                'translated' => 'AB-',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'english',
                'phrase' => 'O+',
                'translated' => 'O+',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'english',
                'phrase' => 'O-',
                'translated' => 'O-',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'english',
                'phrase' => 'Admin Address',
                'translated' => 'Admin Address',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'english',
                'phrase' => 'Admin Phone Number',
                'translated' => 'Admin Phone Number',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'english',
                'phrase' => 'Photo',
                'translated' => 'Photo',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'english',
                'phrase' => 'Admin Email',
                'translated' => 'Admin Email',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'english',
                'phrase' => 'Admin Password',
                'translated' => 'Admin Password',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'english',
                'phrase' => 'Submit',
                'translated' => 'Submit',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'english',
                'phrase' => 'Pending School List',
                'translated' => 'Pending School List',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'english',
                'phrase' => 'No data found',
                'translated' => 'No data found',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'english',
                'phrase' => 'Packages',
                'translated' => 'Packages',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'english',
                'phrase' => 'Add Package',
                'translated' => 'Add Package',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'english',
                'phrase' => 'Price',
                'translated' => 'Price',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'english',
                'phrase' => 'Interval',
                'translated' => 'Interval',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'english',
                'phrase' => 'Preiod',
                'translated' => 'Preiod',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'english',
                'phrase' => 'Filter',
                'translated' => 'Filter',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'english',
                'phrase' => 'Export',
                'translated' => 'Export',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'english',
                'phrase' => 'PDF',
                'translated' => 'PDF',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'english',
                'phrase' => 'CSV',
                'translated' => 'CSV',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'english',
                'phrase' => 'Print',
                'translated' => 'Print',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'english',
                'phrase' => 'Paid By',
                'translated' => 'Paid By',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'english',
                'phrase' => 'Purchase Date',
                'translated' => 'Purchase Date',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'english',
                'phrase' => 'Expire Date',
                'translated' => 'Expire Date',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'english',
                'phrase' => 'Confirmed Request',
                'translated' => 'Confirmed Request',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'english',
                'phrase' => 'Payment For',
                'translated' => 'Payment For',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'english',
                'phrase' => 'Payment Document',
                'translated' => 'Payment Document',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'english',
                'phrase' => 'Approve',
                'translated' => 'Approve',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'english',
                'phrase' => 'Manage Addons',
                'translated' => 'Manage Addons',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'english',
                'phrase' => 'Install addon',
                'translated' => 'Install addon',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'english',
                'phrase' => 'Add new addon',
                'translated' => 'Add new addon',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'english',
                'phrase' => 'System Name',
                'translated' => 'System Name',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'english',
                'phrase' => 'System Title',
                'translated' => 'System Title',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'english',
                'phrase' => 'System Email',
                'translated' => 'System Email',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'english',
                'phrase' => 'Fax',
                'translated' => 'Fax',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'english',
                'phrase' => 'Timezone',
                'translated' => 'Timezone',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'english',
                'phrase' => 'Footer Text',
                'translated' => 'Footer Text',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'english',
                'phrase' => 'Footer Link',
                'translated' => 'Footer Link',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'english',
                'phrase' => 'PRODUCT UPDATE',
                'translated' => 'PRODUCT UPDATE',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'english',
                'phrase' => 'File',
                'translated' => 'File',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'english',
                'phrase' => 'Update',
                'translated' => 'Update',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'english',
                'phrase' => 'SYSTEM LOGO',
                'translated' => 'SYSTEM LOGO',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'english',
                'phrase' => 'Dark logo',
                'translated' => 'Dark logo',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'english',
                'phrase' => 'Light logo',
                'translated' => 'Light logo',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'english',
                'phrase' => 'Favicon',
                'translated' => 'Favicon',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'english',
                'phrase' => 'Update Logo',
                'translated' => 'Update Logo',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'english',
                'phrase' => 'Create Session',
                'translated' => 'Create Session',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'english',
                'phrase' => 'Add Session',
                'translated' => 'Add Session',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'english',
                'phrase' => 'Active session ',
                'translated' => 'Active session ',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'english',
                'phrase' => 'Select a session',
                'translated' => 'Select a session',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'english',
                'phrase' => 'Activate',
                'translated' => 'Activate',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'english',
                'phrase' => 'Session title',
                'translated' => 'Session title',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'english',
                'phrase' => 'Options',
                'translated' => 'Options',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'english',
                'phrase' => 'Edit Session',
                'translated' => 'Edit Session',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'english',
                'phrase' => 'Global Currency',
                'translated' => 'Global Currency',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'english',
                'phrase' => 'Select system currency',
                'translated' => 'Select system currency',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'english',
                'phrase' => 'Currency Position',
                'translated' => 'Currency Position',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'english',
                'phrase' => 'Left',
                'translated' => 'Left',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'english',
                'phrase' => 'Right',
                'translated' => 'Right',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'english',
                'phrase' => 'Left with a space',
                'translated' => 'Left with a space',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'english',
                'phrase' => 'Right with a space',
                'translated' => 'Right with a space',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'english',
                'phrase' => 'Update Currency',
                'translated' => 'Update Currency',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'english',
                'phrase' => 'Protocol',
                'translated' => 'Protocol',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'english',
                'phrase' => 'Smtp crypto',
                'translated' => 'Smtp crypto',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'english',
                'phrase' => 'Smtp host',
                'translated' => 'Smtp host',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'english',
                'phrase' => 'Smtp port',
                'translated' => 'Smtp port',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'english',
                'phrase' => 'Smtp username',
                'translated' => 'Smtp username',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'english',
                'phrase' => 'Smtp password',
                'translated' => 'Smtp password',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'english',
                'phrase' => 'Save',
                'translated' => 'Save',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'english',
                'phrase' => 'Not found',
                'translated' => 'Not found',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'english',
                'phrase' => 'About this application',
                'translated' => 'About this application',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'english',
                'phrase' => 'Software version',
                'translated' => 'Software version',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'english',
                'phrase' => 'Check update',
                'translated' => 'Check update',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'english',
                'phrase' => 'PHP version',
                'translated' => 'PHP version',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'english',
                'phrase' => 'Curl enable',
                'translated' => 'Curl enable',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'english',
                'phrase' => 'Enabled',
                'translated' => 'Enabled',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'english',
                'phrase' => 'Purchase code',
                'translated' => 'Purchase code',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'english',
                'phrase' => 'Product license',
                'translated' => 'Product license',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'english',
                'phrase' => 'invalid',
                'translated' => 'invalid',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'english',
                'phrase' => 'Enter valid purchase code',
                'translated' => 'Enter valid purchase code',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'english',
                'phrase' => 'Customer support status',
                'translated' => 'Customer support status',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'english',
                'phrase' => 'Support expiry date',
                'translated' => 'Support expiry date',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'english',
                'phrase' => 'Customer name',
                'translated' => 'Customer name',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'english',
                'phrase' => 'Get customer support',
                'translated' => 'Get customer support',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'english',
                'phrase' => 'Customer support',
                'translated' => 'Customer support',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'english',
                'phrase' => 'Email',
                'translated' => 'Email',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'english',
                'phrase' => 'Password',
                'translated' => 'Password',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'english',
                'phrase' => 'Forgot password',
                'translated' => 'Forgot password',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'english',
                'phrase' => 'Help',
                'translated' => 'Help',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'english',
                'phrase' => 'Login',
                'translated' => 'Login',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'english',
                'phrase' => 'Total Student',
                'translated' => 'Total Student',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'english',
                'phrase' => 'Teacher',
                'translated' => 'Teacher',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'english',
                'phrase' => 'Total Teacher',
                'translated' => 'Total Teacher',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'english',
                'phrase' => 'Parents',
                'translated' => 'Parents',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'english',
                'phrase' => 'Total Parent',
                'translated' => 'Total Parent',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'english',
                'phrase' => 'Staff',
                'translated' => 'Staff',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'english',
                'phrase' => 'Total Staff',
                'translated' => 'Total Staff',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'english',
                'phrase' => 'Todays Attendance',
                'translated' => 'Todays Attendance',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'english',
                'phrase' => 'Go to Attendance',
                'translated' => 'Go to Attendance',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'english',
                'phrase' => 'Income Report',
                'translated' => 'Income Report',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'english',
                'phrase' => 'Year',
                'translated' => 'Year',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'english',
                'phrase' => 'Month',
                'translated' => 'Month',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'english',
                'phrase' => 'Week',
                'translated' => 'Week',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'english',
                'phrase' => 'Upcoming Events',
                'translated' => 'Upcoming Events',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'english',
                'phrase' => 'See all',
                'translated' => 'See all',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'english',
                'phrase' => 'Admin',
                'translated' => 'Admin',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'english',
                'phrase' => 'Users',
                'translated' => 'Users',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'english',
                'phrase' => 'Accountant',
                'translated' => 'Accountant',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'english',
                'phrase' => 'Librarian',
                'translated' => 'Librarian',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'english',
                'phrase' => 'Parent',
                'translated' => 'Parent',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'english',
                'phrase' => 'Student',
                'translated' => 'Student',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'english',
                'phrase' => 'Teacher Permission',
                'translated' => 'Teacher Permission',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'english',
                'phrase' => 'Admissions',
                'translated' => 'Admissions',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'english',
                'phrase' => 'Examination',
                'translated' => 'Examination',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'english',
                'phrase' => 'Exam Category',
                'translated' => 'Exam Category',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'english',
                'phrase' => 'Offline Exam',
                'translated' => 'Offline Exam',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'english',
                'phrase' => 'Marks',
                'translated' => 'Marks',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'english',
                'phrase' => 'Grades',
                'translated' => 'Grades',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'english',
                'phrase' => 'Promotion',
                'translated' => 'Promotion',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'english',
                'phrase' => 'Academic',
                'translated' => 'Academic',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'english',
                'phrase' => 'Daily Attendance',
                'translated' => 'Daily Attendance',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'english',
                'phrase' => 'Class List',
                'translated' => 'Class List',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'english',
                'phrase' => 'Class Routine',
                'translated' => 'Class Routine',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'english',
                'phrase' => 'Subjects',
                'translated' => 'Subjects',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'english',
                'phrase' => 'Gradebooks',
                'translated' => 'Gradebooks',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'english',
                'phrase' => 'Syllabus',
                'translated' => 'Syllabus',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'english',
                'phrase' => 'Class Room',
                'translated' => 'Class Room',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'english',
                'phrase' => 'Department',
                'translated' => 'Department',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'english',
                'phrase' => 'Accounting',
                'translated' => 'Accounting',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'english',
                'phrase' => 'Student Fee Manager',
                'translated' => 'Student Fee Manager',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'english',
                'phrase' => 'Offline Payment Request',
                'translated' => 'Offline Payment Request',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'english',
                'phrase' => 'Expense Manager',
                'translated' => 'Expense Manager',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'english',
                'phrase' => 'Expense Category',
                'translated' => 'Expense Category',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'english',
                'phrase' => 'Back Office',
                'translated' => 'Back Office',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'english',
                'phrase' => 'Book List Manager',
                'translated' => 'Book List Manager',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'english',
                'phrase' => 'Book Issue Report',
                'translated' => 'Book Issue Report',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'english',
                'phrase' => 'Noticeboard',
                'translated' => 'Noticeboard',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'english',
                'phrase' => 'Events',
                'translated' => 'Events',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'english',
                'phrase' => 'School Settings',
                'translated' => 'School Settings',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'english',
                'phrase' => 'School information',
                'translated' => 'School information',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'english',
                'phrase' => 'Update settings',
                'translated' => 'Update settings',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'english',
                'phrase' => 'Deactive',
                'translated' => 'Deactive',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'english',
                'phrase' => 'Session has been activated',
                'translated' => 'Session has been activated',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'english',
                'phrase' => 'Update session',
                'translated' => 'Update session',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'english',
                'phrase' => 'Admins',
                'translated' => 'Admins',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'english',
                'phrase' => 'Create Admin',
                'translated' => 'Create Admin',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'english',
                'phrase' => 'User Info',
                'translated' => 'User Info',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'english',
                'phrase' => 'Oprions',
                'translated' => 'Oprions',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'english',
                'phrase' => 'Edit Admin',
                'translated' => 'Edit Admin',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'english',
                'phrase' => 'Teachers',
                'translated' => 'Teachers',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'english',
                'phrase' => 'Create Teacher',
                'translated' => 'Create Teacher',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'english',
                'phrase' => 'Create Accountant',
                'translated' => 'Create Accountant',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'english',
                'phrase' => 'Edit Accountant',
                'translated' => 'Edit Accountant',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'english',
                'phrase' => 'Librarians',
                'translated' => 'Librarians',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'english',
                'phrase' => 'Create Librarian',
                'translated' => 'Create Librarian',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'english',
                'phrase' => 'Edit Librarian',
                'translated' => 'Edit Librarian',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'english',
                'phrase' => 'Create Parent',
                'translated' => 'Create Parent',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'english',
                'phrase' => 'Edit Parent',
                'translated' => 'Edit Parent',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'english',
                'phrase' => 'Students',
                'translated' => 'Students',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'english',
                'phrase' => 'Create Student',
                'translated' => 'Create Student',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'english',
                'phrase' => 'Generate id card',
                'translated' => 'Generate id card',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'english',
                'phrase' => 'Assigned Permission For Teacher',
                'translated' => 'Assigned Permission For Teacher',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'english',
                'phrase' => 'Select a class',
                'translated' => 'Select a class',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'english',
                'phrase' => 'First select a class',
                'translated' => 'First select a class',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'english',
                'phrase' => 'Please select a class and section',
                'translated' => 'Please select a class and section',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'english',
                'phrase' => 'Attendance',
                'translated' => 'Attendance',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'english',
                'phrase' => 'Permission updated successfully.',
                'translated' => 'Permission updated successfully.',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'english',
                'phrase' => 'Admission',
                'translated' => 'Admission',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'english',
                'phrase' => 'Bulk student admission',
                'translated' => 'Bulk student admission',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'english',
                'phrase' => 'Class',
                'translated' => 'Class',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'english',
                'phrase' => 'Section',
                'translated' => 'Section',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'english',
                'phrase' => 'Select section',
                'translated' => 'Select section',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'english',
                'phrase' => 'Birthday',
                'translated' => 'Birthday',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'english',
                'phrase' => 'Select gender',
                'translated' => 'Select gender',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'english',
                'phrase' => 'Others',
                'translated' => 'Others',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'english',
                'phrase' => 'Student profile image',
                'translated' => 'Student profile image',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'english',
                'phrase' => 'Add Student',
                'translated' => 'Add Student',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'english',
                'phrase' => 'Create Exam Category',
                'translated' => 'Create Exam Category',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'english',
                'phrase' => 'Add Exam Category',
                'translated' => 'Add Exam Category',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'english',
                'phrase' => 'Title',
                'translated' => 'Title',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'english',
                'phrase' => 'Class test',
                'translated' => 'Class test',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'english',
                'phrase' => 'Edit Exam Category',
                'translated' => 'Edit Exam Category',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'english',
                'phrase' => 'Midterm exam',
                'translated' => 'Midterm exam',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'english',
                'phrase' => 'Final exam',
                'translated' => 'Final exam',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'english',
                'phrase' => 'Admission exam',
                'translated' => 'Admission exam',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'english',
                'phrase' => 'Create Exam',
                'translated' => 'Create Exam',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'english',
                'phrase' => 'Add Exam',
                'translated' => 'Add Exam',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'english',
                'phrase' => 'Exam',
                'translated' => 'Exam',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'english',
                'phrase' => 'Starting Time',
                'translated' => 'Starting Time',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'english',
                'phrase' => 'Ending Time',
                'translated' => 'Ending Time',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'english',
                'phrase' => 'Total Marks',
                'translated' => 'Total Marks',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'english',
                'phrase' => 'Edit Exam',
                'translated' => 'Edit Exam',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'english',
                'phrase' => 'Manage Marks',
                'translated' => 'Manage Marks',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'english',
                'phrase' => 'Select category',
                'translated' => 'Select category',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'english',
                'phrase' => 'Select class',
                'translated' => 'Select class',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'english',
                'phrase' => 'Please select all the fields',
                'translated' => 'Please select all the fields',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'english',
                'phrase' => 'Examknation',
                'translated' => 'Examknation',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'english',
                'phrase' => 'Create Grade',
                'translated' => 'Create Grade',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'english',
                'phrase' => 'Add grade',
                'translated' => 'Add grade',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'english',
                'phrase' => 'Grade',
                'translated' => 'Grade',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'english',
                'phrase' => 'Grade Point',
                'translated' => 'Grade Point',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'english',
                'phrase' => 'Mark From',
                'translated' => 'Mark From',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'english',
                'phrase' => 'Mark Upto',
                'translated' => 'Mark Upto',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'english',
                'phrase' => 'Promotions',
                'translated' => 'Promotions',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'english',
                'phrase' => 'Current session',
                'translated' => 'Current session',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'english',
                'phrase' => 'Session from',
                'translated' => 'Session from',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'english',
                'phrase' => 'Next session',
                'translated' => 'Next session',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'english',
                'phrase' => 'Session to',
                'translated' => 'Session to',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'english',
                'phrase' => 'Promoting from',
                'translated' => 'Promoting from',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'english',
                'phrase' => 'Promoting to',
                'translated' => 'Promoting to',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'english',
                'phrase' => 'Manage promotion',
                'translated' => 'Manage promotion',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'english',
                'phrase' => 'Take Attendance',
                'translated' => 'Take Attendance',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'english',
                'phrase' => 'Select a month',
                'translated' => 'Select a month',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'english',
                'phrase' => 'January',
                'translated' => 'January',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'english',
                'phrase' => 'February',
                'translated' => 'February',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'english',
                'phrase' => 'March',
                'translated' => 'March',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'english',
                'phrase' => 'April',
                'translated' => 'April',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'english',
                'phrase' => 'May',
                'translated' => 'May',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'english',
                'phrase' => 'June',
                'translated' => 'June',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'english',
                'phrase' => 'July',
                'translated' => 'July',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'english',
                'phrase' => 'August',
                'translated' => 'August',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'english',
                'phrase' => 'September',
                'translated' => 'September',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'english',
                'phrase' => 'October',
                'translated' => 'October',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'english',
                'phrase' => 'November',
                'translated' => 'November',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'english',
                'phrase' => 'December',
                'translated' => 'December',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'english',
                'phrase' => 'Select a year',
                'translated' => 'Select a year',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'english',
                'phrase' => 'Please select in all fields !',
                'translated' => 'Please select in all fields !',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'english',
                'phrase' => 'Classes',
                'translated' => 'Classes',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'english',
                'phrase' => 'Create Class',
                'translated' => 'Create Class',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'english',
                'phrase' => 'Add class',
                'translated' => 'Add class',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'english',
                'phrase' => 'Edit Section',
                'translated' => 'Edit Section',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'english',
                'phrase' => 'Edit Class',
                'translated' => 'Edit Class',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'english',
                'phrase' => 'Routines',
                'translated' => 'Routines',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'english',
                'phrase' => 'Add class routine',
                'translated' => 'Add class routine',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'english',
                'phrase' => 'Create Subject',
                'translated' => 'Create Subject',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'english',
                'phrase' => 'Add subject',
                'translated' => 'Add subject',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'english',
                'phrase' => 'Edit Subject',
                'translated' => 'Edit Subject',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'english',
                'phrase' => 'Select a exam category',
                'translated' => 'Select a exam category',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'english',
                'phrase' => 'Create syllabus',
                'translated' => 'Create syllabus',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'english',
                'phrase' => 'Add syllabus',
                'translated' => 'Add syllabus',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'english',
                'phrase' => 'Class Rooms',
                'translated' => 'Class Rooms',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'english',
                'phrase' => 'Create Class Room',
                'translated' => 'Create Class Room',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'english',
                'phrase' => 'Add class room',
                'translated' => 'Add class room',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'english',
                'phrase' => 'Edit Class Room',
                'translated' => 'Edit Class Room',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'english',
                'phrase' => 'Departments',
                'translated' => 'Departments',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'english',
                'phrase' => 'Create Department',
                'translated' => 'Create Department',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'english',
                'phrase' => 'Add department',
                'translated' => 'Add department',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'english',
                'phrase' => 'Edit Department',
                'translated' => 'Edit Department',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'english',
                'phrase' => 'Add Single Invoice',
                'translated' => 'Add Single Invoice',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'english',
                'phrase' => 'Add Mass Invoice',
                'translated' => 'Add Mass Invoice',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'english',
                'phrase' => 'All class',
                'translated' => 'All class',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'english',
                'phrase' => 'All status',
                'translated' => 'All status',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'english',
                'phrase' => 'Paid',
                'translated' => 'Paid',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'english',
                'phrase' => 'Unpaid',
                'translated' => 'Unpaid',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'english',
                'phrase' => 'Invoice No',
                'translated' => 'Invoice No',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'english',
                'phrase' => 'Invoice Title',
                'translated' => 'Invoice Title',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'english',
                'phrase' => 'Total Amount',
                'translated' => 'Total Amount',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'english',
                'phrase' => 'Created at',
                'translated' => 'Created at',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'english',
                'phrase' => 'Paid Amount',
                'translated' => 'Paid Amount',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'english',
                'phrase' => 'Expense',
                'translated' => 'Expense',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'english',
                'phrase' => 'Create Expense',
                'translated' => 'Create Expense',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'english',
                'phrase' => 'Add New Expense',
                'translated' => 'Add New Expense',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'english',
                'phrase' => 'Create Expense Category',
                'translated' => 'Create Expense Category',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'english',
                'phrase' => 'Add Expense Category',
                'translated' => 'Add Expense Category',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'english',
                'phrase' => 'Option',
                'translated' => 'Option',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'english',
                'phrase' => 'Edit Expense Category',
                'translated' => 'Edit Expense Category',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'english',
                'phrase' => 'Book',
                'translated' => 'Book',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'english',
                'phrase' => 'Add book',
                'translated' => 'Add book',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'english',
                'phrase' => 'Book name',
                'translated' => 'Book name',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'english',
                'phrase' => 'Author',
                'translated' => 'Author',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'english',
                'phrase' => 'Copies',
                'translated' => 'Copies',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'english',
                'phrase' => 'Available copies',
                'translated' => 'Available copies',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'english',
                'phrase' => 'Edit Book',
                'translated' => 'Edit Book',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'english',
                'phrase' => 'Book Issue',
                'translated' => 'Book Issue',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'english',
                'phrase' => 'Issue Book',
                'translated' => 'Issue Book',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'english',
                'phrase' => 'Noticeboard calendar',
                'translated' => 'Noticeboard calendar',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'english',
                'phrase' => 'Add New Notice',
                'translated' => 'Add New Notice',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'english',
                'phrase' => 'Locales:',
                'translated' => 'Locales:',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'english',
                'phrase' => 'Current Plan',
                'translated' => 'Current Plan',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'english',
                'phrase' => 'Silver',
                'translated' => 'Silver',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'english',
                'phrase' => 'Monthly',
                'translated' => 'Monthly',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'english',
                'phrase' => 'Subscription Renew Date',
                'translated' => 'Subscription Renew Date',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'english',
                'phrase' => 'Amount To Be Charged',
                'translated' => 'Amount To Be Charged',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'english',
                'phrase' => 'Create Event',
                'translated' => 'Create Event',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'english',
                'phrase' => 'Event title',
                'translated' => 'Event title',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'english',
                'phrase' => 'Date',
                'translated' => 'Date',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'english',
                'phrase' => 'Update event',
                'translated' => 'Update event',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'english',
                'phrase' => 'Upload addons zip file',
                'translated' => 'Upload addons zip file',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'english',
                'phrase' => 'Verified',
                'translated' => 'Verified',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'english',
                'phrase' => 'Details info',
                'translated' => 'Details info',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'english',
                'phrase' => 'Phone Number',
                'translated' => 'Phone Number',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'english',
                'phrase' => 'Designation',
                'translated' => 'Designation',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'english',
                'phrase' => 'Save Changes',
                'translated' => 'Save Changes',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'english',
                'phrase' => 'Select a status',
                'translated' => 'Select a status',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'english',
                'phrase' => 'Update school',
                'translated' => 'Update school',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'english',
                'phrase' => 'Package price',
                'translated' => 'Package price',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'english',
                'phrase' => 'Package Type',
                'translated' => 'Package Type',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'english',
                'phrase' => 'Select a package type',
                'translated' => 'Select a package type',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'english',
                'phrase' => 'Trail',
                'translated' => 'Trail',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'english',
                'phrase' => 'Select a interval',
                'translated' => 'Select a interval',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'english',
                'phrase' => 'Days',
                'translated' => 'Days',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'english',
                'phrase' => 'Yearly',
                'translated' => 'Yearly',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'english',
                'phrase' => 'Interval Preiod',
                'translated' => 'Interval Preiod',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'english',
                'phrase' => 'Description',
                'translated' => 'Description',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'english',
                'phrase' => 'Create package',
                'translated' => 'Create package',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'english',
                'phrase' => 'Update package',
                'translated' => 'Update package',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'english',
                'phrase' => 'Invalid purchase code',
                'translated' => 'Invalid purchase code',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'english',
                'phrase' => 'Inactive',
                'translated' => 'Inactive',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'english',
                'phrase' => 'Save event',
                'translated' => 'Save event',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'english',
                'phrase' => 'Create',
                'translated' => 'Create',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'english',
                'phrase' => 'Select a department',
                'translated' => 'Select a department',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'english',
                'phrase' => 'One',
                'translated' => 'One',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'english',
                'phrase' => 'Two',
                'translated' => 'Two',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'english',
                'phrase' => 'Three',
                'translated' => 'Three',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'english',
                'phrase' => 'Four',
                'translated' => 'Four',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'english',
                'phrase' => 'Five',
                'translated' => 'Five',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'english',
                'phrase' => 'Six',
                'translated' => 'Six',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'english',
                'phrase' => 'Seven',
                'translated' => 'Seven',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'english',
                'phrase' => 'Eight',
                'translated' => 'Eight',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'english',
                'phrase' => 'Nine',
                'translated' => 'Nine',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'english',
                'phrase' => 'Ten',
                'translated' => 'Ten',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'english',
                'phrase' => 'Add students',
                'translated' => 'Add students',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'english',
                'phrase' => 'Create category',
                'translated' => 'Create category',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'english',
                'phrase' => 'Exam Name',
                'translated' => 'Exam Name',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'english',
                'phrase' => 'Select exam category name',
                'translated' => 'Select exam category name',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'english',
                'phrase' => 'Subject',
                'translated' => 'Subject',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'english',
                'phrase' => 'Starting date',
                'translated' => 'Starting date',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'english',
                'phrase' => 'Ending date',
                'translated' => 'Ending date',
            ),
            397 => 
            array (
                'id' => 399,
                'name' => 'english',
                'phrase' => 'Mark',
                'translated' => 'Mark',
            ),
            398 => 
            array (
                'id' => 400,
                'name' => 'english',
                'phrase' => 'Comment',
                'translated' => 'Comment',
            ),
            399 => 
            array (
                'id' => 401,
                'name' => 'english',
                'phrase' => 'Value has been updated successfully',
                'translated' => 'Value has been updated successfully',
            ),
            400 => 
            array (
                'id' => 402,
                'name' => 'english',
                'phrase' => 'Required mark field',
                'translated' => 'Required mark field',
            ),
            401 => 
            array (
                'id' => 403,
                'name' => 'english',
                'phrase' => 'Image',
                'translated' => 'Image',
            ),
            402 => 
            array (
                'id' => 404,
                'name' => 'english',
                'phrase' => 'Enroll to',
                'translated' => 'Enroll to',
            ),
            403 => 
            array (
                'id' => 405,
                'name' => 'english',
                'phrase' => 'Select a section',
                'translated' => 'Select a section',
            ),
            404 => 
            array (
                'id' => 406,
                'name' => 'english',
                'phrase' => 'Attendance Report Of',
                'translated' => 'Attendance Report Of',
            ),
            405 => 
            array (
                'id' => 407,
                'name' => 'english',
                'phrase' => 'Last Update at',
                'translated' => 'Last Update at',
            ),
            406 => 
            array (
                'id' => 408,
                'name' => 'english',
                'phrase' => 'Time',
                'translated' => 'Time',
            ),
            407 => 
            array (
                'id' => 409,
                'name' => 'english',
                'phrase' => 'Please select the required fields',
                'translated' => 'Please select the required fields',
            ),
            408 => 
            array (
                'id' => 410,
                'name' => 'english',
                'phrase' => 'Saturday',
                'translated' => 'Saturday',
            ),
            409 => 
            array (
                'id' => 411,
                'name' => 'english',
                'phrase' => 'Sunday',
                'translated' => 'Sunday',
            ),
            410 => 
            array (
                'id' => 412,
                'name' => 'english',
                'phrase' => 'Monday',
                'translated' => 'Monday',
            ),
            411 => 
            array (
                'id' => 413,
                'name' => 'english',
                'phrase' => 'Tuesday',
                'translated' => 'Tuesday',
            ),
            412 => 
            array (
                'id' => 414,
                'name' => 'english',
                'phrase' => 'Wednesday',
                'translated' => 'Wednesday',
            ),
            413 => 
            array (
                'id' => 415,
                'name' => 'english',
                'phrase' => 'Update subject',
                'translated' => 'Update subject',
            ),
            414 => 
            array (
                'id' => 416,
                'name' => 'english',
                'phrase' => 'Select subject',
                'translated' => 'Select subject',
            ),
            415 => 
            array (
                'id' => 417,
                'name' => 'english',
                'phrase' => 'Assign a teacher',
                'translated' => 'Assign a teacher',
            ),
            416 => 
            array (
                'id' => 418,
                'name' => 'english',
                'phrase' => 'Select a class room',
                'translated' => 'Select a class room',
            ),
            417 => 
            array (
                'id' => 419,
                'name' => 'english',
                'phrase' => 'Day',
                'translated' => 'Day',
            ),
            418 => 
            array (
                'id' => 420,
                'name' => 'english',
                'phrase' => 'Select a day',
                'translated' => 'Select a day',
            ),
            419 => 
            array (
                'id' => 421,
                'name' => 'english',
                'phrase' => 'Thursday',
                'translated' => 'Thursday',
            ),
            420 => 
            array (
                'id' => 422,
                'name' => 'english',
                'phrase' => 'Friday',
                'translated' => 'Friday',
            ),
            421 => 
            array (
                'id' => 423,
                'name' => 'english',
                'phrase' => 'Starting hour',
                'translated' => 'Starting hour',
            ),
            422 => 
            array (
                'id' => 424,
                'name' => 'english',
                'phrase' => 'Starting minute',
                'translated' => 'Starting minute',
            ),
            423 => 
            array (
                'id' => 425,
                'name' => 'english',
                'phrase' => 'Ending hour',
                'translated' => 'Ending hour',
            ),
            424 => 
            array (
                'id' => 426,
                'name' => 'english',
                'phrase' => 'Ending minute',
                'translated' => 'Ending minute',
            ),
            425 => 
            array (
                'id' => 427,
                'name' => 'english',
                'phrase' => 'Add routine',
                'translated' => 'Add routine',
            ),
            426 => 
            array (
                'id' => 428,
                'name' => 'english',
                'phrase' => 'Edit class routine',
                'translated' => 'Edit class routine',
            ),
            427 => 
            array (
                'id' => 429,
                'name' => 'english',
                'phrase' => 'Tittle',
                'translated' => 'Tittle',
            ),
            428 => 
            array (
                'id' => 430,
                'name' => 'english',
                'phrase' => 'Upload syllabus',
                'translated' => 'Upload syllabus',
            ),
            429 => 
            array (
                'id' => 431,
                'name' => 'english',
                'phrase' => 'Select student',
                'translated' => 'Select student',
            ),
            430 => 
            array (
                'id' => 432,
                'name' => 'english',
                'phrase' => 'Select a student',
                'translated' => 'Select a student',
            ),
            431 => 
            array (
                'id' => 433,
                'name' => 'english',
                'phrase' => 'Payment method',
                'translated' => 'Payment method',
            ),
            432 => 
            array (
                'id' => 434,
                'name' => 'english',
                'phrase' => 'Select a payment method',
                'translated' => 'Select a payment method',
            ),
            433 => 
            array (
                'id' => 435,
                'name' => 'english',
                'phrase' => 'Cash',
                'translated' => 'Cash',
            ),
            434 => 
            array (
                'id' => 436,
                'name' => 'english',
                'phrase' => 'Paypal',
                'translated' => 'Paypal',
            ),
            435 => 
            array (
                'id' => 437,
                'name' => 'english',
                'phrase' => 'Paytm',
                'translated' => 'Paytm',
            ),
            436 => 
            array (
                'id' => 438,
                'name' => 'english',
                'phrase' => 'Razorpay',
                'translated' => 'Razorpay',
            ),
            437 => 
            array (
                'id' => 439,
                'name' => 'english',
                'phrase' => 'Create invoice',
                'translated' => 'Create invoice',
            ),
            438 => 
            array (
                'id' => 440,
                'name' => 'english',
                'phrase' => 'Payment date',
                'translated' => 'Payment date',
            ),
            439 => 
            array (
                'id' => 441,
                'name' => 'english',
                'phrase' => 'Print invoice',
                'translated' => 'Print invoice',
            ),
            440 => 
            array (
                'id' => 442,
                'name' => 'english',
                'phrase' => 'Edit Invoice',
                'translated' => 'Edit Invoice',
            ),
            441 => 
            array (
                'id' => 443,
                'name' => 'english',
                'phrase' => 'Amount',
                'translated' => 'Amount',
            ),
            442 => 
            array (
                'id' => 444,
                'name' => 'english',
                'phrase' => 'Select an expense category',
                'translated' => 'Select an expense category',
            ),
            443 => 
            array (
                'id' => 445,
                'name' => 'english',
                'phrase' => 'Edit Expense',
                'translated' => 'Edit Expense',
            ),
            444 => 
            array (
                'id' => 446,
                'name' => 'english',
                'phrase' => 'Issue date',
                'translated' => 'Issue date',
            ),
            445 => 
            array (
                'id' => 447,
                'name' => 'english',
                'phrase' => 'Select book',
                'translated' => 'Select book',
            ),
            446 => 
            array (
                'id' => 448,
                'name' => 'english',
                'phrase' => 'Id',
                'translated' => 'Id',
            ),
            447 => 
            array (
                'id' => 449,
                'name' => 'english',
                'phrase' => 'Pending',
                'translated' => 'Pending',
            ),
            448 => 
            array (
                'id' => 450,
                'name' => 'english',
                'phrase' => 'Update issued book',
                'translated' => 'Update issued book',
            ),
            449 => 
            array (
                'id' => 451,
                'name' => 'english',
                'phrase' => 'Return this book',
                'translated' => 'Return this book',
            ),
            450 => 
            array (
                'id' => 452,
                'name' => 'english',
                'phrase' => 'Notice title',
                'translated' => 'Notice title',
            ),
            451 => 
            array (
                'id' => 453,
                'name' => 'english',
                'phrase' => 'Start date',
                'translated' => 'Start date',
            ),
            452 => 
            array (
                'id' => 454,
                'name' => 'english',
                'phrase' => 'Setup additional date & time',
                'translated' => 'Setup additional date & time',
            ),
            453 => 
            array (
                'id' => 455,
                'name' => 'english',
                'phrase' => 'Start time',
                'translated' => 'Start time',
            ),
            454 => 
            array (
                'id' => 456,
                'name' => 'english',
                'phrase' => 'End date',
                'translated' => 'End date',
            ),
            455 => 
            array (
                'id' => 457,
                'name' => 'english',
                'phrase' => 'End time',
                'translated' => 'End time',
            ),
            456 => 
            array (
                'id' => 458,
                'name' => 'english',
                'phrase' => 'Notice',
                'translated' => 'Notice',
            ),
            457 => 
            array (
                'id' => 459,
                'name' => 'english',
                'phrase' => 'Show on website',
                'translated' => 'Show on website',
            ),
            458 => 
            array (
                'id' => 460,
                'name' => 'english',
                'phrase' => 'Show',
                'translated' => 'Show',
            ),
            459 => 
            array (
                'id' => 461,
                'name' => 'english',
                'phrase' => 'Do not need to show',
                'translated' => 'Do not need to show',
            ),
            460 => 
            array (
                'id' => 462,
                'name' => 'english',
                'phrase' => 'Upload notice photo',
                'translated' => 'Upload notice photo',
            ),
            461 => 
            array (
                'id' => 463,
                'name' => 'english',
                'phrase' => 'Save notice',
                'translated' => 'Save notice',
            ),
            462 => 
            array (
                'id' => 464,
                'name' => 'english',
                'phrase' => 'School Currency',
                'translated' => 'School Currency',
            ),
            463 => 
            array (
                'id' => 465,
                'name' => 'english',
                'phrase' => 'Exam List',
                'translated' => 'Exam List',
            ),
            464 => 
            array (
                'id' => 466,
                'name' => 'english',
                'phrase' => 'Profile',
                'translated' => 'Profile',
            ),
            465 => 
            array (
                'id' => 467,
                'name' => 'english',
                'phrase' => ' Download',
                'translated' => ' Download',
            ),
            466 => 
            array (
                'id' => 468,
                'name' => 'english',
                'phrase' => 'Select a subject',
                'translated' => 'Select a subject',
            ),
            467 => 
            array (
                'id' => 469,
                'name' => 'english',
                'phrase' => 'Welcome, to',
                'translated' => 'Welcome, to',
            ),
            468 => 
            array (
                'id' => 470,
                'name' => 'english',
                'phrase' => 'Fee Manager',
                'translated' => 'Fee Manager',
            ),
            469 => 
            array (
                'id' => 471,
                'name' => 'english',
                'phrase' => 'List Of Books',
                'translated' => 'List Of Books',
            ),
            470 => 
            array (
                'id' => 472,
                'name' => 'english',
                'phrase' => 'Issued Book',
                'translated' => 'Issued Book',
            ),
            471 => 
            array (
                'id' => 473,
                'name' => 'english',
                'phrase' => 'Student Code',
                'translated' => 'Student Code',
            ),
            472 => 
            array (
                'id' => 474,
                'name' => 'english',
                'phrase' => 'Candice Kennedy',
                'translated' => 'Candice Kennedy',
            ),
            473 => 
            array (
                'id' => 475,
                'name' => 'english',
                'phrase' => 'English',
                'translated' => 'English',
            ),
            474 => 
            array (
                'id' => 476,
                'name' => 'english',
                'phrase' => 'Natalie Ashley',
                'translated' => 'Natalie Ashley',
            ),
            475 => 
            array (
                'id' => 477,
                'name' => 'english',
                'phrase' => 'Byron Chase',
                'translated' => 'Byron Chase',
            ),
            476 => 
            array (
                'id' => 478,
                'name' => 'english',
                'phrase' => 'Rafael Hardy',
                'translated' => 'Rafael Hardy',
            ),
            477 => 
            array (
                'id' => 479,
                'name' => 'english',
                'phrase' => 'Mathematics',
                'translated' => 'Mathematics',
            ),
            478 => 
            array (
                'id' => 480,
                'name' => 'english',
                'phrase' => 'Aphrodite Shaffer',
                'translated' => 'Aphrodite Shaffer',
            ),
            479 => 
            array (
                'id' => 481,
                'name' => 'english',
                'phrase' => 'Bangla',
                'translated' => 'Bangla',
            ),
            480 => 
            array (
                'id' => 482,
                'name' => 'english',
                'phrase' => 'Fatima Phillips',
                'translated' => 'Fatima Phillips',
            ),
            481 => 
            array (
                'id' => 483,
                'name' => 'english',
                'phrase' => 'Sydney Pearson',
                'translated' => 'Sydney Pearson',
            ),
            482 => 
            array (
                'id' => 484,
                'name' => 'english',
                'phrase' => 'Drawing',
                'translated' => 'Drawing',
            ),
            483 => 
            array (
                'id' => 485,
                'name' => 'english',
                'phrase' => 'Imani Cooper',
                'translated' => 'Imani Cooper',
            ),
            484 => 
            array (
                'id' => 486,
                'name' => 'english',
                'phrase' => 'Ulric Spencer',
                'translated' => 'Ulric Spencer',
            ),
            485 => 
            array (
                'id' => 487,
                'name' => 'english',
                'phrase' => 'Yoshio Gentry',
                'translated' => 'Yoshio Gentry',
            ),
            486 => 
            array (
                'id' => 488,
                'name' => 'english',
                'phrase' => 'Attendance report',
                'translated' => 'Attendance report',
            ),
            487 => 
            array (
                'id' => 489,
                'name' => 'english',
                'phrase' => 'Of',
                'translated' => 'Of',
            ),
            488 => 
            array (
                'id' => 490,
                'name' => 'english',
                'phrase' => 'Last updated at',
                'translated' => 'Last updated at',
            ),
            489 => 
            array (
                'id' => 491,
                'name' => 'english',
                'phrase' => 'View Marks',
                'translated' => 'View Marks',
            ),
            490 => 
            array (
                'id' => 492,
                'name' => 'english',
                'phrase' => 'Subject name',
                'translated' => 'Subject name',
            ),
            491 => 
            array (
                'id' => 493,
                'name' => 'english',
                'phrase' => 'Pay',
                'translated' => 'Pay',
            ),
            492 => 
            array (
                'id' => 494,
                'name' => 'english',
                'phrase' => 'List Of Book',
                'translated' => 'List Of Book',
            ),
            493 => 
            array (
                'id' => 495,
                'name' => 'english',
                'phrase' => 'Child',
                'translated' => 'Child',
            ),
            494 => 
            array (
                'id' => 496,
                'name' => 'english',
                'phrase' => 'Teaches',
                'translated' => 'Teaches',
            ),
            495 => 
            array (
                'id' => 498,
                'name' => 'english',
                'phrase' => 'Student List',
                'translated' => 'Student List',
            ),
            496 => 
            array (
                'id' => 499,
                'name' => 'english',
                'phrase' => 'Id card',
                'translated' => 'Id card',
            ),
            497 => 
            array (
                'id' => 500,
                'name' => 'english',
                'phrase' => 'Code',
                'translated' => 'Code',
            ),
            498 => 
            array (
                'id' => 501,
                'name' => 'english',
                'phrase' => 'Not found',
                'translated' => 'Not found',
            ),
            499 => 
            array (
                'id' => 502,
                'name' => 'english',
                'phrase' => 'Contact',
                'translated' => 'Contact',
            ),
        ));
        \DB::table('language')->insert(array (
            0 => 
            array (
                'id' => 503,
                'name' => 'english',
                'phrase' => 'Search Attendance Report',
                'translated' => 'Search Attendance Report',
            ),
            1 => 
            array (
                'id' => 504,
                'name' => 'english',
                'phrase' => 'Please select in all fields !',
                'translated' => 'Please select in all fields !',
            ),
            2 => 
            array (
                'id' => 505,
                'name' => 'english',
                'phrase' => 'Please select student',
                'translated' => 'Please select student',
            ),
            3 => 
            array (
                'id' => 506,
                'name' => 'english',
                'phrase' => 'Download',
                'translated' => 'Download',
            ),
            4 => 
            array (
                'id' => 507,
                'name' => 'english',
                'phrase' => 'Ekattor',
                'translated' => 'Ekattor',
            ),
            5 => 
            array (
                'id' => 508,
                'name' => 'english',
                'phrase' => 'Add  Single Invoice',
                'translated' => 'Add  Single Invoice',
            ),
            6 => 
            array (
                'id' => 509,
                'name' => 'english',
                'phrase' => 'Add  Mass Invoice',
                'translated' => 'Add  Mass Invoice',
            ),
            7 => 
            array (
                'id' => 510,
                'name' => 'english',
                'phrase' => 'Update invoice',
                'translated' => 'Update invoice',
            ),
            8 => 
            array (
                'id' => 511,
                'name' => 'english',
                'phrase' => 'Invoice',
                'translated' => 'Invoice',
            ),
            9 => 
            array (
                'id' => 512,
                'name' => 'english',
                'phrase' => 'Please find below the invoice',
                'translated' => 'Please find below the invoice',
            ),
            10 => 
            array (
                'id' => 513,
                'name' => 'english',
                'phrase' => 'Billing Address',
                'translated' => 'Billing Address',
            ),
            11 => 
            array (
                'id' => 514,
                'name' => 'english',
                'phrase' => 'Due Amount',
                'translated' => 'Due Amount',
            ),
            12 => 
            array (
                'id' => 515,
                'name' => 'english',
                'phrase' => 'Student Fee',
                'translated' => 'Student Fee',
            ),
            13 => 
            array (
                'id' => 516,
                'name' => 'english',
                'phrase' => 'Subtotal',
                'translated' => 'Subtotal',
            ),
            14 => 
            array (
                'id' => 517,
                'name' => 'english',
                'phrase' => 'Due',
                'translated' => 'Due',
            ),
            15 => 
            array (
                'id' => 518,
                'name' => 'english',
                'phrase' => 'Grand Total',
                'translated' => 'Grand Total',
            ),
            16 => 
            array (
                'id' => 519,
                'name' => 'english',
                'phrase' => 'Update book issue information',
                'translated' => 'Update book issue information',
            ),
            17 => 
            array (
                'id' => 520,
                'name' => 'english',
                'phrase' => 'Not Subscribed',
                'translated' => 'Not Subscribed',
            ),
            18 => 
            array (
                'id' => 521,
                'name' => 'english',
                'phrase' => 'You are not subscribed to any plan. Subscribe now.',
                'translated' => 'You are not subscribed to any plan. Subscribe now.',
            ),
            19 => 
            array (
                'id' => 522,
                'name' => 'english',
                'phrase' => 'Subscribe',
                'translated' => 'Subscribe',
            ),
            20 => 
            array (
                'id' => 523,
                'name' => 'english',
                'phrase' => 'Package List',
                'translated' => 'Package List',
            ),
            21 => 
            array (
                'id' => 524,
                'name' => 'english',
                'phrase' => 'Payment | Ekator 8',
                'translated' => 'Payment | Ekator 8',
            ),
            22 => 
            array (
                'id' => 525,
                'name' => 'english',
                'phrase' => 'Make Payment',
                'translated' => 'Make Payment',
            ),
            23 => 
            array (
                'id' => 526,
                'name' => 'english',
                'phrase' => 'Payment Gateway',
                'translated' => 'Payment Gateway',
            ),
            24 => 
            array (
                'id' => 527,
                'name' => 'english',
                'phrase' => 'Offline',
                'translated' => 'Offline',
            ),
            25 => 
            array (
                'id' => 528,
                'name' => 'english',
                'phrase' => 'Addon',
                'translated' => 'Addon',
            ),
            26 => 
            array (
                'id' => 529,
                'name' => 'english',
                'phrase' => 'Invoice Summary',
                'translated' => 'Invoice Summary',
            ),
            27 => 
            array (
                'id' => 530,
                'name' => 'english',
                'phrase' => 'Document of your payment',
                'translated' => 'Document of your payment',
            ),
            28 => 
            array (
                'id' => 531,
                'name' => 'english',
                'phrase' => 'Submit payment document',
                'translated' => 'Submit payment document',
            ),
            29 => 
            array (
                'id' => 532,
                'name' => 'english',
                'phrase' => 'Instruction',
                'translated' => 'Instruction',
            ),
            30 => 
            array (
                'id' => 533,
                'name' => 'english',
                'phrase' => 'Admin will review your payment document and then approve the Payment.',
                'translated' => 'Admin will review your payment document and then approve the Payment.',
            ),
            31 => 
            array (
                'id' => 534,
                'name' => 'english',
                'phrase' => 'Pending Payment',
                'translated' => 'Pending Payment',
            ),
            32 => 
            array (
                'id' => 535,
                'name' => 'english',
                'phrase' => 'You payment request has been sent to Superadmin ',
                'translated' => 'You payment request has been sent to Superadmin ',
            ),
            33 => 
            array (
                'id' => 536,
                'name' => 'english',
                'phrase' => 'Suspended',
                'translated' => 'Suspended',
            ),
            34 => 
            array (
                'id' => 537,
                'name' => 'english',
                'phrase' => 'Enter your email address to reset your password.',
                'translated' => 'Enter your email address to reset your password.',
            ),
            35 => 
            array (
                'id' => 538,
                'name' => 'english',
                'phrase' => 'Reset password',
                'translated' => 'Reset password',
            ),
            36 => 
            array (
                'id' => 539,
                'name' => 'english',
                'phrase' => 'Language Settings',
                'translated' => 'Language Settings',
            ),
            37 => 
            array (
                'id' => 540,
                'name' => 'english',
                'phrase' => 'Language',
                'translated' => 'Language',
            ),
            38 => 
            array (
                'id' => 541,
                'name' => 'english',
                'phrase' => 'Edit phrase',
                'translated' => 'Edit phrase',
            ),
            39 => 
            array (
                'id' => 542,
                'name' => 'english',
                'phrase' => 'Delete language',
                'translated' => 'Delete language',
            ),
            40 => 
            array (
                'id' => 543,
                'name' => 'english',
                'phrase' => 'edit_phrase',
                'translated' => 'edit_phrase',
            ),
            41 => 
            array (
                'id' => 544,
                'name' => 'english',
                'phrase' => 'delete_language',
                'translated' => 'delete_language',
            ),
            42 => 
            array (
                'id' => 545,
                'name' => 'english',
                'phrase' => 'System default language can not be removed',
                'translated' => 'System default language can not be removed',
            ),
            43 => 
            array (
                'id' => 546,
                'name' => 'english',
                'phrase' => 'language_list',
                'translated' => 'language_list',
            ),
            44 => 
            array (
                'id' => 547,
                'name' => 'english',
                'phrase' => 'add_language',
                'translated' => 'add_language',
            ),
            45 => 
            array (
                'id' => 548,
                'name' => 'english',
                'phrase' => 'Language list',
                'translated' => 'Language list',
            ),
            46 => 
            array (
                'id' => 549,
                'name' => 'english',
                'phrase' => 'Add language',
                'translated' => 'Add language',
            ),
            47 => 
            array (
                'id' => 550,
                'name' => 'english',
                'phrase' => 'Add new phrase',
                'translated' => 'Add new phrase',
            ),
            48 => 
            array (
                'id' => 551,
                'name' => 'english',
                'phrase' => 'add_new_language',
                'translated' => 'add_new_language',
            ),
            49 => 
            array (
                'id' => 552,
                'name' => 'english',
                'phrase' => 'No special character or space is allowed',
                'translated' => 'No special character or space is allowed',
            ),
            50 => 
            array (
                'id' => 553,
                'name' => 'english',
                'phrase' => 'valid_examples',
                'translated' => 'valid_examples',
            ),
            51 => 
            array (
                'id' => 554,
                'name' => 'english',
                'phrase' => 'No special character or space is allowed',
                'translated' => 'No special character or space is allowed',
            ),
            52 => 
            array (
                'id' => 555,
                'name' => 'english',
                'phrase' => 'Validexamples',
                'translated' => 'Validexamples',
            ),
            53 => 
            array (
                'id' => 556,
                'name' => 'english',
                'phrase' => 'Add new language',
                'translated' => 'Add new language',
            ),
            54 => 
            array (
                'id' => 557,
                'name' => 'english',
                'phrase' => 'Valid examples',
                'translated' => 'Valid examples',
            ),
            55 => 
            array (
                'id' => 560,
                'name' => 'english',
                'phrase' => 'Phrase updated',
                'translated' => 'Phrase updated',
            ),
            56 => 
            array (
                'id' => 561,
                'name' => 'english',
                'phrase' => 'System Language',
                'translated' => 'System Language',
            ),
            57 => 
            array (
                'id' => 562,
                'name' => 'english',
                'phrase' => 'Edit Grade',
                'translated' => 'Edit Grade',
            ),
            58 => 
            array (
                'id' => 563,
                'name' => 'english',
                'phrase' => 'Number of scopy',
                'translated' => 'Number of scopy',
            ),
            59 => 
            array (
                'id' => 564,
                'name' => 'english',
                'phrase' => 'Save book',
                'translated' => 'Save book',
            ),
            60 => 
            array (
                'id' => 565,
                'name' => 'english',
                'phrase' => 'New Password',
                'translated' => 'New Password',
            ),
            61 => 
            array (
                'id' => 566,
                'name' => 'english',
                'phrase' => 'Confirm Password',
                'translated' => 'Confirm Password',
            ),
            62 => 
            array (
                'id' => 567,
                'name' => 'english',
                'phrase' => 'Current Password',
                'translated' => 'Current Password',
            ),
            63 => 
            array (
                'id' => 568,
                'name' => 'english',
                'phrase' => 'Add Parent',
                'translated' => 'Add Parent',
            ),
            64 => 
            array (
                'id' => 569,
                'name' => 'english',
                'phrase' => 'Parent profile image',
                'translated' => 'Parent profile image',
            ),
            65 => 
            array (
                'id' => 570,
                'name' => 'english',
                'phrase' => 'Allowances',
                'translated' => 'Allowances',
            ),
            66 => 
            array (
                'id' => 571,
                'name' => 'english',
                'phrase' => 'Type',
                'translated' => 'Type',
            ),
            67 => 
            array (
                'id' => 572,
                'name' => 'english',
                'phrase' => 'Select child',
                'translated' => 'Select child',
            ),
            68 => 
            array (
                'id' => 573,
                'name' => 'english',
                'phrase' => 'Show student list',
                'translated' => 'Show student list',
            ),
            69 => 
            array (
                'id' => 574,
                'name' => 'english',
                'phrase' => 'Update attendance',
                'translated' => 'Update attendance',
            ),
            70 => 
            array (
                'id' => 575,
                'name' => 'english',
                'phrase' => 'Present All',
                'translated' => 'Present All',
            ),
            71 => 
            array (
                'id' => 576,
                'name' => 'english',
                'phrase' => 'Absent All',
                'translated' => 'Absent All',
            ),
            72 => 
            array (
                'id' => 577,
                'name' => 'english',
                'phrase' => 'present',
                'translated' => 'present',
            ),
            73 => 
            array (
                'id' => 578,
                'name' => 'english',
                'phrase' => 'absent',
                'translated' => 'absent',
            ),
            74 => 
            array (
                'id' => 579,
                'name' => 'english',
                'phrase' => 'not_updated_yet',
                'translated' => 'not_updated_yet',
            ),
            75 => 
            array (
                'id' => 580,
                'name' => 'english',
                'phrase' => '31',
                'translated' => '31',
            ),
            76 => 
            array (
                'id' => 581,
                'name' => 'english',
                'phrase' => 'Not updated yet',
                'translated' => 'Not updated yet',
            ),
            77 => 
            array (
                'id' => 582,
                'name' => 'english',
                'phrase' => 'Update class',
                'translated' => 'Update class',
            ),
            78 => 
            array (
                'id' => 583,
                'name' => 'english',
                'phrase' => 'Edit syllabus',
                'translated' => 'Edit syllabus',
            ),
            79 => 
            array (
                'id' => 584,
                'name' => 'english',
                'phrase' => 'Select expense category',
                'translated' => 'Select expense category',
            ),
            80 => 
            array (
                'id' => 585,
                'name' => 'english',
                'phrase' => 'Filter Options',
                'translated' => 'Filter Options',
            ),
            81 => 
            array (
                'id' => 586,
                'name' => 'english',
                'phrase' => 'Reset',
                'translated' => 'Reset',
            ),
            82 => 
            array (
                'id' => 587,
                'name' => 'english',
                'phrase' => 'Apply',
                'translated' => 'Apply',
            ),
            83 => 
            array (
                'id' => 588,
                'name' => 'english',
                'phrase' => 'Profile info updated successfully',
                'translated' => 'Profile info updated successfully',
            ),
            84 => 
            array (
                'id' => 589,
                'name' => 'english',
                'phrase' => 'not_found',
                'translated' => 'not_found',
            ),
            85 => 
            array (
                'id' => 590,
                'name' => 'english',
                'phrase' => 'No date found',
                'translated' => 'No date found',
            ),
            86 => 
            array (
                'id' => 591,
                'name' => 'english',
                'phrase' => 'No date found',
                'translated' => 'No date found',
            ),
            87 => 
            array (
                'id' => 592,
                'name' => 'english',
                'phrase' => 'Blood ',
                'translated' => 'Blood ',
            ),
            88 => 
            array (
                'id' => 593,
                'name' => 'english',
                'phrase' => 'Blood Type',
                'translated' => 'Blood Type',
            ),
            89 => 
            array (
                'id' => 594,
                'name' => 'english',
                'phrase' => 'Help Link',
                'translated' => 'Help Link',
            ),
            90 => 
            array (
                'id' => 595,
                'name' => 'english',
                'phrase' => 'From',
                'translated' => 'From',
            ),
            91 => 
            array (
                'id' => 596,
                'name' => 'english',
                'phrase' => 'To',
                'translated' => 'To',
            ),
            92 => 
            array (
                'id' => 597,
                'name' => 'english',
                'phrase' => 'Select a parent',
                'translated' => 'Select a parent',
            ),
            93 => 
            array (
                'id' => 598,
                'name' => 'english',
                'phrase' => 'Add',
                'translated' => 'Add',
            ),
            94 => 
            array (
                'id' => 599,
                'name' => 'english',
                'phrase' => 'Document',
                'translated' => 'Document',
            ),
            95 => 
            array (
                'id' => 600,
                'name' => 'english',
                'phrase' => 'Decline',
                'translated' => 'Decline',
            ),
            96 => 
            array (
                'id' => 601,
                'name' => 'english',
                'phrase' => 'Number of child:',
                'translated' => 'Number of child:',
            ),
            97 => 
            array (
                'id' => 602,
                'name' => 'english',
                'phrase' => 'Number of child',
                'translated' => 'Number of child',
            ),
            98 => 
            array (
                'id' => 603,
                'name' => 'english',
                'phrase' => 'Parent Create',
                'translated' => 'Parent Create',
            ),
            99 => 
            array (
                'id' => 604,
                'name' => 'english',
                'phrase' => 'Parent Update',
                'translated' => 'Parent Update',
            ),
            100 => 
            array (
                'id' => 2452,
                'name' => 'english',
                'phrase' => 'Version updated successfully',
                'translated' => 'Version updated successfully',
            ),
            101 => 
            array (
                'id' => 2453,
                'name' => 'english',
                'phrase' => 'Website Settings',
                'translated' => 'Website Settings',
            ),
            102 => 
            array (
                'id' => 2454,
                'name' => 'english',
                'phrase' => 'Manage Faq',
                'translated' => 'Manage Faq',
            ),
            103 => 
            array (
                'id' => 2455,
                'name' => 'english',
                'phrase' => 'Visit Website',
                'translated' => 'Visit Website',
            ),
            104 => 
            array (
                'id' => 2456,
                'name' => 'english',
                'phrase' => 'Feature',
                'translated' => 'Feature',
            ),
            105 => 
            array (
                'id' => 2457,
                'name' => 'english',
                'phrase' => 'Faq',
                'translated' => 'Faq',
            ),
            106 => 
            array (
                'id' => 2458,
                'name' => 'english',
                'phrase' => 'Register',
                'translated' => 'Register',
            ),
            107 => 
            array (
                'id' => 2459,
                'name' => 'english',
                'phrase' => 'School Register Form',
                'translated' => 'School Register Form',
            ),
            108 => 
            array (
                'id' => 2460,
                'name' => 'english',
                'phrase' => 'Admin Name',
                'translated' => 'Admin Name',
            ),
            109 => 
            array (
                'id' => 2461,
                'name' => 'english',
                'phrase' => 'User Account',
                'translated' => 'User Account',
            ),
            110 => 
            array (
                'id' => 2462,
                'name' => 'english',
                'phrase' => 'Our Features',
                'translated' => 'Our Features',
            ),
            111 => 
            array (
                'id' => 2463,
                'name' => 'english',
                'phrase' => 'Features',
                'translated' => 'Features',
            ),
            112 => 
            array (
                'id' => 2464,
                'name' => 'english',
                'phrase' => 'Students Admission',
                'translated' => 'Students Admission',
            ),
            113 => 
            array (
                'id' => 2465,
                'name' => 'english',
                'phrase' => 'Your schools can add their students in two different ways',
                'translated' => 'Your schools can add their students in two different ways',
            ),
            114 => 
            array (
                'id' => 2466,
                'name' => 'english',
                'phrase' => 'Take your students attendance in a smart way',
                'translated' => 'Take your students attendance in a smart way',
            ),
            115 => 
            array (
                'id' => 2467,
                'name' => 'english',
                'phrase' => 'Manage your schools class list whenever you want',
                'translated' => 'Manage your schools class list whenever you want',
            ),
            116 => 
            array (
                'id' => 2468,
                'name' => 'english',
                'phrase' => 'Add different subjects for different classes',
                'translated' => 'Add different subjects for different classes',
            ),
            117 => 
            array (
                'id' => 2469,
                'name' => 'english',
                'phrase' => 'Event Calender',
                'translated' => 'Event Calender',
            ),
            118 => 
            array (
                'id' => 2470,
                'name' => 'english',
                'phrase' => 'The school admin can manage their schools events separately',
                'translated' => 'The school admin can manage their schools events separately',
            ),
            119 => 
            array (
                'id' => 2471,
                'name' => 'english',
                'phrase' => 'Routine',
                'translated' => 'Routine',
            ),
            120 => 
            array (
                'id' => 2472,
                'name' => 'english',
                'phrase' => 'Manage your schools class routine easily',
                'translated' => 'Manage your schools class routine easily',
            ),
            121 => 
            array (
                'id' => 2473,
                'name' => 'english',
                'phrase' => 'Student Information',
                'translated' => 'Student Information',
            ),
            122 => 
            array (
                'id' => 2474,
                'name' => 'english',
                'phrase' => 'Add your students information within a few minute',
                'translated' => 'Add your students information within a few minute',
            ),
            123 => 
            array (
                'id' => 2475,
                'name' => 'english',
                'phrase' => 'Manage syllabuses based on the classes',
                'translated' => 'Manage syllabuses based on the classes',
            ),
            124 => 
            array (
                'id' => 2476,
                'name' => 'english',
                'phrase' => 'Fees Management',
                'translated' => 'Fees Management',
            ),
            125 => 
            array (
                'id' => 2477,
                'name' => 'english',
                'phrase' => 'Pay academic fees in a smart way with Ekattor 8',
                'translated' => 'Pay academic fees in a smart way with Ekattor 8',
            ),
            126 => 
            array (
                'id' => 2478,
                'name' => 'english',
                'phrase' => 'ID Card Generator',
                'translated' => 'ID Card Generator',
            ),
            127 => 
            array (
                'id' => 2479,
                'name' => 'english',
                'phrase' => 'Generate your students ID card whenever you want',
                'translated' => 'Generate your students ID card whenever you want',
            ),
            128 => 
            array (
                'id' => 2480,
                'name' => 'english',
                'phrase' => 'Online Payment Gateway',
                'translated' => 'Online Payment Gateway',
            ),
            129 => 
            array (
                'id' => 2481,
                'name' => 'english',
                'phrase' => 'Pay your subscription and academic fees',
                'translated' => 'Pay your subscription and academic fees',
            ),
            130 => 
            array (
                'id' => 2482,
                'name' => 'english',
                'phrase' => 'Invoice Generator',
                'translated' => 'Invoice Generator',
            ),
            131 => 
            array (
                'id' => 2483,
                'name' => 'english',
                'phrase' => 'Generate invoices to make the payments more reliable',
                'translated' => 'Generate invoices to make the payments more reliable',
            ),
            132 => 
            array (
                'id' => 2484,
                'name' => 'english',
                'phrase' => 'Offline Payment',
                'translated' => 'Offline Payment',
            ),
            133 => 
            array (
                'id' => 2485,
                'name' => 'english',
                'phrase' => 'Complete payment with local money',
                'translated' => 'Complete payment with local money',
            ),
            134 => 
            array (
                'id' => 2486,
                'name' => 'english',
                'phrase' => 'Book List',
                'translated' => 'Book List',
            ),
            135 => 
            array (
                'id' => 2487,
                'name' => 'english',
                'phrase' => 'Manage your schools library within a few clicks',
                'translated' => 'Manage your schools library within a few clicks',
            ),
            136 => 
            array (
                'id' => 2488,
                'name' => 'english',
                'phrase' => 'Manage your schools notices smartly',
                'translated' => 'Manage your schools notices smartly',
            ),
            137 => 
            array (
                'id' => 2489,
                'name' => 'english',
                'phrase' => 'Create and manage your schools exams and categories',
                'translated' => 'Create and manage your schools exams and categories',
            ),
            138 => 
            array (
                'id' => 2490,
                'name' => 'english',
                'phrase' => 'Marks Management',
                'translated' => 'Marks Management',
            ),
            139 => 
            array (
                'id' => 2491,
                'name' => 'english',
                'phrase' => 'Manage your students exam marks',
                'translated' => 'Manage your students exam marks',
            ),
            140 => 
            array (
                'id' => 2492,
                'name' => 'english',
                'phrase' => 'Add and manage grades in the examination',
                'translated' => 'Add and manage grades in the examination',
            ),
            141 => 
            array (
                'id' => 2493,
                'name' => 'english',
                'phrase' => 'Have Any Question',
                'translated' => 'Have Any Question',
            ),
            142 => 
            array (
                'id' => 2494,
                'name' => 'english',
                'phrase' => 'Contact us with any questions',
                'translated' => 'Contact us with any questions',
            ),
            143 => 
            array (
                'id' => 2495,
                'name' => 'english',
                'phrase' => 'Contact Us',
                'translated' => 'Contact Us',
            ),
            144 => 
            array (
                'id' => 2496,
                'name' => 'english',
                'phrase' => 'Social Link',
                'translated' => 'Social Link',
            ),
            145 => 
            array (
                'id' => 2497,
                'name' => 'english',
                'phrase' => 'Ekattor8 School Management System',
                'translated' => 'Ekattor8 School Management System',
            ),
            146 => 
            array (
                'id' => 2498,
                'name' => 'english',
                'phrase' => 'Excel upload',
                'translated' => 'Excel upload',
            ),
            147 => 
            array (
                'id' => 2499,
                'name' => 'english',
                'phrase' => 'Frontend View',
                'translated' => 'Frontend View',
            ),
            148 => 
            array (
                'id' => 2500,
                'name' => 'english',
                'phrase' => 'No',
                'translated' => 'No',
            ),
            149 => 
            array (
                'id' => 2501,
                'name' => 'english',
                'phrase' => 'Youtube Api Key',
                'translated' => 'Youtube Api Key',
            ),
            150 => 
            array (
                'id' => 2502,
                'name' => 'english',
                'phrase' => 'Vimeo Api Key',
                'translated' => 'Vimeo Api Key',
            ),
            151 => 
            array (
                'id' => 2503,
                'name' => 'english',
                'phrase' => 'Has to be bigger than',
                'translated' => 'Has to be bigger than',
            ),
            152 => 
            array (
                'id' => 2504,
                'name' => 'english',
                'phrase' => 'GENERAL SETTINGS',
                'translated' => 'GENERAL SETTINGS',
            ),
            153 => 
            array (
                'id' => 2505,
                'name' => 'english',
                'phrase' => 'Banner Title',
                'translated' => 'Banner Title',
            ),
            154 => 
            array (
                'id' => 2506,
                'name' => 'english',
                'phrase' => 'Banner Subtitle',
                'translated' => 'Banner Subtitle',
            ),
            155 => 
            array (
                'id' => 2507,
                'name' => 'english',
                'phrase' => 'Price Subtitle',
                'translated' => 'Price Subtitle',
            ),
            156 => 
            array (
                'id' => 2508,
                'name' => 'english',
                'phrase' => 'Faq Subtitle',
                'translated' => 'Faq Subtitle',
            ),
            157 => 
            array (
                'id' => 2509,
                'name' => 'english',
                'phrase' => 'Facebook Link',
                'translated' => 'Facebook Link',
            ),
            158 => 
            array (
                'id' => 2510,
                'name' => 'english',
                'phrase' => 'Twitter Link',
                'translated' => 'Twitter Link',
            ),
            159 => 
            array (
                'id' => 2511,
                'name' => 'english',
                'phrase' => 'Linkedin Link',
                'translated' => 'Linkedin Link',
            ),
            160 => 
            array (
                'id' => 2512,
                'name' => 'english',
                'phrase' => 'Instagram Link',
                'translated' => 'Instagram Link',
            ),
            161 => 
            array (
                'id' => 2513,
                'name' => 'english',
                'phrase' => 'Contact Mail',
                'translated' => 'Contact Mail',
            ),
            162 => 
            array (
                'id' => 2514,
                'name' => 'english',
                'phrase' => 'Frontend Footer Text',
                'translated' => 'Frontend Footer Text',
            ),
            163 => 
            array (
                'id' => 2515,
                'name' => 'english',
                'phrase' => 'Copyright Text',
                'translated' => 'Copyright Text',
            ),
            164 => 
            array (
                'id' => 2516,
                'name' => 'english',
                'phrase' => 'Add question and answer',
                'translated' => 'Add question and answer',
            ),
            165 => 
            array (
                'id' => 2517,
                'name' => 'english',
                'phrase' => 'Faq List',
                'translated' => 'Faq List',
            ),
            166 => 
            array (
                'id' => 2518,
                'name' => 'english',
                'phrase' => 'Update question and answer',
                'translated' => 'Update question and answer',
            ),
            167 => 
            array (
                'id' => 398,
                'name' => 'english',
                'phrase' => 'Student name',
                'translated' => 'Student name',
            ),
        ));
        
        
    }
}