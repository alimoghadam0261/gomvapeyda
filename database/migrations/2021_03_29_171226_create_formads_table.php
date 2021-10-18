<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



class CreateFormadsTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('formads', function (Blueprint $table) {

            $table->id();


            $table->string('name');

            $table->integer('category');

            $table->string('price');

            $table->string('phone');

            $table->string('address');

            $table->integer('mojdegani');

            $table->string('img')->default('img/logo/logo1.png');

            $table->enum('status',['on','off','paying'])->default('off');

            $table->longText('content');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('viwecount')->default(10);

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

        Schema::dropIfExists('formads');

    }

}

