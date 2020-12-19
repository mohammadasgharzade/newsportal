<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('status');
            $table->text('descryption');
            $table->text('image')->nullable();
            $table->unsignedBigInteger('view')->default(0);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();



            $table->timestamps();
        });

        Schema::create('image_subcategory', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('image_id')->unsigned();
            $table->bigInteger('subcategory_id')->unsigned();
            
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('images');
        Schema::dropIfExists('image_subcategory');

    }
}
