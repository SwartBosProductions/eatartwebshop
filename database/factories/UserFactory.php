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
     * BOSMA NOTES:
     * Insertion is included in the method last_name(), I think we should drop this column altogether.
     * Country defaults to NL so no need the fake it.
     * To add role/usergroup (need to know how many there are).
     * To solve: created_by should be auth user.
     * :BOSMA NOTES.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->first_name(),
            'insertion' => $this->faker->insertion,
            'last_name' => $this->faker->last_name(),
            'birthday' => $this->faker->dateTimeBetween('1940-01-01', '2003-01-01'),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'street' => $this->faker->street_name(),
            'house_num' => $this->faker->building_number(),
            'house_num_addition' => $this->faker->randomLetter(),
            'postal_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'remember_token' => Str::random(10),
        ];
    }
}


// $table->string('country')->default('Nederland');
// $table->foreignId('role_id')->constrained();
// $table->foreignId('usergroups_id')->constrained();

$table->integer('created_by');
$table->integer('updated_by')->nullable();
$table->integer('deleted_by')->nullable();
$table->rememberToken();
$table->timestamps();
$table->softDeletes('deleted_at');
