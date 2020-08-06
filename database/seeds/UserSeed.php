<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_customer = Role::where('name', 'customer')->first();
        $role_manager  = Role::where('name', 'admin')->first();
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456789'),
            ],
        ];

        foreach ($users as $user) {
            $profile = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
            if ($user['name'] === 'admin') $profile->roles()->attach($role_manager);
            else $profile->roles()->attach($role_customer);
        }
    }
}
