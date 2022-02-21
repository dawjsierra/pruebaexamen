<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'FC Barcelona',
            'stadium' => 'Camp Nou',
            'city' => 'Barcelona',
            'color' => 'azulgrana'
        ]);

        Team::create([
            'name' => 'Real Madrid',
            'stadium' => 'Bernabeu',
            'city' => 'Madrid',
            'color' => 'blanco'
        ]);

        Team::create([
            'name' => 'Paris Saint Germain',
            'stadium' => 'Parc des Princes',
            'city' => 'Paris',
            'color' => 'azulgrana'
        ]);

        Team::create([
            'name' => 'Manchester United',
            'stadium' => 'Old Trafford',
            'city' => 'Manchester',
            'color' => 'rojo'
        ]);

        Team::create([
            'name' => 'Atletico de Madrid',
            'stadium' => 'Wanda Metropolitano',
            'city' => 'Madrid',
            'color' => 'rojiblanco'
        ]);

        Team::create([
            'name' => 'Sevilla FC',
            'stadium' => 'Sanchez Pizjuan',
            'city' => 'Sevilla',
            'color' => 'blanquirojo'
        ]);
    }
}
