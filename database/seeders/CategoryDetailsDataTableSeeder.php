<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDetailsDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::truncate();

        category::create([
            'category_name' => 'Break-Fast',
        ]);

        category::create([
            'category_name' => 'Lunch',
        ]);

        category::create([
            'category_name' => 'Dinner',
        ]);
    }
}
