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
        $this->call([
            userSeeder::class,
            CategoriesTableSeeder::class,
        ]);

        $this->call(PostsTableSeeder::class);

    }
}

class userSeeder extends Seeder{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);       
    }
}
