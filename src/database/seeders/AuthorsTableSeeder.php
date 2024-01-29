<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Str;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'work_id' => 1,
            'start_date_time' => ('12:30:00'),
            'end_date_time' => ('13:00:00'),
        ];
            DB::table('intermissions')->insert($param);
        $param = [
            'id' => 2,
            'work_id' => 2,
            'start_date_time' => ('12:30:00'),
            'end_date_time' => ('13:00:00'),
        ];    
            DB::table('intermissions')->insert($param);
        $param = [
                'id' => 3,
                'work_id' => 3,
                'start_date_time' => ('12:30:10'),
                'end_date_time' => ('13:00:00'),            
            ];
            DB::table('intermissions')->insert($param);
        $param = [
                'id' => 4,
                'work_id' => 4,
                'start_date_time' => ('12:30:10'),
                'end_date_time' => ('13:00:00'),            
            ];
            DB::table('intermissions')->insert($param);
            $param = [
                'id' => 5,
                'work_id' => 5,
                'start_date_time' => ('12:30:10'),
                'end_date_time' => ('13:00:00'),            
            ];
            DB::table('intermissions')->insert($param);
   
 
}
}

