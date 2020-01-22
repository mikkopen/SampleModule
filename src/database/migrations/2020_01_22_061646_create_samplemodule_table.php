<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplemoduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samplemodules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('slug');
            $table->text('url');
            $table->text('name');
            $table->text('title');
            $table->text('description');
            $table->text('keywords');
            $table->mediumInteger('order');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samplemodules');
    }
}
