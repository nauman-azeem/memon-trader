<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('brand_id');
      $table->integer('category_id');
      $table->integer('subcategory_id');
      $table->boolean('is_featured');
      $table->text('description');
      $table->bigInteger('price');
      $table->tinyInteger('discount_type');
      $table->bigInteger('discount_amount');
      $table->integer('image_count');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('products');
  }
}
