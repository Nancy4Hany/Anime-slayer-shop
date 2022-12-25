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
    Schema::create('customized_products', function (Blueprint $table) {
      $table->id();
      $table->longText('image_data');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('customized_products');
  }
};
