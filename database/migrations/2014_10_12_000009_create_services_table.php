<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->unsigned()->index();
            $table->string('name');
            $table->string('specification');
            $table->integer('ave_processing_time');
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('restrict');

        });

        DB::table('services')->insert([
            ['branch_id'=>'1','name'=>'ثبت شرکت','specification'=>'ثبت شرکت','ave_processing_time'=>'321'],
            ['branch_id'=>'1','name'=>'ثبت برند','specification'=>'ثبت برند','ave_processing_time'=>'321'],
            ['branch_id'=>'2','name'=>'صدور شناسنامه','specification'=>'صدور شناسنامه','ave_processing_time'=>'321'],
            ['branch_id'=>'2','name'=>'صدور گذرنامه','specification'=>'صدور گذرنامه','ave_processing_time'=>'321'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
