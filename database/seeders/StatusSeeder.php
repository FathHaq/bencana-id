<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['Sangat Prioritas','Prioritas', 'Stable'];
        foreach ($status as $value) {
            DB::table('statuses')->insert([
                'name' => $value,
            ]);
        }
    }
}
