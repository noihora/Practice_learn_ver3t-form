<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleTabaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'サンプル太郎',
            'tel' => '09012345678',
            'address' => '〇〇県☓☓市',
            'wmail' => 'taro_sample@mail.com',
            'is_experience' => 1,
        ];
    
    }
}
