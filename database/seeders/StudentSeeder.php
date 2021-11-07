<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email'=> 'student1@stulib.com',
            'password'=> bcrypt('password'),
        ]);
        User::factory()->create([
            'email'=> 'student2@stulib.com',
            'password'=> bcrypt('password'),
        ]);
        User::factory()->create([
            'email'=> 'student3@stulib.com',
            'password'=> bcrypt('password'),
        ]);
    }
}
