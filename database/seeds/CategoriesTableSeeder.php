<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        \App\Model\Category::where('id', '!=', 0)->delete();

        $category_names = ["Automobiles", "Movies", "Games"];

        foreach ($category_names as $category_name) {
            $category = new \App\Model\Category();
            $category->category_name = $category_name;
            $category->save();
        }
    }

}
