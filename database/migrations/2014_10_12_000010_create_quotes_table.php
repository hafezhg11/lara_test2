<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->unsigned()->index();
            $table->integer('service_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('quote_ref');
            $table->dateTime('valid_from');
            $table->dateTime('valid_to');
            $table->integer('premium');
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('restrict');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
