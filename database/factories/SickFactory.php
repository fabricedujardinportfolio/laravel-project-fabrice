<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Sick;
use Illuminate\Database\Eloquent\Factories\Factory;

class SickFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sick::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //modelfactory
            'name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'updated_at'=>$this->faker->date('H:i:s', rand(1,54000)),
            'created_at'=>$this->faker->date('H:i:s', rand(1,54000)),
        ];
    }
}
