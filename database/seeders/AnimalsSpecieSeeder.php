<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalsSpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species = [
            'Cachorro',
            'Gato',
            'Ave',
            'Roedor',
            'Cavalo',
        ];

        foreach ($species as $specie) {
            DB::table('animals_specie')->insert([
                'specie_name' => $specie,
            ]);
        }
    }
}
