<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'customer',
                'description' => 'A Customer',
            ],
            [
                'name' => 'admin',
                'description' => 'A Admin User',
            ],
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name'],
                'description' => $role['description'],
            ]);
        }
    }
}
