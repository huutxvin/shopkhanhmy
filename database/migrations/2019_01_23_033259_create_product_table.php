<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_table', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('name');
            $table->string('slug');
            $table->integer('price');
            $table->string('image');
            $table->string('warranty');
            $table->string('accessories');
            $table->string('condition');
            $table->string('promotion');
            $table->tinyInteger('status');
            $table->text('description');
            $table->tinyInteger('featured');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('cate_id')
                  ->on('category_table')
                  ->onDelete('cascade'); //when delete categore, product belong to also deleted
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
        Schema::dropIfExists('product_table');
    }
}
