<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ClassesTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(GlobalSettingsTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(PaymentGatewaysTableSeeder::class);
        $this->call(PaymentHistoryTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
