<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'avatar' => 'test.png',
            'genre' => 'autre',
            'pseudo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'description' => Str::random(20),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'avatar' => 'test.png',
            'genre' => 'autre',
            'pseudo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'description' => Str::random(20),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'avatar' => 'test.png',
            'genre' => 'autre',
            'pseudo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'description' => Str::random(20),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'avatar' => 'test.png',
            'genre' => 'autre',
            'pseudo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'description' => Str::random(20),
        ]);

        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => bcrypt('admin123456'),
            'job_title' => '1'
        ]);
        }
    }

