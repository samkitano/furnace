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
        $this->call(UsersTableSeeder::class);
        $this->call(VatsTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(SubfamiliesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
    }
}
