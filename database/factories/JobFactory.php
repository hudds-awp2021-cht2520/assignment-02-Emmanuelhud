<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'company' => $this->faker->name(),
            'listed' => $this->faker->date(),
            'location' => $this->faker->city(),
            'description' => $this->faker->realText(),
            'listed' => $this->faker->date(),
        ];
    }
}

