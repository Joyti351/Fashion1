<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_tables', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image_1')->nullable();
            $table->string('heading_1');
            $table->string('banner_image_2')->nullable();
            $table->string('heading_2');
            $table->string('banner_image_3')->nullable();
            $table->string('heading_3');
            $table->boolean('status');
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
        Schema::dropIfExists('banner_tables');
    }
};
