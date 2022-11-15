<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Smith Yañez',
            'email' => 'jhoan71002@gmail.com',
            'password' => bcrypt('645Bici7'),
        ])->attachRole('superadministrator');

        // User::factory()->create([
        //     'name' => 'Diego Yañez',
        //     'email' => 'diego@example.com',
        // ])->attachRole('administrator');

        // User::factory()->create([
        //     'name' => 'Dayana Yañez',
        //     'email' => 'dayana@example.com',
        // ])->attachRole('user');

    }
}
