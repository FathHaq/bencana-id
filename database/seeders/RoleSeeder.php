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
        $major = ['admin', 'volunteer', 'guest'];
        foreach ($major as $value) {
            DB::table('role')->insert([
                'name' => $value,
            ]);
        }
    }
}
