<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run(): void
    {

        $user = [
            'name' => 'Alif Bima Pradana',
            'email' => 'alifbima@mail.com',
            'password' => Hash::make('password'),
        ];
        
        User::create($user);
    }
}
