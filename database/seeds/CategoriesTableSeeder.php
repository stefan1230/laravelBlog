<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat_one = new Category();
        $cat_one->slug = "it";
        $cat_one->name = "IT";
        $cat_one->save();

       	$cat_two = new Category();
        $cat_two->slug = "nature";
        $cat_two->name = "Nature";
        $cat_two->save();

        $cat_three = new Category();
        $cat_three->slug = "science";
        $cat_three->name = "Science";
        $cat_three->save();
    }
}
