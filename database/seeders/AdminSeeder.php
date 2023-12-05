<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            // 'password'=> 'admin'
            'password'=> Hash::make('admin')
        ]);
        $Admin->assignRole($adminRole);
        // $Admin->hasallroles('admin');
    }
}
