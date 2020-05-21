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
        $this->call(brands::class);
        $this->call(users::class);
        $this->call(cars::class);
        $this->call(images::class);
        $this->call(slider::class);
        $this->call(news::class);
    }
}
