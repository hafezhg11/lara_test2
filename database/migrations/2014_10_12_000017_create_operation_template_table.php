<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_template', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('template_id')->unsigned()->index();
            $table->integer('operation_id')->unsigned()->index();
//            $table->string('name');
//            $table->boolean('status');
            $table->integer('priority')->nullable();
//            $table->integer('pre_action_id')->nullable();
//            $table->timestamps();
            $table->foreign('operation_id')->references('id')->on('operations')->onDelete('restrict');
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_template');
    }
}
