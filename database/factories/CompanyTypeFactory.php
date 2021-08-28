<?php
/**
 * Created by PhpStorm.
 * User: gustavndamukong
 * Date: 8/27/21
 * Time: 9:38 AM
 */

namespace Database\Factories;

use App\Models\CompanyType;
use Illuminate\Database\Eloquent\Factories\Factory;


class CompanyTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyType::class;

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