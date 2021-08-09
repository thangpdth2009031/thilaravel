<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('structures')->truncate();
        DB::table('structures')->insert([
            [
                'id' => 001,
                'bookid' => 1111,
                'authorid' => 1,
                'title' => 'Tương Lai Bố Tướng',
                'ISBN' => '',
                'pub_year'=>2018,
                'available'=>1
            ],
            [
                'id' => 002,
                'bookid' => 2222,
                'authorid' => 2,
                'title' => 'Bách Khoa Thư Larousse - Thể Thao',
                'ISBN' => '',
                'pub_year'=>2019,
                'available'=>1
            ],
            [
                'id' => 003,
                'bookid' => 3333,
                'authorid' => 3,
                'title' => 'Đắc Nhân Tâm',
                'ISBN' => '',
                'pub_year'=>2002,
                'available'=>1
            ],
            [
                'id' => 004,
                'bookid' => 4444,
                'authorid' => 2,
                'title' => 'Tương lại mẹ',
                'ISBN' => '',
                'pub_year'=>2003,
                'available'=>1
            ]
        ]);
       DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
