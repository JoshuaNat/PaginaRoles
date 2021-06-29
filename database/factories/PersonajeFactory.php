<?php

namespace Database\Factories;

use App\Models\Personaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name(),
            'Edad' => $this->faker->randomNumber(3, false),
            'Genero' => $this->faker->randomElement(['Hombre', 'Mujer', 'Otro']),
            'Personalidad' => $this->faker->sentence(),
            'Historia' => $this->faker->sentence(),
            'Extras' => $this->faker->sentence(),
            'user_id' => $this->faker->numberBetween(1,1),
        ];
    }
}
