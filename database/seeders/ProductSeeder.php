<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Utilizzo della factory per creare 95 prodotti non in evidenza
    Product::factory(95)->create([
      'featured' => 0,
    ]);

    // Utilizzo della factory per creare 5 prodotti in evidenza
    Product::factory(5)->create([
      'featured' => 1,
    ]);
  }
}
