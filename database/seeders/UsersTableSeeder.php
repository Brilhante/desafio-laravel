<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Alan Brilhante',
                    'email'   => 'alancoutinho.ti@gmail.com',
                    'email_verified_at'  => '2022-12-17 22:40:09',
                    'password' => bcrypt('12345678'), // password
                    'remember_token' => Str::random(10),

                ],
                [
                    'name' => 'Usuário Teste1',
                    'email' => 'teste1@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678'), // password
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'Usuário Teste2',
                    'email' => 'teste2@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678'), // password
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'Usuário Teste3',
                    'email' => 'teste3@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678'), // password
                    'remember_token' => Str::random(10),
                ],
               
            ]
        );
    }

}

