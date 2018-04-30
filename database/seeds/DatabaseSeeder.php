<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Game::class, 10)->create();
        factory(\App\Accessory::class, 10)->create();
        factory(\App\Console::class, 10)->create();
        factory(\App\Order::class, 10)->create();
        factory(\App\User::class, 10)->create();
    }
}
