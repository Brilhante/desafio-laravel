<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repairs')->insert(
            [
                [
                    'user_id'         => '1',
                    'tipo_manutencao' => '1',
                    'modelo'          => 'Corolla',
                    'data_agendada'   => '2022-12-28'

                ],
                [
                    'user_id'         => '1',
                    'tipo_manutencao' => '2',
                    'modelo'          => 'Grand Cherokee',
                    'data_agendada'   => '2022-12-31'
                ],
                [
                    'user_id'         => '1',
                    'tipo_manutencao' => '1',
                    'modelo'          => 'Golf',
                    'data_agendada'   => '2022-12-23'
                ],
                [
                    'user_id'         => '2',
                    'tipo_manutencao' => '1',
                    'modelo'          => 'Fusca',
                    'data_agendada'   => '2022-12-24'
                ],
                [
                    'user_id'         => '2',
                    'tipo_manutencao' => '2',
                    'modelo'          => 'Monza',
                    'data_agendada'   => '2022-12-25'
                ]
               
            ]
        );
    }
}
