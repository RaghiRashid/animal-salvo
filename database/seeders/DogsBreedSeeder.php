<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogsBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breeds = [
            'Vira Lata'=> 1,
            'pinscher'=>1,
            'Pastor Alemão'=>1,
            'Golden Retriever'=>1,
            'Buldogue Francês'=>1,
            'Bulldog'=>1,
            'Beagle'=>1,
            'Poodle'=>1,
            'Rottweiler'=>1,
            'Yorkshire Terrier'=>1,
            'Boxer'=>1,
            'Dachshund (Teckel)'=>1,
            'Siberian Husky'=>1,
            'Doberman Pinscher'=>1,
            'Shih Tzu'=>1,
            'Great Dane (Dogue Alemão)'=>1,
            'Pembroke Welsh Corgi'=>1,
            'Pastor Australiano'=>1,
            'Chihuahua'=>1,
            'Border Collie'=>1,
            'Pug'=>1,
            'Labrador Retriever'=>1,
            'Outra'=>1,
            'Siamês'=>2,
            'Persa'=>2,
            'Maine Coon'=>2,
            'British Shorthair (Gato de Pelo Curto Britânico)'=>2,
            'Vira Lata'=> 2,
            'Ragdoll'=>2,
            'Bengal'=>2,
            'Scottish Fold (Gato de Orelhas Dobradas Escocês)'=>2,
            'Siberiano'=>2,
            'Sphynx'=>2,
            'Exótico'=>2,
            'Outra'=>2,
            'Calopsita'=>3,
            'Canário Belga'=>3,
            'Agapornis '=>3,
            'Periquito Australiano'=>3,
            'Papagaio '=>3,
            'Cacatua '=>3,
            'Arara '=>3,
            'Mandarim'=>3,
            'Diamante-de-gould '=>3,
            'Agapornis '=>3,
            'Outra'=>3,
            'Holland Lop'=>4,
            'Mini Lop'=>4,
            'Netherland Dwarf'=>4,
            'Lionhead'=>4,
            'Rex'=>4,
            'Outra'=>4,
            'Quarto de Milha'=>5,
            'Mangalarga Marchador'=>5,
            'Crioulo'=>5,
            'Paint Horse'=>5,
            'Appaloosa'=>5,
            'Outra'=>5,
        ];


        foreach ($breeds as $breed => $specieId) {
            DB::table('animals_breed')->insert([
                'breed_name' => $breed,
                'specie_id' => $specieId,
            ]);
        }
    }
}


