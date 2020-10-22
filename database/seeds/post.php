<?php

use Illuminate\Database\Seeder;

class post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(post::class,5)->create();
    }
}
