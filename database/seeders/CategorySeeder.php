<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'category' => 'Comedy',
                'remarks' => 'Quis rerum ut alias nihil non sunt libero.'
            ],
            [
                'category' => 'Romance',
                'remarks' => 'Placeat odio est earum voluptas.'
            ],
            [
                'category' => 'Religion',
                'remarks' => 'Ipsam veniam minus velit dolores.'
            ],
            [
                'category' => 'Politics',
                'remarks' => 'Molestiae quis non illum nihil saepe odio.'
            ],
            [
                'category' => 'Education',
                'remarks' => 'Est et ipsam non error.'
            ],
            [
                'category' => 'Business',
                'remarks' => 'Possimus optio quod dolores.'
            ],
        ];
        // Category::factory(6)->create();

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
