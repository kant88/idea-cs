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
            $table->string('name', 50);   // name　カラム追加
            $table->string('problem');    // problem カラム追加
            $table->string('content');    // content カラム追加
            $table->string('pcategory');    // pcategory カラム追加
            $table->string('ccategory');    // ccategory カラム追加
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
