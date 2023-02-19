<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //
        User::create([
            'title' => 'John Doe',
            'img_path' => 'john/example/img',
            'release_date' => '01/01/2002',
        ]);
    }
}
