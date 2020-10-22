<?php

use Illuminate\Database\Seeder;

class comentarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App/Comentarios',5)->create();
    }
}
