<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * 
     */
    // $table->string('name');
    // $table->string('email')->unique();
    // $table->timestamp('email_verified_at')->nullable();
    // $table->string('password');
    // $table->rememberToken();
    // $table->timestamps();
    public function run(): void
    {
        DB::table('users')->insert([

            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'password'=>Str::random(10)
        ]
        );
    }
}
