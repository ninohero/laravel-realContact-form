<?php

use Illuminate\Database\Seeder;
//not sure what eloquentmodel is
//use Illuminate\Database\Eloquent\Model;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->delete();

        $messages = array(
            ['id' => 1, 'name' => 'Bill Writer', 'email' => 'billl@writer.com', 'message' => 'Here is the first message', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Joe Writer', 'email' => 'joe@writer.com', 'message' => 'Here is the second message', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Howdy Chappa', 'email' => 'howdy@chappa.com', 'message' => 'Here is the third message', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // uncomment the below to run the seeder
        DB::table('messages')->insert($messages);
    }
}
