<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('categories')){
            Schema::create('categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->default('Category');
                $table->integer('parentID')->default(0);
                $table->string('class_bst_icon')->default('');
                $table->integer('level')->default(1);
                $table->boolean("hasSub")->default(false);
                $table->string("path")->default("");
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
