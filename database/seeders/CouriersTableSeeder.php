<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Courier;
use Illuminate\Support\Facades\DB;

class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couriers')->insert([
            'code' => 'jne',
            'title' => 'JNE'
        ]);
        // $data = [
        //     ['code' => 'jne', 'title' => 'JNE'],
        //     ['code' => 'pos', 'title' => 'POS'],
        //     ['code' => 'tiki', 'title' => 'TIKI'],
        // ];
        // Courier::insert($data);
    }
}
