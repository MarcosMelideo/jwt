<?php

namespace Database\Seeders;

use App\Models\Actividad;
use App\Models\Asistencia;
use App\Models\Cliente;
use App\Models\ClienteActividad;
use App\Models\Cobro;
use App\Models\CobroItem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Actividad::factory(10)->create();
        Cliente::factory(50)->create();
        Asistencia::factory(50)->create();
        ClienteActividad::factory(50)->create();
        Cobro::factory(100)->create();
        CobroItem::factory(100)->create();
    }
}