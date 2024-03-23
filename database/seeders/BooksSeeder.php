<?php

namespace Database\Seeders;

use App\Models\BookStore;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakeData = Faker::create();
        $genres = ['Fiction', 'Non-Fiction', 'Science Fiction', 'Fantasy', 'Mystery', 'Romance', 'Horror']; // Example genres
        
        foreach (range(1, 50) as $index) {
            BookStore::create([
                'user_id' => 1,
                'title' => $fakeData->sentence($nbWords = 3, $variableNbWords = true),
                'author' => $fakeData->name,
                'genre' => $fakeData->randomElement($genres), // Assign a random genre from the list
                // 'year' => $fakeData->year($max = 'now'),
                'image_url' => $fakeData->imageUrl(640, 480, 'books', true), // Generates a random image URL
                'price' => $fakeData->randomFloat(2, 10, 100), // Generates a random price between 10 and 100
                'quantity' => $fakeData->randomFloat(2, 10, 100), // Generates a random price between 10 and 100
            ]);
        }
    }
}
