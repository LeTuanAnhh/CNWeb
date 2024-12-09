<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('books')->insert([
        ['title' => 'Clean Code', 'author' => 'Robert C. Martin', 'publication_year' => 2008, 'genre' => 'Programming', 'library_id' => 1],
        ['title' => 'The Pragmatic Programmer', 'author' => 'Andrew Hunt', 'publication_year' => 1999, 'genre' => 'Programming', 'library_id' => 1]
    ]);
}

}
