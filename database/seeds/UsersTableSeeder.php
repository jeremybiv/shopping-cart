<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$z5aHsRaRHVNok4MkHtq2zu9S.Tr5v0wPJT4D.p0EFgjdYbobjf1wS',
                'remember_token' => null,
                'created_at'     => '2019-09-14 22:06:41',
                'updated_at'     => '2019-09-14 22:06:41',
            ],
        ];

        User::insert($users);
    }
}
