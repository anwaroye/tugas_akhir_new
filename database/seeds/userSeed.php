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
            'name'=>'anwar1234',
            'email'=>'anwar123@gmail.com',
            'password'=>bcrypt('anwar12345')
        ]);
    }
}
