<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmazonItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazon_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product')->unique();
            $table->decimal('current_price', 8, 2);
            $table->decimal('lowest_price', 8, 2);
            $table->decimal('highest_price', 8, 2);
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
        Schema::drop('amazon_items');
    }
}
