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

    }
}

class userSeeder extends Seeder{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
                ['name'=>'khanhdq123', 'email' => 'khanhdq123@fabii.io',  'password' => bcrypt('123456'), 'level' => 1],
                ['name'=>'minhlq', 'email' => 'minhlq@fabii.io',  'password' => bcrypt('123456'), 'level' => 0],
                ['name'=>'tanlv', 'email' => 'tanlv@fabii.io',  'password' => bcrypt('123456'), 'level' => 0],
                ['name'=>'sonnn', 'email' => 'sonnn@fabii.io',  'password' => bcrypt('123456'), 'level' => 0],
                ['name'=>'cuonglv', 'email' => 'cuonglv@fabii.io',  'password' => bcrypt('123456'), 'level' => 1]
            ]);

    }
}
