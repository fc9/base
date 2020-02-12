<?php

namespace Modules\Register\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Register\Entities\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Person::insert([
            [
                'id' => 1,
                'user_id' => 1,
                'firstname' => 'More',
                'lastname' => 'Marketing Network',
                'birth_date' => null,
                'type' => config('register.person.type.juridical'),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'firstname' => 'Client',
                'lastname' => 'ADM',
                'birth_date' => null,
                'type' => config('register.person.type.juridical'),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'firstname' => 'Bruna',
                'lastname' => 'Souza',
                'birth_date' => \Faker\Provider\DateTime::date('Y/m/d H:i:s', '-18 years'),
                'type' => config('register.person.type.artificial'),
            ],
        ]);
    }
}
