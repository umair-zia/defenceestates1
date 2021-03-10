<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->string('status');
            $table->string('city');
            $table->string('title');
            $table->string('category');
            $table->string('type');
            $table->string('phase');
            $table->integer('kitchen')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->float('demand', 15, 2);
            $table->float('area', 8, 2);
            $table->string('unit');
            $table->string('adress');
            $table->string('postal');
            $table->string('detail');
            $table->json('features')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('images');
            $table->string('aproved')->nullable();
            $table->json('subcribers')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
