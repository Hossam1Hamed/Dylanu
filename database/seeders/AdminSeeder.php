<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' =>'super',
            'last_name' => 'admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('password'),
        ]);
        $user->attachRole('super_admin');
    }
}
