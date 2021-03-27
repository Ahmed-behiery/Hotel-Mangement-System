<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'number'        => $this->faker->unique()->numberBetween(1, 100),
            'size'          => $this->faker->numberBetween(1, 5),
            'price'         => '100.00',
            'floor'         => $this->faker->unique()->numberBetween(1000,1100),
            'reservation'   => 0,
            'user_id'       => null,
            'admin_id'      => Admin::whereRoleIs(['manager', 'admin'])->inRandomOrder()->first()->id,
        ];
    }
}
