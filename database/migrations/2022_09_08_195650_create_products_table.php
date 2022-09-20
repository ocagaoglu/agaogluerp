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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->float('unit_price')->nullable();
            $table->tinyInteger('raw');
            $table->tinyInteger('sellable');
            $table->tinyInteger('buyable');
            $table->tinyInteger('use_average_price');
            $table->float('weight')->nullable();
            $table->float('volume')->nullable();
            $table->float('rounding_sensivity');
            $table->float('multiplier');
            $table->string('description')->nullable();

            $table->bigInteger('product_category_id')->unsigned();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');

            $table->bigInteger('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');

            $table->bigInteger('pack_id')->unsigned();
            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('cascade');

            $table->bigInteger('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('products');

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
};
