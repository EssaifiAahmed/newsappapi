<?php

namespace Database\Factories;

use App\Models\Pictures;
use Illuminate\Database\Eloquent\Factories\Factory;

class PicturesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pictures::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->paragraph(20),
            'url'=>$this->faker->imageUrl(800,600),
            'featured'=>$this->faker->boolean,
            'post_id'=>$this->faker->numberBetween(1,1500)
        ];
    }
}
