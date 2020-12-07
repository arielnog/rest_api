<?php

use Illuminate\Database\Seeder;

class DiretorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Diretor::class,10)->create();
    }
}
