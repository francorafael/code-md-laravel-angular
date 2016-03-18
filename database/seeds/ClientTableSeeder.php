<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this-
        //Apaga todos registros
        \CodeProject\Client::truncate();
        //criar os registros
        factory(\CodeProject\Client::class, 10)->create();//
    }
}