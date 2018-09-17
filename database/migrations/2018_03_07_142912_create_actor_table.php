<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorTable extends Migration
{

    public function up()
    {
        Schema::create('actor_series', function (Blueprint $table) {
            $table->integer('serie_id');
            $table->integer('actor_id');
            $table->timestamps();
            $table->primary(['actor_id','serie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_series');
    }
}
