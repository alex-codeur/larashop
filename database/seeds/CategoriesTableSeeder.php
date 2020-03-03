<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'High Tech',
            'slug' => 'High Tech'
        ]);

        Category::create([
            'name' => 'Livres',
            'slug' => 'Livres'
        ]);

        Category::create([
            'name' => 'Meubles',
            'slug' => 'Meubles'
        ]);

        Category::create([
            'name' => 'Jeux',
            'slug' => 'Jeux'
        ]);

        Category::create([
            'name' => 'Nourriture',
            'slug' => 'Nourriture'
        ]);
    }
}
