<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2024/08/19
 * Time: 10:32
 */

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;


class JobFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$50,000 USD'
        ];
    }
}
