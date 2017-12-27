<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable();   // name　カラム追加
            $table->string('problem');    // problem カラム追加
            $table->string('problem2');    // problem2 カラム追加
            $table->string('content');    // content カラム追加
            $table->string('content2');    // content2 カラム追加
            $table->integer('originallity')->nullable();
            $table->integer('appropriateness')->nullable();

            $table->integer('select_pcat')->nullable();
            $table->integer('select_what')->nullable();

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
        Schema::drop('ideas');
    }
}
