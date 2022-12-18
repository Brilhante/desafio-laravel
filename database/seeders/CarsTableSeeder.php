<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(
            [
                [
                    'user_id' => '1',
                    'marca'   => 'Toyota',
                    'modelo'  => 'Corolla',
                    'versao'  => 'XEI VVTI'
                ],
                [
                    'user_id' => '1',
                    'marca'   => 'Jeep',
                    'modelo'  => 'Grand Cherokee',
                    'versao'  => 'Limited'
                ],
                [
                    'user_id' => '2',
                    'marca'   => 'Citroen',
                    'modelo'  => 'C3',
                    'versao'  => 'compact lx'
                ],
                [
                    'user_id' => '2',
                    'marca'   => 'Volkswagen',
                    'modelo'  => 'Fusca',
                    'versao'  => '1600'
                ],
                [
                    'user_id' => '4',
                    'marca'   => 'Volkswagen',
                    'modelo'  => 'Fusca',
                    'versao'  => '1600'
                ],
                [
                    'user_id' => '2',
                    'marca'   => 'Volkswagen',
                    'modelo'  => 'Golf',
                    'versao'  => 'lti'
                ],
                [
                    'user_id' => '3',
                    'marca'   => 'Volkswagen',
                    'modelo'  => 'Passat',
                    'versao'  => 'Gt-lx'
                ],
                [
                    'user_id' => '2',
                    'marca'   => 'Volkswagen',
                    'modelo'  => 'Passat',
                    'versao'  => 'Gt-lx'
                ],
            ]
        );
    }

}
