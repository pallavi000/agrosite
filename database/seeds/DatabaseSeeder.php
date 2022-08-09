<?php

use Illuminate\Database\Seeder;
use App\Event;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(AboutSeeder::class);
      
    }
}
