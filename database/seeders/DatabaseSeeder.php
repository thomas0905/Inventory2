<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        // $role = Role::create(['name' => 'Admin']);
        // $user->assignRole($role); 
        // Creating roles
        
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
    
       
    }
}
