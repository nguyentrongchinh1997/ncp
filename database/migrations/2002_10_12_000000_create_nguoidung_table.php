<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiDungTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nguoidung', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('username')->unique();
			$table->string('phone')->nullable();
			$table->string('email')->unique();
			$table->string('hinhanh')->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->integer('level')->default(0)->comment('0=kh, 1=admin');
			$table->rememberToken();
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
		Schema::dropIfExists('nguoidung');
	}
}