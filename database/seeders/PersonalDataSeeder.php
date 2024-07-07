<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Personal_data;
use Illuminate\Database\Seeder;

class PersonalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = Employee::all();
        $employees->each(function ($employee) {
            Personal_data::create([
                "employee_cd" => $employee["employee_cd"],
                "gender" => fake()->numberBetween(0, 1),
                "birthday" => fake()->date($format = 'Y-m-d', $max = 'now'),
                "zip_code" => fake()->postcode(),
                "prefecture" => fake()->prefecture(),
                "address" => fake()->ward() . fake()->city() . fake()->streetAddress(),
                "building" => fake()->secondaryAddress(),
                "email" => fake()->unique()->safeEmail(),
                "tel" => fake()->phoneNumber(),
                "emergency_tel" => fake()->phoneNumber(),
                "entry_date" => fake()->date($format = 'Y-m-d', $max = 'now'),
                "retirement_date" => null,
                "retirement_status" => fake()->numberBetween(0, 6),
                "created_employee" => "U00000" . sprintf('%02d', fake()->numberBetween(1, 30)),
                "updated_employee" => "U00000" . sprintf('%02d', fake()->numberBetween(1, 30)),
            ]);
        });
    }
}
