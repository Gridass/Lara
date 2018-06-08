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
        DB::table('posts')->insert(
            array(
                [
                    'title' => "Apollo 11",
                    'alias' => "apollo_11",
                    'intro' => "Apollo 11 was the spaceflight that landed the first two humans on the Moon. ",
                    'body' => "Mission commander Neil Armstrong and pilot Buzz Aldrin, both American, landed the lunar module Eagle on July 20, 1969, at 20:18 UTC.",
                ],
                [
                    'title' => "Apollo 12",
                    'alias' => "apollo_12",
                    'intro' => "Apollo 11 was the spaceflight that landed the first two humans on the Moon. ",
                    'body' => "Mission commander Neil Armstrong and pilot Buzz Aldrin, both American, landed the lunar module Eagle on July 20, 1969, at 20:18 UTC.",
                ],
                [
                    'title' => "Apollo 13",
                    'alias' => "apollo_13",
                    'intro' => "Apollo 11 was the spaceflight that landed the first two humans on the Moon. ",
                    'body' => "Mission commander Neil Armstrong and pilot Buzz Aldrin, both American, landed the lunar module Eagle on July 20, 1969, at 20:18 UTC.",
                ]
            )

    );
    }
}
