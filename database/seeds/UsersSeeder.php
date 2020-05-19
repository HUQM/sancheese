<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'El Kevin';
        $user->email = 'elkevin@mail.com';
        $user->password = 'secret';
        $user->save();
    }
}
