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
            'name' => $this->faker->name(),
            'email'=> $this->faker->email(),
            'password'=> bcrypt('password'),
        ]);
    }
}
