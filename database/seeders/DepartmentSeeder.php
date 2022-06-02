<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array("Operations", "Accounts", "Patrol");;

        foreach($departments as $department){
            \App\Models\Department::create(['name' => $department, 'created_by' => 1, 'updated_by' => 1]);
        }
    }
}
