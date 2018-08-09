<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('landline');
            $table->text('address');
            $table->string('website_address');
            $table->string('email');
            $table->timestamps();
        });

        DB::table('branches')->insert([
            ['title'=>'شعبه انگليس','landline'=>'00979852525','address'=>'لندن','website_address'=>'www.test.com','email'=>'test@gmail.com'],
            ['title'=>'شعبه مرکزی ایران','landline'=>'00979852525','address'=>'تهران میدان فاطمي','website_address'=>'www.test.com','email'=>'test@gmail.com']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
