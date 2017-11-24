<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllForMenuAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->timestamps();
        });

        Schema::create('servs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('icon');
            $table->timestamps();
        });

        Schema::create('servis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('icon');
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('position', 100);
            $table->string('desc');
            $table->string('img');
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
        Schema::dropIfExists('srvs');
        Schema::dropIfExists('servs');
        Schema::dropIfExists('servis');
        Schema::dropIfExists('teams');
    }
}
