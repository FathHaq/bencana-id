<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = ['admin', 'volunteer', 'guest'];
        foreach ($role as $value) {
            DB::table('roles')->insert([
                'name' => $value,
            ]);
        }
    }
}
