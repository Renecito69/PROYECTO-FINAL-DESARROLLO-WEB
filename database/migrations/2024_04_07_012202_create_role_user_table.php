<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
     Schema::create('role_user', function (Blueprint $table) {
     $table->bigincrements('id');
     $table->integer('role_id')->unsigned();
     $table->integer('user_id')->unsigned();
     $table->timestamps();
     });
    }
    public function down()
    {
     Schema::dropIfExists('role_user');
    }
    
};
