<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('image');
            $table->string('name',50);
            $table->string('description',100);
            $table->string('category',100);
            $table->string('brand',100);
            $table->string('quantity',50);
            $table->string('provider',50);
            $table->string('data_venc',20);
            $table->float('price',15,6);
            $table->float('saleprice',15,6);
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
