<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    // public function run()
    {
        // Creation seeder For Admin
        $Admin = User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            // 'password'=> 'admin'
            'password'=> Hash::make('admin'),
            'role'=>'1'
        ]);


        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 
        // create roles an
        
        $adminRole = Role::create(['name' => 'admin']);
        $agentRole = Role::create(['name' => 'agentUser']);
        $userRole = Role::create(['name' => 'user']);


        // Assign roles
        // $Admin->assignRole($adminRole);
    }
}
