<?php

namespace Database\Seeders;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;
use App\Models\Book; // Make sure this import statement is correct

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create 20 books using the Book factory
        Book::factory(20)->create();
    }
}
