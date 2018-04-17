<?php

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
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class)->create([
            'name' => 'ljw8229263',
            'email' => 'ljw8229263@gmail.com',
            'password' => bcrypt('8229263'),
            'is_active' => 1,
        ]);

        factory(App\User::class, 10)->create();
    }
}
