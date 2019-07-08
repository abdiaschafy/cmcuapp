<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientsTableSeeder extends Seeder
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
                'user_id'       => '2',
                'numero_dossier'       => '1575601',
                'name'       => 'Chafang Lontchi Abdias',
                'assurance'       => 'AREA ASSURANCE',
                'numero_assurance'       => '25698525',
                'frais'       => '15000',
            ],
            [
                'user_id'       => '2',
                'numero_dossier'       => '1578701',
                'name'       => 'Takam julle',
                'assurance'       => 'AXA ASSURANCE',
                'numero_assurance'       => '29898525',
                'frais'       => '15000',
            ],
            [
                'user_id'       => '2',
                'numero_dossier'       => '1575701',
                'name'       => 'Bassogo',
                'assurance'       => 'ACTIVA',
                'numero_assurance'       => '25698536',
                'frais'       => '15000',
            ],

        ];
        foreach ($data as $key => $value) {

            Patient::create($value);
        }
    }
}
