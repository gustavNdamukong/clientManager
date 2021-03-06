<?php
/**
 * Created by PhpStorm.
 * User: gustavndamukong
 * Date: 8/27/21
 * Time: 9:36 AM
 */

namespace Database\Factories;

use App\Models\CompanyStatus;
use Illuminate\Database\Eloquent\Factories\Factory;


class CompanyStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word . '_' . $this->faker->uuid,
        ];
    }
}