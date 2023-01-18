<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currency')->delete();
        
        \DB::table('currency')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albanian Lek',
                'code' => 'ALL',
                'symbol' => 'Lek',
                'paypal_supported' => 0,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Algerian Dinar',
                'code' => 'DZD',
                'symbol' => 'دج',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Angolan Kwanza',
                'code' => 'AOA',
                'symbol' => 'Kz',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Argentine Peso',
                'code' => 'ARS',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Armenian Dram',
                'code' => 'AMD',
                'symbol' => '֏',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Aruban Florin',
                'code' => 'AWG',
                'symbol' => 'ƒ',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Azerbaijani Manat',
                'code' => 'AZN',
                'symbol' => 'm',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bahamian Dollar',
                'code' => 'BSD',
                'symbol' => 'B$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Bahraini Dinar',
                'code' => 'BHD',
                'symbol' => '.د.ب',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Bangladeshi Taka',
                'code' => 'BDT',
                'symbol' => '৳',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Barbadian Dollar',
                'code' => 'BBD',
                'symbol' => 'Bds$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Belarusian Ruble',
                'code' => 'BYR',
                'symbol' => 'Br',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Belgian Franc',
                'code' => 'BEF',
                'symbol' => 'fr',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Belize Dollar',
                'code' => 'BZD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bermudan Dollar',
                'code' => 'BMD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bhutanese Ngultrum',
                'code' => 'BTN',
                'symbol' => 'Nu.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bitcoin',
                'code' => 'BTC',
                'symbol' => '฿',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Bolivian Boliviano',
                'code' => 'BOB',
                'symbol' => 'Bs.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Bosnia',
                'code' => 'BAM',
                'symbol' => 'KM',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Botswanan Pula',
                'code' => 'BWP',
                'symbol' => 'P',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Brazilian Real',
                'code' => 'BRL',
                'symbol' => 'R$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'British Pound Sterling',
                'code' => 'GBP',
                'symbol' => '£',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Brunei Dollar',
                'code' => 'BND',
                'symbol' => 'B$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Bulgarian Lev',
                'code' => 'BGN',
                'symbol' => 'Лв.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Burundian Franc',
                'code' => 'BIF',
                'symbol' => 'FBu',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Cambodian Riel',
                'code' => 'KHR',
                'symbol' => 'KHR',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Canadian Dollar',
                'code' => 'CAD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Cape Verdean Escudo',
                'code' => 'CVE',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Cayman Islands Dollar',
                'code' => 'KYD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'CFA Franc BCEAO',
                'code' => 'XOF',
                'symbol' => 'CFA',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'CFA Franc BEAC',
                'code' => 'XAF',
                'symbol' => 'FCFA',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'CFP Franc',
                'code' => 'XPF',
                'symbol' => '₣',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Chilean Peso',
                'code' => 'CLP',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Chinese Yuan',
                'code' => 'CNY',
                'symbol' => '¥',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Colombian Peso',
                'code' => 'COP',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Comorian Franc',
                'code' => 'KMF',
                'symbol' => 'CF',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Congolese Franc',
                'code' => 'CDF',
                'symbol' => 'FC',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Costa Rican ColÃ³n',
                'code' => 'CRC',
                'symbol' => '₡',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Croatian Kuna',
                'code' => 'HRK',
                'symbol' => 'kn',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Cuban Convertible Peso',
                'code' => 'CUC',
                'symbol' => '$, CUC',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Czech Republic Koruna',
                'code' => 'CZK',
                'symbol' => 'Kč',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Danish Krone',
                'code' => 'DKK',
                'symbol' => 'Kr.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Djiboutian Franc',
                'code' => 'DJF',
                'symbol' => 'Fdj',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Dominican Peso',
                'code' => 'DOP',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'East Caribbean Dollar',
                'code' => 'XCD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Egyptian Pound',
                'code' => 'EGP',
                'symbol' => 'ج.م',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Eritrean Nakfa',
                'code' => 'ERN',
                'symbol' => 'Nfk',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Estonian Kroon',
                'code' => 'EEK',
                'symbol' => 'kr',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Ethiopian Birr',
                'code' => 'ETB',
                'symbol' => 'Nkf',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Falkland Islands Pound',
                'code' => 'FKP',
                'symbol' => '£',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Fijian Dollar',
                'code' => 'FJD',
                'symbol' => 'FJ$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Gambian Dalasi',
                'code' => 'GMD',
                'symbol' => 'D',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Georgian Lari',
                'code' => 'GEL',
                'symbol' => 'ლ',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'German Mark',
                'code' => 'DEM',
                'symbol' => 'DM',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Ghanaian Cedi',
                'code' => 'GHS',
                'symbol' => 'GH₵',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Gibraltar Pound',
                'code' => 'GIP',
                'symbol' => '£',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Greek Drachma',
                'code' => 'GRD',
                'symbol' => '₯, Δρχ, Δρ',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Guatemalan Quetzal',
                'code' => 'GTQ',
                'symbol' => 'Q',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Guinean Franc',
                'code' => 'GNF',
                'symbol' => 'FG',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Guyanaese Dollar',
                'code' => 'GYD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Haitian Gourde',
                'code' => 'HTG',
                'symbol' => 'G',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Honduran Lempira',
                'code' => 'HNL',
                'symbol' => 'L',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Hong Kong Dollar',
                'code' => 'HKD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Hungarian Forint',
                'code' => 'HUF',
                'symbol' => 'Ft',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Icelandic KrÃ³na',
                'code' => 'ISK',
                'symbol' => 'kr',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Indian Rupee',
                'code' => 'INR',
                'symbol' => '₹',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Indonesian Rupiah',
                'code' => 'IDR',
                'symbol' => 'Rp',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Iranian Rial',
                'code' => 'IRR',
                'symbol' => '﷼',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Iraqi Dinar',
                'code' => 'IQD',
                'symbol' => 'د.ع',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Israeli New Sheqel',
                'code' => 'ILS',
                'symbol' => '₪',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Italian Lira',
                'code' => 'ITL',
                'symbol' => 'L,£',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Jamaican Dollar',
                'code' => 'JMD',
                'symbol' => 'J$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Japanese Yen',
                'code' => 'JPY',
                'symbol' => '¥',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Jordanian Dinar',
                'code' => 'JOD',
                'symbol' => 'ا.د',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Kazakhstani Tenge',
                'code' => 'KZT',
                'symbol' => 'лв',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Kenyan Shilling',
                'code' => 'KES',
                'symbol' => 'KSh',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Kuwaiti Dinar',
                'code' => 'KWD',
                'symbol' => 'ك.د',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Kyrgystani Som',
                'code' => 'KGS',
                'symbol' => 'лв',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Laotian Kip',
                'code' => 'LAK',
                'symbol' => '₭',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Latvian Lats',
                'code' => 'LVL',
                'symbol' => 'Ls',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Lebanese Pound',
                'code' => 'LBP',
                'symbol' => '£',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Lesotho Loti',
                'code' => 'LSL',
                'symbol' => 'L',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Liberian Dollar',
                'code' => 'LRD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Libyan Dinar',
                'code' => 'LYD',
                'symbol' => 'د.ل',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Lithuanian Litas',
                'code' => 'LTL',
                'symbol' => 'Lt',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Macanese Pataca',
                'code' => 'MOP',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Macedonian Denar',
                'code' => 'MKD',
                'symbol' => 'ден',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Malagasy Ariary',
                'code' => 'MGA',
                'symbol' => 'Ar',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Malawian Kwacha',
                'code' => 'MWK',
                'symbol' => 'MK',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Malaysian Ringgit',
                'code' => 'MYR',
                'symbol' => 'RM',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Maldivian Rufiyaa',
                'code' => 'MVR',
                'symbol' => 'Rf',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Mauritanian Ouguiya',
                'code' => 'MRO',
                'symbol' => 'MRU',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Mauritian Rupee',
                'code' => 'MUR',
                'symbol' => '₨',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Mexican Peso',
                'code' => 'MXN',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Moldovan Leu',
                'code' => 'MDL',
                'symbol' => 'L',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Mongolian Tugrik',
                'code' => 'MNT',
                'symbol' => '₮',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Moroccan Dirham',
                'code' => 'MAD',
                'symbol' => 'MAD',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Mozambican Metical',
                'code' => 'MZM',
                'symbol' => 'MT',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Myanmar Kyat',
                'code' => 'MMK',
                'symbol' => 'K',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Namibian Dollar',
                'code' => 'NAD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Nepalese Rupee',
                'code' => 'NPR',
                'symbol' => '₨',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Netherlands Antillean Guilder',
                'code' => 'ANG',
                'symbol' => 'ƒ',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'New Taiwan Dollar',
                'code' => 'TWD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'New Zealand Dollar',
                'code' => 'NZD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Nicaraguan CÃ³rdoba',
                'code' => 'NIO',
                'symbol' => 'C$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Nigerian Naira',
                'code' => 'NGN',
                'symbol' => '₦',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'North Korean Won',
                'code' => 'KPW',
                'symbol' => '₩',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Norwegian Krone',
                'code' => 'NOK',
                'symbol' => 'kr',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Omani Rial',
                'code' => 'OMR',
                'symbol' => '.ع.ر',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Pakistani Rupee',
                'code' => 'PKR',
                'symbol' => '₨',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Panamanian Balboa',
                'code' => 'PAB',
                'symbol' => 'B/.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Papua New Guinean Kina',
                'code' => 'PGK',
                'symbol' => 'K',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Paraguayan Guarani',
                'code' => 'PYG',
                'symbol' => '₲',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Peruvian Nuevo Sol',
                'code' => 'PEN',
                'symbol' => 'S/.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Philippine Peso',
                'code' => 'PHP',
                'symbol' => '₱',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Polish Zloty',
                'code' => 'PLN',
                'symbol' => 'zł',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Qatari Rial',
                'code' => 'QAR',
                'symbol' => 'ق.ر',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Romanian Leu',
                'code' => 'RON',
                'symbol' => 'lei',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Russian Ruble',
                'code' => 'RUB',
                'symbol' => '₽',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Rwandan Franc',
                'code' => 'RWF',
                'symbol' => 'FRw',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Salvadoran ColÃ³n',
                'code' => 'SVC',
                'symbol' => '₡',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Samoan Tala',
                'code' => 'WST',
                'symbol' => 'SAT',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Saudi Riyal',
                'code' => 'SAR',
                'symbol' => '﷼',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Serbian Dinar',
                'code' => 'RSD',
                'symbol' => 'din',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Seychellois Rupee',
                'code' => 'SCR',
                'symbol' => 'SRe',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Sierra Leonean Leone',
                'code' => 'SLL',
                'symbol' => 'Le',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Singapore Dollar',
                'code' => 'SGD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Slovak Koruna',
                'code' => 'SKK',
                'symbol' => 'Sk',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Solomon Islands Dollar',
                'code' => 'SBD',
                'symbol' => 'Si$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Somali Shilling',
                'code' => 'SOS',
                'symbol' => 'Sh.so.',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'South African Rand',
                'code' => 'ZAR',
                'symbol' => 'R',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'South Korean Won',
                'code' => 'KRW',
                'symbol' => '₩',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Special Drawing Rights',
                'code' => 'XDR',
                'symbol' => 'SDR',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Sri Lankan Rupee',
                'code' => 'LKR',
                'symbol' => 'Rs',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'St. Helena Pound',
                'code' => 'SHP',
                'symbol' => '£',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Sudanese Pound',
                'code' => 'SDG',
                'symbol' => '.س.ج',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Surinamese Dollar',
                'code' => 'SRD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Swazi Lilangeni',
                'code' => 'SZL',
                'symbol' => 'E',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Swedish Krona',
                'code' => 'SEK',
                'symbol' => 'kr',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Swiss Franc',
                'code' => 'CHF',
                'symbol' => 'CHf',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Syrian Pound',
                'code' => 'SYP',
                'symbol' => 'LS',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'São Tomé and Príncipe Dobra',
                'code' => 'STD',
                'symbol' => 'Db',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Tajikistani Somoni',
                'code' => 'TJS',
                'symbol' => 'SM',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Tanzanian Shilling',
                'code' => 'TZS',
                'symbol' => 'TSh',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Thai Baht',
                'code' => 'THB',
                'symbol' => '฿',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Tongan pa\'anga',
                'code' => 'TOP',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Trinidad & Tobago Dollar',
                'code' => 'TTD',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Tunisian Dinar',
                'code' => 'TND',
                'symbol' => 'ت.د',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Turkish Lira',
                'code' => 'TRY',
                'symbol' => '₺',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Turkmenistani Manat',
                'code' => 'TMT',
                'symbol' => 'T',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Ugandan Shilling',
                'code' => 'UGX',
                'symbol' => 'UGX',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Ukrainian Hryvnia',
                'code' => 'UAH',
                'symbol' => '₴',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'United Arab Emirates Dirham',
                'code' => 'AED',
                'symbol' => 'إ.د',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Uruguayan Peso',
                'code' => 'UYU',
                'symbol' => '$',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Afghan Afghani',
                'code' => 'AFA',
                'symbol' => '؋',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Uzbekistan Som',
                'code' => 'UZS',
                'symbol' => 'лв',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Vanuatu Vatu',
                'code' => 'VUV',
                'symbol' => 'VT',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Venezuelan BolÃvar',
                'code' => 'VEF',
                'symbol' => 'Bs',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 0,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Vietnamese Dong',
                'code' => 'VND',
                'symbol' => '₫',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Yemeni Rial',
                'code' => 'YER',
                'symbol' => '﷼',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 0,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Zambian Kwacha',
                'code' => 'ZMK',
                'symbol' => 'ZK',
                'paypal_supported' => 1,
                'stripe_supported' => 1,
                'flutterwave_supported' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'PesosColombian Peso',
                'code' => 'COP',
                'symbol' => '$',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'SEPA',
                'code' => 'EUR',
                'symbol' => '€',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 1,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Mozambican Metical',
                'code' => 'MZN',
                'symbol' => 'MT',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Peruvian Sol',
                'code' => 'SOL',
                'symbol' => 'S/',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Zambian Kwacha',
                'code' => 'ZMW',
                'symbol' => 'ZK',
                'paypal_supported' => 0,
                'stripe_supported' => 0,
                'flutterwave_supported' => 1,
            ),
        ));
        
        
    }
}