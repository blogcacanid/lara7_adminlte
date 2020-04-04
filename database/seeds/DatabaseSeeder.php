<?php

use Illuminate\Database\Seeder;
use App\User;

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
        User::create([
            "name" => "cacan",
            "email" => "blog,cacan.id@gmail.com",
            "user_accessed" =>"administrator",
            "password" => Hash::make('admin')
        ]);
    }
}
