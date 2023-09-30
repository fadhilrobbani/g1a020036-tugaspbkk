<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //categories
        $categoriesData = ['journal','novel','encyclopedia','technologies'];

        foreach ($categoriesData as $data) {
            Category::create([
                'name' => $data,
            ]);
        }

        //roles
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $rolesData = ['admin','client'];

        foreach ($rolesData as $data) {
            Role::create([
                'name' => $data,
            ]);
        }

        //books
        $booksData = [
            [
                'book_code' => 'A001-01',
                'title' => 'Laravel tutorial',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'The most hardest laravel tutorial that you can learn',
                'status' => 'in_stock',
            ],
            [
                'book_code' => 'A001-02',
                'title' => 'Reactjs tutorial',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'The most hardest Reactjs tutorial that you can learn',
                'status' => 'in_stock',
            ],
            [
                'book_code' => 'A001-03',
                'title' => 'Golang tutorial',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'The most hardest golang tutorial that you can learn',
                'status' => 'in_stock',
            ],
            [
                'book_code' => 'A001-04',
                'title' => 'Python tutorial',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'The most hardest python tutorial that you can learn',
                'status' => 'out_stock',
            ],
            [
                'book_code' => 'A001-05',
                'title' => 'Java tutorial',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'The most hardest java tutorial that you can learn',
                'status' => 'in_stock',
            ],
            [
                'book_code' => 'A001-06',
                'title' => 'PHP tutorial',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'The most hardest php tutorial that you can learn',
                'status' => 'out_stock',
            ],
            [
                'book_code' => 'A002-02',
                'title' => 'How to play minecraft',
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/011/251/190/small_2x/text-book-closed-free-vector.jpg',
                'description' => 'You became pro player minecraft only in 10 years',
                'status' => 'in_stock',
            ],
        ];

        foreach ($booksData as $bookData) {
            Book::create($bookData);
        }


    }
}
