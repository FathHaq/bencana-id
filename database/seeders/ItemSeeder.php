<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['Mie Instant', 'Peralatan Bayi', 'Air Mineral', 'Beras', 'Tempat Tidur', 'Selimut'];
        foreach ($items as $value) {
            DB::table('items')->insert([
                'name' => $value,
            ]);
        }
    }
}
