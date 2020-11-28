<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'database/sql/insert_movies.sql';
        $path2 = 'database/sql/insert_movies2.sql';
        $path3 = 'database/sql/insert_movies3.sql';
        $path4 = 'database/sql/insert_movies4.sql';
        DB::unprepared(file_get_contents($path));
        DB::unprepared(file_get_contents($path2));
        DB::unprepared(file_get_contents($path3));
        DB::unprepared(file_get_contents($path4));
    }
}
