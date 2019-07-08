<?php

use Illuminate\Database\Seeder;
use App\Chambre;

class ChambresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'       => '5',
                'numero'       => '1',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '2',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '3',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '4',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '5',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '6',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '7',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '8',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '9',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],
            [
                'user_id'       => '5',
                'numero'       => '10',
                'categorie'       => 'Classique',
                'patient'       => 'null',
                'prix'       => '5000',
                'statut'       => 'libre',
            ],

        ];
        foreach ($data as $key => $value) {

            Chambre::create($value);
        }
    }
}
