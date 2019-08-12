<?php

use Illuminate\Database\Seeder;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'khairul',
            'email'=>'anwar@gmail.com',
            'password'=>bcrypt('anwar1234'),
        ]);
    }
}
