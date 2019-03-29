<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            ['name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => config('setting.role.admin') || 1,
            'avatar' => 'admin',    
        ], [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'role' => config('setting.role.user') || 0,
            'avatar' => 'user',
        ]
        ] as $user) {
            User::firstOrCreate([
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                'avatar' => $user['avatar'],
            ], [
                'password' => $user['password'],
            ]);
        }            
    }
}
