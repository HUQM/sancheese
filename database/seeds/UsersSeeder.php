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
        $user->password = '$2y$10$J/9JENEXTyxUXp0DJO8TcuEzuWJONlDBzLRkzGiP8Gen.E/.G8jm.'; //numeros del 1-8
        $user->save();
    }
}
