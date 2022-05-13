<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('\App\Models\User');
        for($i = 1 ; $i <= 10 ; $i++){
        	DB::table('users')->insert([
            'name'=> $faker->name,
            'email'=>$faker->unique()->safeEmail,
            'password'=>bcrypt('password123'),
            'role_id'=>2
        ]);

     
    }
}
}
