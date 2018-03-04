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
        DB::table('user_types')->truncate();
        DB::table('users')->truncate();

        $this->call(UserTypeSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
