<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('apps')->insert(
            [
                [
                    'id'           => 1,
                    'name'         => '跳一跳',
                    'group_id' => 1
                ],
                [
                    'id'           => 2,
                    'name'         => '打飞机',
                    'group_id' => 1
                ],
            ]
        );
    }
}
