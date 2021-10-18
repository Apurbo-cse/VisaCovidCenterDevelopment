<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServeOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serve_ons', function (Blueprint $table) {
            $table->id();
            $table->string('pcr')->nullable();
            $table->string('vaccine_normal')->nullable();
            $table->string('vaccine')->nullable();
            $table->string('booster')->nullable();
            $table->date('date')->nullable();
            $table->string('boster_premimum')->nullable();
            $table->bigInteger('center_id')->unsigned();
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
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
        Schema::dropIfExists('serve_ons');
    }
}
