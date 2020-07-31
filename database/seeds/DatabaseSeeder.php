<?php

use App\Model\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            UserSeed::class,
            CategorySeeder::class,
            ImagesTableSeed::class,
            ProductsSeeder::class,
            Custom_attrSeed::class,
        ]);
    }
}
