<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('restrict');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict');
        });
        Schema::create('user_role', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict');
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('Permissions');
        Schema::dropIfExists('Permission_user');
    }
}
