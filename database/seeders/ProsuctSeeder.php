<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProsuctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =[
             [
                'name' => 'Grilled Meat',
                'image_path' => 'img/yhy.jpg',
                'details' => 'Cater your event in an all grilled This mixture consists of kofta, kebab, ribs on charcoal and Hawashy.',
                'price' => 490
            ],
            [
                'name' => 'Mix of stuffed vegetables',
                'image_path' => 'img/Screenshot%202023-01-04%20013502.jpg',
                'details' => 'A wide variety of “mahshy” selection that includes grape vines, zucchini, eggplant, bell pepper and Tomato.',
                'price' =>200
            ],
            [
                'name' => 'Healthy Chicken Strips',
                'image_path' => 'img/dsc_4339.webp',
                'details' => 'If you want to eat unhealthy food, but in a healthy way, we now offer reddish chicken with healthy sauce made in a healthy way',
                'price' => 240
            ],
            [
                'name' => 'Chicken Grill',
                'image_path' => 'img/fgg.jpg',
                'details' => 'The shish tawook is served in a special way with spiced grilled vegetables, and it can be served on skewers.',
                'price' => 380
            ],
            [
                'name' => 'Butter Shrimp',
                'image_path' => 'img/shrimps.jpg',
                'details' => 'Shrimp seasoned with thyme and cooked in butter are served with fresh vegetables.',
                'price' => 495
            ],
            [
                'name' => 'Granola',
                'image_path' => 'img/pexels-ella-olsson-1640767.jpg',
                'details' => 'img/pexels-ella-olsson-1640767.jpg',
                'price' => 180
            ],
            [
                'name' => 'Avocado salad',
                'image_path' => 'img/Epic-summer-salad-hub-2646e6e.jpg',
                'details' => 'Avocado salad is served with tomatoes, onion slices and green leaves with a sprinkle of thyme.',
                'price' => 80
            ],
            [
                'name' => 'Fresh Collection',
                'image_path' => 'img/fresh-fruit-juice-1440x810-q80.jpg',
                'details' => 'A group of different natural juices of beets, oranges, kiwis and mangoes.',
                'price' => 120
            ]
        ];

        foreach($products as $product){
            DB::table('products')->insert([
                'name' =>$product['name'],
                'details' => $product['details'],
                'price' => $product['price'],
                'image_path' => $product['image_path']
            ]);
        }

    }
}
