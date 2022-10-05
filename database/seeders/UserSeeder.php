<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name'=>'Admin',
            'email'=>'mroffifauzi13@gmail.com',
            'password'=>Hash::make('rahasia0909')
        ]);

    }
}
