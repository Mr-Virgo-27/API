<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<50; $i++){
            Student::create([
            'student_nm'=>$faker->name,
            'dob'=>$faker->date(),
            'prev_school'=>$faker->company,
            'grade_on_entry'=>'1st Form'
            ]);
        }
    }
}
