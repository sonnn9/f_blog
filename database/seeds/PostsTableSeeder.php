<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title' => 'ĐHBK', 'content' => 'Mỗi năm đuổi 600 đến 100 SV.'],
            ['title' => 'TNUT', 'content' => 'Tổ chức giải bóng đá SV.'],
            ['title' => 'NEU', 'content' => 'Ngõ tự do thiên đường ẩm thực.'],
        ]);
    }
}
