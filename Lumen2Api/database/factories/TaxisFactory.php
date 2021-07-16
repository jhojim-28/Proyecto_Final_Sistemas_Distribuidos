<?php

namespace Database\Factories;

use App\Models\Taxis;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Taxis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'destino' =>$this-> faker->country(),
            'descripcion' =>$this-> faker->sentence(6, true),
            'precio' =>$this-> faker->numberBetween(25, 80),
            'author_id' =>$this-> faker->numberBetween(1, 5),
        ];
    }
}
