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

        $user2 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin1',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Douala',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user3 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin2',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user4 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin3',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user5 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin4',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user6 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin5',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user7 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin6',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Garoua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user8 = \App\User::create([
            'role_id' => '3',
            'name' => 'gestionnaire',
            'login' => 'gestionnaire',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'gestionnaire',
            'lieu_naissance' => 'Bafoussam',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user9 = \App\User::create([
            'role_id' => '4',
            'name' => 'infirmier',
            'login' => 'infirmier',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'infirmier',
            'lieu_naissance' => 'Douala',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user10 = \App\User::create([
            'role_id' => '5',
            'name' => 'logistique',
            'login' => 'logistique',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'logistique',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user11 = \App\User::create([
            'role_id' => '6',
            'name' => 'secretaire',
            'login' => 'secretaire',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'secretaire',
            'lieu_naissance' => 'Mbouda',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user12 = \App\User::create([
            'role_id' => '7',
            'name' => 'pharmacien',
            'login' => 'pharmacien',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'pharmacien',
            'lieu_naissance' => 'Bafang',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user13 = \App\User::create([
            'role_id' => '8',
            'name' => 'qualite',
            'login' => 'qualite',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'qualite',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user14 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin7',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user15 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin8',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Ebolowa',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user16 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin9',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Batouri',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user17 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin10',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'homme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Yaounde',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user18 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin11',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Maroua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user19 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin12',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Douala',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);

        $user20 = \App\User::create([
            'role_id' => '2',
            'name' => 'medecin',
            'login' => 'medecin13',
            'telephone' => mt_rand(10000000, 99999999),
            'sexe' => 'femme',
            'prenom' => 'medecin',
            'lieu_naissance' => 'Bertoua',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);


//        $user1 = User::findOrFail(1);
        $user1->roles()->attach(\App\Role::where('name', 'ADMINISTRATEUR')->first());
    }
}
