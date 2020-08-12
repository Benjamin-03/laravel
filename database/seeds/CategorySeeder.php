<?php

use App\Category;
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
        $category = new Category();
        $category->name = 'Développement web';
        $category->icon = '<i class="fas fa-code"></i>';
        $category->save();

        $category = new Category();
        $category->name = 'Développement logiciel';
        $category->icon = '<i class="fas fa-book"></i>';
        $category->save();

        $category = new Category();
        $category->name = 'Infrastructure';
        $category->icon = '<i class="fas fa-hard-hat"></i>';
        $category->save();

    }
}
