<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

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
        $faker = Faker::create('ja_JP');
        return [
            'name' => $faker->name(),
            'password'=>Hash::make('admin123'),
            'company_id' => $faker->randomElement([2, 3]),
            'user_name' => $faker->name(),
            'post_code' => '123-4567',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'gender' => $faker->randomElement([0, 1]),
            'role' => 2,
            'email' => $faker->unique()->safeEmail(),
            'birthday' => $faker->date(),            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }

    // /**
    //  * Indicate that the user should have a personal team.
    //  *
    //  * @return $this
    //  */
    // public function withPersonalTeam()
    // {
    //     if (! Features::hasTeamFeatures()) {
    //         return $this->state([]);
    //     }

    //     return $this->has(
    //         Team::factory()
    //             ->state(function (array $attributes, User $user) {
    //                 return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
    //             }),
    //         'ownedTeams'
    //     );
    // }
}
