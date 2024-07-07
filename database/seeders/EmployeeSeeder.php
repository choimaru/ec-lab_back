<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach (range(1, 30) as $index) {
            Employee::create([
                "employee_cd" => "U00000" . sprintf('%02d', $index),
                "employee_name" => fake()->name(),
                "kana" => fake()->kanaName(),
                "email" => fake()->email(),
                "password" => bcrypt("test"),
                "tel" => fake()->phoneNumber(),
                "department_cd" => "D00000" . sprintf('%02d', $index),
                "post" => fake()->randomElement(['一般', '一般', '一般', 'リーダー', '係長', '課長', '部長']),
                "authority" => fake()->numberBetween(0, 3),
                "employment_status" => fake()->numberBetween(0, 8),
                "incumbency_status" => fake()->numberBetween(0, 9),
                "login_at" => fake()->dateTime(),
                "failure_count" => 0,
                "locked_at" => null,
                "created_employee" => "U00000" . sprintf('%02d', fake()->numberBetween(1, 30)),
                "updated_employee" => "U00000" . sprintf('%02d', fake()->numberBetween(1, 30)),
            ]);
        }
    }
}
