<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = \App\User::create([
            'role_id' => '1',
            'name' => 'administrateur',
            'login' => 'sysadmin',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'admin',
            'lieu_naissance' => 'Mbouda',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user22 = \App\User::create([
            'role_id' => '9',
            'name' => 'Fokemne',
            'login' => 'caisse',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'Lucienne',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user9 = \App\User::create([
            'role_id' => '4',
            'name' => 'Kamdem',
            'login' => 'infirmier',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'Martin',
            'lieu_naissance' => 'Douala',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user10 = \App\User::create([
            'role_id' => '5',
            'name' => 'Owona',
            'login' => 'logistique',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'Jeanne Flore',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user11 = \App\User::create([
            'role_id' => '6',
            'name' => 'Mbock',
            'login' => 'secretaire',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'Victorine',
            'lieu_naissance' => 'Mbouda',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user12 = \App\User::create([
            'role_id' => '7',
            'name' => 'Ebebda',
            'login' => 'pharmacien',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'carlos franck',
            'lieu_naissance' => 'Bafang',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user13 = \App\User::create([
            'role_id' => '8',
            'name' => 'Takam',
            'login' => 'qualite',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'Bimoule',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user131 = \App\User::create([
            'role_id' => '2',
            'name' => 'Bilonda Kolela',
            'login' => 'medecin',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'Féminin',
            'prenom' => 'Dolly',
            'lieu_naissance' => 'Yaounde',
            'specialite' => 'Chirurgien urologue',
            'onmc' => '21565',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user132 = \App\User::create([
            'role_id' => '2',
            'name' => 'Njinou Ngninkeu',
            'login' => 'medecin1',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'Masculin',
            'prenom' => 'Bertin',
            'specialite' => 'Chirurgien urologue',
            'onmc' => '21565',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user132 = \App\User::create([
            'role_id' => '2',
            'name' => 'Kuitché',
            'login' => 'medecin2',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'Masculin',
            'prenom' => 'Jerry',
            'specialite' => 'Chirurgien urologue',
            'onmc' => '21565',
            'lieu_naissance' => 'Bertoua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user133 = \App\User::create([
            'role_id' => '2',
            'name' => 'Tenke',
            'login' => 'medecin3',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'Féminin',
            'prenom' => 'Christelle',
            'specialite' => 'Anesthésiste réanimateur',
            'onmc' => '21565',
            'lieu_naissance' => 'Bertoua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user134 = \App\User::create([
            'role_id' => '2',
            'name' => 'Kameni',
            'login' => 'medecin4',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'Féminin',
            'prenom' => 'Annie',
            'specialite' => 'Médecin généraliste',
            'onmc' => '21565',
            'lieu_naissance' => 'Bertoua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user135 = \App\User::create([
            'role_id' => '2',
            'name' => 'Nwaha Makon',
            'login' => 'medecin5',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'Masculin',
            'prenom' => 'Stephane',
            'specialite' => 'Chirurgien urologue',
            'onmc' => '21565',
            'lieu_naissance' => 'Bertoua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);


//        $user1 = User::findOrFail(1);
//        $user1->roles()->attach(\App\Role::where('name', 'ADMINISTRATEUR')->first());
    }
}
