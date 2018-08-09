<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('branch_id')->unsigned()->index();
//            $table->integer('service_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('quote_id')->unsigned()->index();
            $table->timestamp('date');
            $table->integer('progress');
            $table->timestamps();

//            $table->foreign('branch_id')->references('id')->on('branchs')->onDelete('restrict');
//            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('quote_id')->references('id')->on('quotes')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policy');
    }
}
