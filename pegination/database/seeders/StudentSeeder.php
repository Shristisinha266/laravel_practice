<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
// use App\Models\student;

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
        //
        $faker = Faker::create();
        for($i=0; $i>=10; $i++){
        DB::table("students")->insert([
            "fname" => $faker->firstname,
            "lname" => $faker->lastname,
            "city" => $faker->city
        ]);
    }
    }
}
