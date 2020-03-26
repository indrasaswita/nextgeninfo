<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagetypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE pagetypes(
				id INT PRIMARY KEY AUTO_INCREMENT,
				pagetypegroupID INT UNSIGNED NOT NULL,
				name VARCHAR(64) NOT NULL,
				favourite INT(1) UNSIGNED NOT NULL DEFAULT 0,
				status ENUM('active','develop','inactive') NOT NULL DEFAULT 'active',
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL
			);
		");
		// active brarti bisa di pake
		// develop belom siap pake
		// inactive sedang di suspend

		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (1, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (2, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (3, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (4, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (5, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (6, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (7, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (8, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (8, 'black n white', 0)");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pagetypes');
	}
}
