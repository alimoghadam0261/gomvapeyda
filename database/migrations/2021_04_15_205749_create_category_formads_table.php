<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryFormadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_formads', function (Blueprint $table) {
    $table->unsignedBigInteger('category_id');
    $table->foreign('category_id')
        ->references('id')
        ->on('categories')
        ->onUpdate('cascade')
        ->onDelete('cascade');

            $table->unsignedBigInteger('formads_id');
            $table->foreign('formads_id')
                ->references('id')
                ->on('formads')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_formads');
    }
}
