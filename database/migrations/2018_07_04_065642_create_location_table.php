<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('origin')->nullable();
            $table->boolean('destination')->nullable();
            $table->timestamps();
        });

        DB::table('locations')->insert([
            ['name'=>'ایران','origin'=>'1','destination'=>'1'],
            ['name'=>'انگليس','origin'=>'0','destination'=>'1'],
            ['name'=>'امريكا','origin'=>'0','destination'=>'1'],
            ['name'=>'ترکیه','origin'=>'0','destination'=>'1'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
