<?php

namespace Database\Factories;
use App\Models\maintenance_records;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance_records>
 */
class Maintenance_recordsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'machine_id' => $this->faker->numberBetween(1, 3),
            'maintenance_date' => $this->faker->date(),
            'tech_id' => $this->faker->numberBetween(1, 10),
            'next_due_date' => $this->faker->date(),
            'description' => $this->faker->randomElement([
                'เปลี่ยนอะไหล่',
                'ซ่อมระบบไฟฟ้า',
                'บำรุงรักษาตามระยะ',
                'ซ่อมชิ้นส่วนเครื่องจักร'
            ]),
        ];
    }
}
