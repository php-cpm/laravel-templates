<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\DB;

class CreateConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //应用
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->unique('name')->comment = '应用名称';
            $table->unsignedInteger('biz_group_id')->comment = '分组id';
            $table->string('desc', 255)->comment = '描述';
            $table->softDeletes()->comment = '软删除';
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->index('group_id', 'IDX_group_id');// field(s) -> index name
        });

        //分组列表
        Schema::create('biz_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->unique('name')->comment = '分组名称';
            $table->string('desc', 255)->comment = '描述';
            $table->softDeletes()->comment = '软删除';
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('apps');
        Schema::drop('biz_groups');
    }
}
