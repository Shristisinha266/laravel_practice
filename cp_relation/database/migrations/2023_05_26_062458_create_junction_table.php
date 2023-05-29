<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJunctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pro_id");
            $table->unsignedBigInteger("cus_id");
            $table->foreign('pro_id')->references('pid')->on("products");
            $table->foreign('cus_id')->references('cid')->on("customers");
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
        Schema::dropIfExists('junction');
    }
}
