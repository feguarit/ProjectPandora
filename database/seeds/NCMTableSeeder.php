<?php

use Illuminate\Database\Seeder;

class NCMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\NCM',30)->create();
    }
}
