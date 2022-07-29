<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // admin 
            [
                'full_name'=>'admin alpha',
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'admin',
                'status'=>'active',
            ],

            // vendor 
            [
                'full_name'=>'vendor alpha',
                'username'=>'vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('1112'),
                'role'=>'vendor',
                'status'=>'active',
            ],

            // customer 
            [
                'full_name'=>'customer alpha',
                'username'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('1113'),
                'role'=>'customer',
                'status'=>'active',
            ]
        ]);
    }
}
