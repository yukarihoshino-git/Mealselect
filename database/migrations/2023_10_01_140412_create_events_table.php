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
        if(!Schema::hasTable('events')){
            Schema::create('events', function (Blueprint $table) {
                $table->string('event_id', 34)->primary();
            //僕はuuidにしてます
            $table->date('date');
            $table->string('title');
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
        Schema::dropIfExists('events');
    }
};
