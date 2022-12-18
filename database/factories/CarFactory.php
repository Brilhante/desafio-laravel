<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $factory->define(App\Car::class, function (Faker $faker) use ($factory){

            return [
            //     'model' => $this->faker->name(5),
            //     'User_id' => User::factory(),
            //     'modelo' => $this->faker->name(5),
            //     'versao' => $this->faker->name(5),
            // ];
        // });
    }
}
