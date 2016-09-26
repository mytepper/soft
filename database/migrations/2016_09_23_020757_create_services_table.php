<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('services', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->string('detail');
             $table->enum('type', ['P', 'S']);
             $table->string('customer_id');
             $table->dateTime('next_pay_date');
             $table->string('status');
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
         Schema::drop('services');
     }
}
