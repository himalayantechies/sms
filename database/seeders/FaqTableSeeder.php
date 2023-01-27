<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq')->delete();
        
        \DB::table('faq')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'What is Ekattor 8?',
            'description' => 'Ekattor 8 is a collection of programs designed to assist schools in administering their executive responsibilities on a day-to-day basis. Ekattor 8 is an updated version of Ekattor ERP (Enterprise Resource Planning). Also, Ekattor 8 is designed for SAAS (Software as a Service) projects.',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'How can I get developed my customer features?',
                'description' => 'Custom features do not coming with product support. You can contact our support center and send us details about your requirement. If our schedule is open, we can give you a quotation and take your project according to the contract.',
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'Which license to choose for my client project?',
                'description' => 'If you use academy LMS for a commercial project of a client, you will be required extended license.',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'How much time will I get developer support?',
                'description' => 'By default, you are entitled to developer support for 6 months from the date of your purchase. Later on anytime you can renew the support pack if you need developer support. If you don’t need any developer support, you don’t need to buy it.',
            ),
        ));
        
        
    }
}