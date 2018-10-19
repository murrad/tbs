<?php

use Illuminate\Database\Seeder;
use App\Category;

class CatogoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 5)->create();

        foreach (Category::topCategories() as $category) {
            factory(Category::class, 5)->create(['parent_id' => $category->id]);
        }
        
        foreach (Category::topCategories() as $category) {
            foreach($category->children()->get() as $level1Category) {
                factory(Category::class, 5)->create(['parent_id' => $level1Category->id]);
            }
        }
    }
}
