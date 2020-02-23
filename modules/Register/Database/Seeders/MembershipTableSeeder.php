<?php

namespace Modules\Register\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Register\Entities\Membership;

class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $membership = config('register.membership');
        $createdIn = date('Y/m/d H:i:s');

        Membership::insert([
            [
                'company_id' => null,
                'person_id' => 1,
                //'contract_read' => $membership['contract_read']['yes'];,
                'graduate' => $membership['graduate']['undefined'],
                'status' => $membership['status']['inactive'],
                'created_at' => $createdIn,
            ],
            [
                'company_id' => null,
                'person_id' => 2,
                //'contract_read' => $membership['contract_read']['yes'];,
                'graduate' => $membership['graduate']['member'],
                'status' => $membership['status']['active'],
                'created_at' => $createdIn,
            ],
            [
                'company_id' => 2,
                'person_id' => 3,
                //'contract_read' => $membership['contract_read']['yes'],
                'graduate' => $membership['graduate']['member'],
                'status' => $membership['status']['active'],
                'created_at' => $createdIn,
            ],
        ]);
    }
}
