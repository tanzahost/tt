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
        Schema::create('reasons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->text('svg');
            $table->string('sub_title_1');
            $table->string('sub_title_2');
            $table->string('sub_title_3');
            $table->text('sub_desc_1');
            $table->text('sub_desc_2');
            $table->text('sub_desc_3');
            $table->text('url');

            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
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
        Schema::dropIfExists('reasons');
    }
};
