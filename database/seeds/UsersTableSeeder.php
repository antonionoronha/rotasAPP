<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password=config('app.password');

        User::create([
            'name'=>'admin',
            'email'=>'admin@mail',
            'department'=>'TI',
            'password'=>bcrypt($password),
            'remember_token'=> str_random(10),
            'role_id'=>1,
        ]);
    }
}
