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
                   'title' => "Php is awesone",
                   'intro' => "Hello",
                   'body' => "World",
               ],
               [
                   'title' => "Laravel",
                   'intro' => "Hello",
                   'body' => "World", 
               ],
               [
                   'title' => "Thanks",
                   'intro' => "Hello",
                   'body' => "World",
               ],
        	)
        );
    }
}
