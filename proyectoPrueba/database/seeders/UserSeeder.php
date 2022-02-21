<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;
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
            'username' => 'leomessi',
            'name' => 'Lionnel',
            'lastname' => 'Messi',
            'position_id' => '1',
            'password' => Hash::make('12345678'),
            'email' => 'leomessi@gmail.com'
        ]);

        User::create([
            'username' => 'cristianoronaldo',
            'name' => 'Cristiano',
            'lastname' => 'Ronaldo',
            'position_id' => '1',
            'password' => Hash::make('12345678'),
            'email' => 'cristiano@gmail.com'
        ]);
    }
}
