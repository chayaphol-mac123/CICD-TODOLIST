<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'id' => 1,
            'name' => 'mac test',
            'email' => 'mactest@gmail.com',
            'password' => 'password123',
        ]);

        User::create([
            'id' => 2,
            'name' => 'dollar test',
            'email' => 'dollartest@gmail.com',
            'password' => 'password123',
        ]);

        User::create([
            'id' => 3,
            'name' => 'best test',
            'email' => 'bestestt@gmail.com',
            'password' => 'password123',
        ]);

        Task::create([
            "description" => "mac seedr",
            "user_id" => 1,
        ]);

        Task::create([
            "description" => "dollar seedr",
            "user_id" => 2,
        ]);

        Task::create([
            "description" => "best seedr",
            "user_id" => 3,
        ]);
    }
}
