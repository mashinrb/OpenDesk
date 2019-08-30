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
        $this->call(IssueSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(CommentSeeder::class);
    }
}