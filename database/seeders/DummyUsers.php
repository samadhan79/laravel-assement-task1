<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Directory;

class DummyUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker::create();
     $gender = $faker->randomElement(['male', 'female']);
     foreach(range(1,50) as $index){
        $gender = $faker->randomElement(['male', 'female']);
        DB::table('users')->insert([
            'fname' => $faker->name($gender),
            'email' => $faker->safeEmail,
            // 'name' => $faker->userName,
            // 'phone' => $faker->phoneNumber,
            'gender' => $gender,
            // 'address' => $faker->address,
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'password' => Hash::make('123'),
            'role_id' => 2,

        ]);   
    }




}
}
