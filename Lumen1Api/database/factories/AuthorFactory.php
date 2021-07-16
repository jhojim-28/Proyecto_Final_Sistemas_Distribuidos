<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;



class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->name(),
            'ubicacion' => $this->faker->country,
            'mpago'=>$this->faker->randomElement(['tarjeta', 'efectivo']),
        ];
      
    }
}

