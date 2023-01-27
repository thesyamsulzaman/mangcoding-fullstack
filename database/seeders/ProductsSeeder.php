<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $products = [
      [
        'id' => '1',
        'name' => "Product 1",
        'price' => "3000",
        'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolore totam est autem iure quam, quidem tempore nemo. Possimus voluptates hic tenetur vero repellat voluptatum? Cumque exercitationem autem eos consequatur.",
        'photo' => "image-1.png",
        'trait' => "meledak",
        'category_id' => '1',
        'rate' => "5",
        'user_id' => '1',
        'featured' => false
      ]
    ];


    foreach ($products as $key => $value) {
      DB::table('users')->insert([
        $key => $value
      ]);
    }
  }
}
