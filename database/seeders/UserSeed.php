<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;   
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');

        for($i=0;$i<=200;$i++){
            User::create([
                'name'=> $faker->name,
                'email'=> $faker->email,
                'password'=>Hash::make('secret123'),
            ]);
        }
    }
}
