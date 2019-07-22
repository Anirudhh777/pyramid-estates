<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->default(NULL)->nullable();
            $table->string('user_type');
            $table->string('property_type');
            $table->string('property_sub_type')->default(NULL)->nullable();
            $table->string('bedrooms')->default(NULL)->nullable();
            $table->string('locations')->default(NULL)->nullable();
            $table->string('area')->default(NULL)->nullable();
            $table->string('budget')->default(NULL)->nullable();
            $table->string('additional');
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
        Schema::dropIfExists('sellers');
    }
}
