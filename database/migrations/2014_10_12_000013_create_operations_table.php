<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('branch_id')->unsigned()->index();
            $table->integer('service_id')->nullable()->unsigned()->index();
            $table->string('name');
            $table->boolean('status');
            $table->boolean('origin');

            $table->integer('parent_id')->nullable();

            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict');
//            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

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
