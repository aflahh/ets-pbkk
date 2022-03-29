<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kondisi'=>$this->faker->sentence(mt_rand(4,10)),
            'suhu'=>$this->faker->unique()->numberBetween(35, 45.5),
            'pasien_id'=>mt_rand(1,3),
            'dokter_id'=>mt_rand(1,3),
        ];
    }
}
