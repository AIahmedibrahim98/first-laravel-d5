<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@demo.com',
            'email_verified_at'=>now(),
            'password'=> Hash::make('123456'),
            'remember_token'=> Str::random(32),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
