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
			$table->string('id', 9);
			$table->string('holot', 50);
			$table->string('ten', 20);
			$table->date('ngaysinh')->nullable();
			$table->string('dienthoai', 20)->nullable();
			$table->string('email', 100)->nullable();
			$table->text('ghichu')->nullable();
			$table->timestamps();
			$table->primary('id');
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