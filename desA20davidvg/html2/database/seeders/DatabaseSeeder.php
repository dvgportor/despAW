<?php

namespace Database\Seeders;

use App\Models\Archivo;
use App\Models\Cliente;
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
        \App\Models\User::factory(2)->create();
        Cliente::factory(6)->create();
        Archivo::factory(15)->create();

    }
}
