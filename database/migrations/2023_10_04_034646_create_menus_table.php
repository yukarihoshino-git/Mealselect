<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('menus')){
            Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('space_id');
            $table->date('date');
            $table->string('title');
            $table->string('body');
            $table->timestamps();
                // $table->bigIncrements('id');
                // $table->string('title');
                // $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
