<?php

use Illuminate\Database\Seeder;

class AtorTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Ators::class,10)->create();
    }
}
