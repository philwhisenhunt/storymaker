<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryPiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('setup_for_noun');
            $table->string('setup_for_verb');
            $table->string('setup_for_famous_person');

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
        Schema::dropIfExists('story_pieces');
    }
}
