<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->string('excerpt')->nullable();
            $table->string('brand', 128)->nullable();
            $table->string('file', 128)->nullable();
            $table->string('data', 128)->nullable();
            $table->enum('category', ['CAMION', 'AGRICOLA']);

            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('types')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tires');
    }
}
