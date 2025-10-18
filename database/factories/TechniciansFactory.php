<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technicians>
 */
class TechniciansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tech_name' => $this->faker->Name(),
            'position' => $this->faker->randomElement([
                'ช่างเทคนิค',
                'หัวหน้าช่าง',
                'วิศวกรซ่อมบำรุง'
            ]),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => now(),
            'updated_at' => now()
        ];

    }
}
