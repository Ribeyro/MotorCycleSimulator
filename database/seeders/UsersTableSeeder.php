<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $casos = [
            [
                "nombre_caso" => "Infracción por colisión con otro objeto",
                "estado_caso" => "No respetado",
                "descripcion_caso" => "El vehículo ha sufrido una colisión.",
                "tiempo_caso" => "141,8"
            ],
            [
                "nombre_caso" => "Infracción por colisión con otro objeto",
                "estado_caso" => "No respetado",
                "descripcion_caso" => "El vehículo ha sufrido una colisión.",
                "tiempo_caso" => "142,2599"
            ],
            [
                "nombre_caso" => "Infracción por colisión con otro objeto",
                "estado_caso" => "No respetado",
                "descripcion_caso" => "El vehículo ha sufrido una colisión.",
                "tiempo_caso" => "142,56"
            ]
        ];

        $senales = [
            [
                "nombre_senal" => "Infracción por exceso de velocidad",
                "estado_senal" => "No respetado",
                "descripcion_senal" => "El vehículo ha excedido el límite de velocidad permitido.",
                "tiempo_senal" => "89,59997"
            ],
            [
                "nombre_senal" => "Infracción por no respetar semáforo en rojo",
                "estado_senal" => "No respetado",
                "descripcion_senal" => "El vehículo ha pasado un semáforo en rojo.",
                "tiempo_senal" => "100,96"
            ],
            [
                "nombre_senal" => "Infracción por exceso de velocidad",
                "estado_senal" => "No respetado",
                "descripcion_senal" => "El vehículo ha excedido el límite de velocidad permitido.",
                "tiempo_senal" => "105,94"
            ],
            [
                "nombre_senal" => "Infracción por no respetar semáforo en rojo",
                "estado_senal" => "No respetado",
                "descripcion_senal" => "El vehículo ha pasado un semáforo en rojo.",
                "tiempo_senal" => "117,04"
            ]
        ];

        DB::table('users')->insert([
            [
                'dni' => '12345678A',
                'name' => 'Juan',
                'last_name' => 'Pérez',
                'tiempo_total' => 134.2719,
                'vel_maxima' => 137,
                'vel_promedio' => 23,
                'num_objetivos_cumplidos' => 2,
                'num_infracciones' => 7,
                'lista_casos' => json_encode($casos),
                'lista_senales' => json_encode($senales),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '87654321B',
                'name' => 'Ana',
                'last_name' => 'García',
                'tiempo_total' => 120.1234,
                'vel_maxima' => 140,
                'vel_promedio' => 25,
                'num_objetivos_cumplidos' => 3,
                'num_infracciones' => 5,
                'lista_casos' => json_encode($casos),
                'lista_senales' => json_encode($senales),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '11223344C',
                'name' => 'Luis',
                'last_name' => 'Martínez',
                'tiempo_total' => 110.5678,
                'vel_maxima' => 135,
                'vel_promedio' => 22,
                'num_objetivos_cumplidos' => 1,
                'num_infracciones' => 2,
                'lista_casos' => json_encode($casos),
                'lista_senales' => json_encode($senales),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}