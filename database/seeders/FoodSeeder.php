<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ipsum quam, ultricies nec aliquet at, porta at metus. Nunc sit amet imperdiet mi, in varius arcu. Maecenas commodo magna ut eleifend molestie. Cras et leo quis enim ornare tincidunt. Praesent vitae diam vel tortor dignissim vehicula nec et tortor. Sed non dapibus ante. Donec id efficitur elit. Cras lobortis tristique elit et sodales. Ut ornare arcu est, tincidunt hendrerit velit suscipit nec. Nulla sit amet bibendum neque. Donec sollicitudin, orci at efficitur sollicitudin, velit tortor bibendum metus, vitae sodales nisl sapien nec nisl. Pellentesque laoreet efficitur risus, ac pretium ex. Proin laoreet eu nunc sed aliquet. Cras felis eros, rhoncus sit amet quam ut, cursus ultrices tellus. Etiam eget facilisis dolor. Donec convallis viverra justo nec tincidunt. Nullam blandit nulla id luctus volutpat.";
        DB::table('foods')
       ->insert([
           ['food' => 'Seasonal Steak Special','description'=> $content, 'imgurl' => asset('images/food2.jpg'), 'like' => 2],
           ['food' => '10 oz AAA Striploin','description'=> $content, 'imgurl' => asset('images/food3.jpg'), 'like' => 1],
           ['food' => '7 oz AAA Sirloin','description'=> $content, 'imgurl' => asset('images/food2.jpg'), 'like' => 2],
           ['food' => 'Seasonal Steak Special','description'=> $content, 'imgurl' => asset('images/food3.jpg'), 'like' => 2],
           ['food' => '10 oz AAA Striploin','description'=> $content, 'imgurl' => asset('images/food3.jpg'), 'like' => 2],
           ['food' => '7 oz AAA Sirloin','description'=> $content, 'imgurl' => asset('images/food2.jpg'), 'like' => 1],

       ]);
    }
}
