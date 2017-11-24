<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllForFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table 'footers' - 1 record
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('icon');
            $table->timestamps();
        });

        // table 'prefooters' - 3 record (2 - what media say, 1 -request a quote)
        Schema::create('prefooters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('source', 100);
            $table->timestamps();
        });
        // table 'address' - 1 record
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('str1');
            $table->string('str2');
            $table->string('str3');
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
        Schema::dropIfExists('footers');
        Schema::dropIfExists('prefooters');
        Schema::dropIfExists('address');
    }
}
