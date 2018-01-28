<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BizGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('biz_groups')->insert(
            [
                [
                    'id' => 1,
                    'name' => '手游团队',
                ],
                [
                    'id' => 2,
                    'name' => '创新应用团队',
                ],
            ]
        );
    }
}
