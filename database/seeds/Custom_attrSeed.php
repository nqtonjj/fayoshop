<?php

use App\Model\Custom_attributes;
use Illuminate\Database\Seeder;

class Custom_attrSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Custom_attributes::class, 15)->create();
    }
}
