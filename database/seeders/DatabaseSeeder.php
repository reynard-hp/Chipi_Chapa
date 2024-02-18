<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Employee::create([
            'name' => 'Stevenson',
            'age' => 22,
            'address' => "Jalan Kemanggisan Raya No.32",
            'telp_num' => "08711112222"
        ]);

        Employee::create([
            'name' => 'Juan Pablo',
            'age' => 38,
            'address' => "Rose Boulevard No.11",
            'telp_num' => "0818777765"
        ]);
    }
}
