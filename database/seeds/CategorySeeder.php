<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'auto',
            'description' => 'You must buy car'
        ]);

        Category::create([
            'title' => 'bike',
            'description' => 'You must buy bike'
        ]);

        Category::create([
            'title' => 'for home',
            'description' => 'You must buy something'
        ]);
    }
}
