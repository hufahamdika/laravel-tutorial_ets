<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medic>
 */
class MedicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(3, 10)),
            "patient_id" => mt_rand(1, 10),
            "doctor_id" => mt_rand(1, 4),
            "slug" => $this->faker->slug(),
            "temperature" => mt_rand(35, 45),
            "healthcondition" => $this->faker->paragraphs(mt_rand(5, 10))
        ];
    }
}
