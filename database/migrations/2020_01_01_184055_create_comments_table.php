<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('comments', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('commented_by')->unsigned();
            $table->bigInteger('topic_id')->unsigned();
            $table->string('reply');
            $table->timestamps();

            $table->foreign('commented_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('comments');
    }

}
