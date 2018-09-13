<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => str_random(8),
            'slug' => str_random(12),
            'image' => rand(1,4).'.png',
            'description_short' => str_random('12'),
            'description' => str_random('124'),
            'published' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' =>'1',
        ]);
    }
}
