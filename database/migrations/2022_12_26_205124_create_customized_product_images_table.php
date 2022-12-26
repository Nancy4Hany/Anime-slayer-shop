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
        Schema::create('customized_product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->bigInteger('customized_product_id')->unsigned()->index();
            // $table->timestamps();
            // $table->foreign('customized_product_id')->references('id')->on('customized_products')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customized_product_images');
    }
};
