<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagetypegroupsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE pagetypegroups(
				id INT PRIMARY KEY AUTO_INCREMENT,
				name VARCHAR(64) NOT NULL,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL
			);
		");

		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('blank')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('about')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('blog')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('contact')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('portfolio')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('services')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('team')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('home')");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pagetypegroups');
	}
}
