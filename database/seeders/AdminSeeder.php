<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name'           => 'admin',
            'email'          => 'admin@hotel.com',
            'national_id'    => '12345678901234',
            'password'       => bcrypt(1234567890),
            'phone'          => '1234567890',
            'image'          => 'default.jpg',
            'remember_token' => Str::random(10),
        ]);

        $admin->attachRole('admin');

        $faker = Factory::create();
        for ($i = 0; $i < 15; $i++) {
            $admin = Admin::create([
                'name'           => $faker->unique()->firstName(),
                'email'          => $faker->unique()->safeEmail,
                'national_id'    => $faker->ean13(),
                'password'       => bcrypt(1234567890),
                'phone'          => $faker->unique()->phoneNumber(),
                'image'          => $faker->image(public_path('uploads/images/admins'), 150, 150, 'users', false),
                'remember_token' => Str::random(10),
                'created_by'     => 1,
            ]);

            $admin->attachRole('manager');
        }

        User::create([
            'name'              => 'user',
            'email'             => 'user@hotel.com',
            'email_verified_at' => now(),
            'password'          => bcrypt(1234567890),
            'phone'             => $faker->unique()->phoneNumber(),
            'image'             => 'default.jpg',
            'remember_token'    => Str::random(10),
            'approve'           => 1,
            'approved_by'       => 1
        ]);
    }
}
