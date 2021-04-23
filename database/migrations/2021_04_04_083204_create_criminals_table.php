<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminals', function (Blueprint $table) {
            $table->id();
            $table->string('station_id');
            $table->string('criminalname');
            $table->string('criminaldateofbirth');
            $table->string('crimetype');
            $table->string('crimedate');
            $table->string('mobilenumber');
            $table->string('crimetime');
            $table->string('zipcode');
            $table->string('crimecity');
            
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
        Schema::dropIfExists('criminals');
    }
}
