<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'delantero',
            'description' => 'marcar goles, atacar'
        ]);

        Position::create([
            'name' => 'centrocampista',
            'description' => 'pasar el balon, atacar y defender'
        ]);

        Position::create([
            'name' => 'defensa',
            'description' => 'intentar que el balon no llegue al area, defender'
        ]);

        Position::create([
            'name' => 'portero',
            'description' => 'parar balones evitando goles, defender'
        ]);
    }
}
