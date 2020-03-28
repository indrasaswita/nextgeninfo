<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE pages(
				id INT PRIMARY KEY AUTO_INCREMENT,
				pagetypeID INT UNSIGNED NOT NULL DEFAULT 1,
				pagegroupID INT UNSIGNED NULL,
				name VARCHAR(128) NOT NULL,
				link VARCHAR(32) NOT NULL,
				pageheader VARCHAR(128) NULL,
				subheader VARCHAR(512) NULL,
				headerbackground VARCHAR(512) NULL,
				showfooter INT(1) UNSIGNED NOT NULL DEFAULT 1,
				headeroverlap INT(1) UNSIGNED NOT NULL DEFAULT 0,
				status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL
			);
		");

		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground, headeroverlap) VALUES (8, 1, 'home', 'Home', 'JPCC Next Gen', 'Kids - Youth - Campus', 'home-bg.jpg', 1)");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (2, 2, 'location', 'Location', 'Location', 'Visit Us', 'location-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 3, 'smallgroup', 'Small Group', 'Small Group Leader', null, 'smallgroup-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 3, 'largegroup', 'Large Group (Creative)', 'Large Group (Creative)', null, 'largegroup-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 3, 'caresupport', 'Care & Support', 'Care & Support', null, 'care&support-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 3, 'interns', 'Interns', 'Interns', null, 'interns-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 3, 'servewithme', 'Serve With Me', 'Serve With Me', null, 'servewithme-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 4, 'calendar', 'Calendar', 'Calendar', 'The latest happenings for you at JPCC Next Gen', 'calendar-bg.jpg')");
		DB::unprepared("INSERT INTO pages(pagetypeID, pagegroupID, link, name, pageheader, subheader, headerbackground) VALUES (3, 5, 'parenting', 'Parenting', 'Parenting', 'Learn more to access our Phase Cards & monthly Parent Cue', 'parenting-bg.jpg')");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pages');
	}
}
