<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Purnama',
                'lastname' => 'Anaking',
                'email'=> 'purnama.anaking@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Adzanil',
                'lastname' => 'Rachmadhi',
                'email'=> 'adzanil.rachmadhi@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],
            [
                'firstname' => 'Berlian',
                'lastname' => 'Rahmy',
                'email'=> 'berlian.rahmy@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
        Employee::factory()->count(10)->create();
    }
}
