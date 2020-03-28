<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagegroupsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE pagegroups(
				id INT PRIMARY KEY AUTO_INCREMENT,
				name VARCHAR(32) NOT NULL,
				queue INT UNSIGNED NOT NULL DEFAULT 0,
				asalist INT(1) UNSIGNED NOT NULL DEFAULT 0,
				showinnav INT(1) UNSIGNED NOT NULL DEFAULT 1,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL
			);
		");

		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Home', 1, 0)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Location', 3, 0)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Serve', 2, 1)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Calendar', 4, 0)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist, showinnav) VALUES ('Unshown', 4, 0, 0)");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pagegroups');
	}
}
