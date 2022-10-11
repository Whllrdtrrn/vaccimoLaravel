<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSideeffectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sideeffect', function (Blueprint $table) {
            $table->increments('id');

            $table->string('muscle_ache')->nullable();
            $table->string('headache')->nullable();
            $table->string('fever')->nullable();
            $table->string('redness')->nullable();
            $table->string('swelling')->nullable();
            $table->string('tenderness')->nullable();
            $table->string('warmth')->nullable();
            $table->string('itch')->nullable();
            $table->string('induration')->nullable();
            $table->string('feverish')->nullable();
            $table->string('chills')->nullable();
            $table->string('join_pain')->nullable();
            $table->string('fatigue')->nullable();
            $table->string('nausea')->nullable();
            $table->string('vomiting')->nullable();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sideeffect');
    }
}
