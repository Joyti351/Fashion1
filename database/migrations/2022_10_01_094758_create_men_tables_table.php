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
        Schema::create('men_tables', function (Blueprint $table) {
            $table->id();
            $table->string('image_1');
            $table->string('heading_1');
            $table->float('blance_1');
            $table->string('image_2');
            $table->string('heading_2');
            $table->float('blance_2');
            $table->string('image_3');
            $table->string('heading_3');
            $table->float('blance_3');
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
        Schema::dropIfExists('men_tables');
    }
};
