<?php

namespace Database\Factories;

use App\Models\Nail;
use Illuminate\Database\Eloquent\Factories\Factory;

class NailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' =>$this->faker->randomElement(['gaseoso.png','solido.png','liquido.png']),
            'tittle'=>$this->faker->randomElement(['Nails','Eyelash','Gelish']),
            'description'=>$this->faker->paragraph()
        ];
    }
}
