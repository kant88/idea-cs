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
            $table->string('content');    // content カラム追加
            $table->integer('originallity')->nullable();
            $table->integer('appropriateness')->nullable();
            $table->integer('pcat1')->nullable();    // pcategory カラム追加
            $table->integer('pcat2')->nullable();
            $table->integer('pcat3')->nullable();
            
            $table->integer('ccat1')->nullable();    // ccategory カラム追加
            $table->integer('ccat2')->nullable();
            $table->integer('ccat3')->nullable();
            $table->integer('select_pcat')->nullable();
            $table->integer('select_what')->nullable();
            $table->integer('no1')->nullable();    // ccategory カラム追加
            $table->integer('no2')->nullable();
            $table->integer('no3')->nullable();
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
