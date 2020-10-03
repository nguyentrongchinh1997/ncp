<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting', function (Blueprint $table) {
            $table->id();
            $table->string('diachiip');
            $table->float('giatien', 10, 2);
            $table->integer('status')->default(0)->comment('0=chưa kích hoạt, 1=kích hoạt');
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
        Schema::dropIfExists('hosting');
    }
}
