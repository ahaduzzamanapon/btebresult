<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondcsts', function (Blueprint $table) {
           
            $table->integer ('roll')->nullable();
            $table->string ('result')->nullable();
            $table->string ('first')->nullable();
            $table->string ('second')->nullable();
            $table->string ('third')->nullable();
            $table->string ('fourth')->nullable();
            $table->string ('fifth')->nullable();
            $table->string ('sixth')->nullable();
            $table->string ('seventh')->nullable();
            $table->integer ('duefees')->nullable();
            $table->integer ('stutus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secondcsts');
    }
};
