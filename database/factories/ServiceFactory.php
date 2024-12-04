<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Technician;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Service::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'scheduled_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'actual_date' => $this->faker->date(),
            'is_active' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'technician_id' => Technician::factory(),
            //
        ];
    }
}
