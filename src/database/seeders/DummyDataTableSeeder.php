<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'テスト太郎',
            'start_date_time'=> "10:00:00",
            'end_date_time'=> "20:00:00",
            'start_date_time'=> "00:30:00",
            'end_date_time'=> "09:30:00",            
        ];
        DB::table('DummyData')->insert($param);

        $param = [
            'name' => 'テスト次郎',
            'start_date_time'=> "10:00:10",
            'end_date_time'=> "20:00:00",
            'start_date_time'=> "00:30:00",
            'end_date_time'=> "09:29:50",            
        ];
        DB::table('DummyData')->insert($param);

        $param = [
            'name' => 'テスト三郎',
            'start_date_time'=> "10:00:10",
            'end_date_time'=> "20:00:00",
            'start_date_time'=> "00:30:00",
            'end_date_time'=> "09:29:50",            
        ];
        DB::table('DummyData')->insert($param);

        $param = [
            'name' => 'テスト四郎',
            'start_date_time'=> "10:00:20",
            'end_date_time'=> "20:00:00",
            'start_date_time'=> "00:30:00",
            'end_date_time'=> "09:29:40",            
        ];
        DB::table('DummyData')->insert($param);

        $param = [
            'name' => 'テスト五郎',
            'start_date_time'=> "10:00:20",
            'end_date_time'=> "20:00:00",
            'start_date_time'=> "00:30:00",
            'end_date_time'=> "09:29:40",            
        ];
        DB::table('DummyData')->insert($param);



    }
}
