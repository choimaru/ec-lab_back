<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('employees')->truncate();
        DB::table('personal_datas')->truncate();
        DB::table('general_codes')->truncate();

        $this->call(EmployeeSeeder::class);
        $this->call(PersonalDataSeeder::class);
        $this->call(GeneralCodeSeeder::class);
    }
}
