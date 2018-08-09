<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

//            $table->integer('branch_id')->unsigned()->index();
//            $table->integer('branch_id')->unsigned();
//            $table->integer('branch_id')->unsigned()->index()->nullable();
            $table->integer('branch_id')->nullable();
//            $table->unsignedInteger('branch_id');

            $table->string('title')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->dateTime('contract_date')->nullable();
            $table->string('contract_detail')->nullable();
            $table->boolean('status')->nullable();
            $table->string('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->rememberToken();
            $table->timestamps();

//            $table->foreign('branch_id')->references('id')->on('branchs')->onDelete('restrict');
//            $table->foreign('branch_id')
//                ->references('id')->on('branchs')
//                ->onDelete('restrect');
//            $table->foreign('branch_id')->references('id')->on('branchs');
//            $table->foreign('branch_id')->references('id')->on('branchs');

        });

        DB::table('users')->insert([
            ['branch_id'=>'1','title'=>'admin','firstname'=>'hafez','lastname'=>'heibati','email'=>'aa@aa.aaa','password'=>'$2y$10$k1Htd.axjW9yF8rXWqJJpu0i0gYVn.ACP2xe7X7xY735guMVoojSa','contract_date'=>null,'contract_detail'=>null,'status'=>null,'dob'=>null,'ssn'=>null],
            ['branch_id'=>'1','title'=>'حافظ','firstname'=>'حافظ','lastname'=>'هیبتی','email'=>'test@gmail.com','password'=>'$2y$10$k1Htd.axjW9yF8rXWqJJpu0i0gYVn.ACP2xe7X7xY735guMVoojSa','contract_date'=>null,'contract_detail'=>null,'status'=>null,'dob'=>null,'ssn'=>'4679958285'],
            ['branch_id'=>'1','title'=>'یاسین','firstname'=>'یاسین','lastname'=>'هیبتی','email'=>'dfg@gf.dfg','password'=>'$2y$10$k1Htd.axjW9yF8rXWqJJpu0i0gYVn.ACP2xe7X7xY735guMVoojSa','contract_date'=>null,'contract_detail'=>null,'status'=>null,'dob'=>null,'ssn'=>'4679958285'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
