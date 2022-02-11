<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();   
            $table->string('category');
            $table->string('subcategory');
            $table->string('Name_of_the_Product');
            $table->string('Product_Price');
            $table->string('Product_Color');
            $table->string('Available_Stock');
            $table->string('Product_img');
            $table->string('Product_Description');
            $table->rememberToken();
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
        
        Schema::dropIfExists('product');
    }
}
