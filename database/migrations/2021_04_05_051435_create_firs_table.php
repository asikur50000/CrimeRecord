<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firs', function (Blueprint $table) {
            $table->id();
            $table->string('station_id');
            $table->string('category_id');
            $table->string('nameofaccused');
            $table->string('name');
            $table->string('mobilenumber');
            $table->string('address');
            $table->string('gender');
            $table->string('email');
            $table->string('fir_no')->nullable();
            $table->string('remark')->nullable();
            $table->string('status',30)->default('Pending');
           // $table->string('relationwithaccusedperson');
           $table->string('purposeofapplyingfir')->nullable();
            $table->string('sectionoflaw')->nullable();
            $table->string('officer')->nullable();
            $table->string('investigationdetails')->nullable();
            $table->string('chargesheet_status')->default('Pending');
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
        Schema::dropIfExists('firs');
    }
}
