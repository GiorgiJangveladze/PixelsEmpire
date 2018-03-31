<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'lasha',
            'email'=>'email@gmail.com',
            'password'=>bcrypt(123),
            'country_id'=>1,
        ]);
    }
}
