<?php

use Illuminate\Database\Seeder;

class ParceirosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Parceiro',66)->create();
    }
}
