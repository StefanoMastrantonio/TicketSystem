<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class ticketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->paragraph(),
            "description" =>$this->faker->sentence(),
            "starting_date" =>$this->faker->dateTime(),
            "closing_date" =>$this->faker->dateTime()
        ];
    }
}
