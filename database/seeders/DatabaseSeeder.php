<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'sandro',
            'email' => 'sandro@gmail.com',
            'password' => Hash::make('1234'),
        ]);

    //category factory 2
        Category::factory(10)->create();
    //product factory 100
        Product::factory(10)->create();
    }
}
