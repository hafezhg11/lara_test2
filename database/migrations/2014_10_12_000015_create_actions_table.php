<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operation_id')->unsigned()->index();
            $table->string('name');
            $table->boolean('status');
            $table->integer('next_action_id')->nullable();
            $table->integer('pre_action_id')->nullable();
            $table->timestamps();
            $table->foreign('operation_id')->references('id')->on('operations')->onDelete('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
