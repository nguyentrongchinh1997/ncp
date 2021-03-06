<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('domain_id')->nullable();
            $table->unsignedBigInteger('hosting_id')->nullable();
            $table->float('price');
            $table->timestamps();
            $table->unsignedBigInteger('nguoidung_id');
            $table->date('date_register');
            $table->date('date_exprie');
            $table->unsignedBigInteger('order_id');
            $table->foreign('domain_id')->references('id')->on('domain');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('hosting_id')->references('id')->on('hosting');
            $table->foreign('nguoidung_id')->references('id')->on('nguoidung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
