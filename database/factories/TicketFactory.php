<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
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
            "number"=>$this->faker->randomNumber(),
            "starting_date" =>$this->faker->dateTime(),
            "closing_date" =>$this->faker->dateTime(),
            "priority"=>$this->faker->numberBetween(1, 5),
            "status"=>$this->faker->numberBetween(0, 1),
            "customer_feedback"=>$this->faker->numberBetween(1, 5)
        ];
    }
}
