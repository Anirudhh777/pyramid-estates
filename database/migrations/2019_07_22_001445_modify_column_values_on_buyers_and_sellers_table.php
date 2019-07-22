<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColumnValuesOnBuyersAndSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->string('user_type')->nullable()->change();
            $table->string('property_type')->nullable()->change();
            $table->string('additional')->nullable()->change();
        });

        Schema::table('sellers', function (Blueprint $table) {
            $table->string('user_type')->nullable()->change();
            $table->string('property_type')->nullable()->change();
            $table->string('additional')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
}
