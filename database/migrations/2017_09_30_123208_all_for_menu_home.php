<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllForMenuHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table 'homes' - menu home, (only 3 records with fa icons)
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('icon');
            $table->timestamps();
        });

        // table 'specials' - menu home, (only 1 record)
        Schema::create('specials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->text('desc');
            $table->text('text');
            $table->timestamps();
        });

        // table 'testis' - menu home, (3 records)
        Schema::create('testis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('desc');
            $table->string('img');
            $table->timestamps();
        });

        // table 'bottoms' - menu home, (3 records)
        Schema::create('bottoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('icon');
            $table->timestamps();
        });

        // table 'citates' - menu home, (3 records)
        Schema::create('citates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('desc');
            $table->string('icon');
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
        Schema::dropIfExists('homes');
        Schema::dropIfExists('specials');
        Schema::dropIfExists('testis');
        Schema::dropIfExists('bottoms');
        Schema::dropIfExists('citates');
    }
}
