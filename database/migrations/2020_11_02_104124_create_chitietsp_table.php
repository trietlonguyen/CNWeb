<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sanpham_id')->nullable();
            $table->string('mota');
            $table->string('thongsoKT');
            $table->string('PhuKien')->nullable();
            $table->timestamps();
            $table->foreign('sanpham_id')->references('id')->on('sanpham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietsp');
    }
}
