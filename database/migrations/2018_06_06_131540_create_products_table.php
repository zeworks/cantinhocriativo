<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug',500);
            $table->longtext('details')->nullable();
            $table->longtext('description')->nullable();
            $table->string('status',20)->nullable();
            $table->string('new_product',20)->nullable();
            $table->string('featured_image',500)->nullable();
            $table->string('reference',200)->nullable();
            $table->string('weight_product',200)->nullable();
            $table->string('size_product',200)->nullable();
            $table->string('colors',500)->nullable();
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
        Schema::dropIfExists('products');
    }
}
