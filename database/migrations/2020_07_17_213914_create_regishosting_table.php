<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegishostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regishosting', function (Blueprint $table) {
            $table->id();
            $table->integer('nguoidung_id');
            $table->string('loaihosting');
            $table->integer('type')->comment('0=domain; 1=host');
            $table->integer('status')->default(0)->comment('0=chưa duyệt; 1=duyệt');
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
        Schema::dropIfExists('regishosting');
    }
}
