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
        Schema::create('weekly', function (Blueprint $table) {
            $table->id();
            $table->date('target_start');
            $table->date('target_end');
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->string('weeklysd');
            $table->text('descweeklysd');
            $table->string('weeklybp');
            $table->text('descweeklybp');
            $table->string('weeklykl');
            $table->text('descweeklykl');
            $table->string('weeklyic');
            $table->text('descweeklyic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly');
    }
};
