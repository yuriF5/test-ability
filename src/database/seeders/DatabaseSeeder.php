<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert($param);
    $param = [
        'last_name' => '次郎',
        'first_name' => '北海道',
        'gender' => '1',
        'email' => 'testtest@example.com',
        'tel' => '09012345678',
        'address'=> 'Chinese',
        'detail'=> '中国からです',
    ];


        DB::table('authors')->insert($param);

    }
}
