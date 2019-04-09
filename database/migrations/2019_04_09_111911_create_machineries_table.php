<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachineriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machineries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name',128);
            $table->string('slug', 128)->unique();
            $table->string('file', 128)->nullable();
            $table->string('brand', 128)->nullable();
            $table->string('data', 128)->nullable();
            $table->string('excerpt')->nullable();
            
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
        Schema::dropIfExists('machineries');
    }
}
