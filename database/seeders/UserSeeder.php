<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ngademin grup anu',
            'username' => 'ngademin',
            'email' => 'ngademin@gmail.com',
            'password' => Hash::make('password'),
        ])->assignRole('Super Admin');

        $users = [];
        $faker = \Faker\Factory::create('id_ID');

        for($i = 0; $i < 100; $i++) {
            $users[] = [
                'name' => $faker->name(),
                'username' => $faker->userName() . $i,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach(array_chunk($users, 1000) as $user) {
            User::insert($user);
        }
    }
}
