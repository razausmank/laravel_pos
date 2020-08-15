<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => "Usman",
            'last_name' => "Raza",
            'username' => "usmanraza",
            'email' => "razausmankhan97@gmail.com",
            'password' => Hash::make("testing"),
        ]);
    }
}
