<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'strMemberName' => $this->faker->name,
            'member_mobile' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            // 'email_verified_at' => now(),
            'password' => 'password', // password
            // 'remember_token' => Str::random(10),
        ];
    }
}
