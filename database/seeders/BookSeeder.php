<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = ([
            ([
                "isbn"          => "12345",
                "title"         => "Resep Masakan Chinese Halal",
                "description"   => "",
                "author"        => "",
                "publisher"     => "",
                "public_year"   => "",
            ]),
            ([
                "isbn"          => "12346",
                "title"         => "7 Dosa Besar Pemimpin Dzolim",
                "description"   => "",
                "author"        => "",
                "publisher"     => "",
                "public_year"   => "",
            ]),
            ([
                "isbn"          => "12347",
                "title"         => "Laskar Pelangi",
                "description"   => "",
                "author"        => "",
                "publisher"     => "",
                "public_year"   => "",
            ]),
            ([
                "isbn"          => "12348",
                "title"         => "Dongen Si Kancil",
                "description"   => "",
                "author"        => "",
                "publisher"     => "",
                "public_year"   => "",
            ]),
            ([
                "isbn"          => "12349",
                "title"         => "B.J. Habibie",
                "description"   => "",
                "author"        => "",
                "publisher"     => "",
                "public_year"   => "",
            ]),
        ]);
        Book::insert($data);
    }
}
