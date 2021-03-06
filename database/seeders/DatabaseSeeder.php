<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (glob(public_path('uploads/images/*/*.png')) as $file)
            unlink($file);

        $this->call(LaratrustSeeder::class);
        $this->call(AdminSeeder::class);

        \App\Models\Room::factory(50)->create();
        \App\Models\User::factory(50)->create();
    }
}
