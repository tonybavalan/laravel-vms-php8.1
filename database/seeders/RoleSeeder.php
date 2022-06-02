<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array("SuperVisor", "Assistant SuperVisor", "Guard");;

        foreach($roles as $role){
            \App\Models\Role::create(['name' => $role, 'created_by' => 1, 'updated_by' => 1]);
        }
    }
}
