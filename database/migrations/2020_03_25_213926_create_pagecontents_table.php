<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagecontentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::unprepared("
			CREATE TABLE pagecontents(
				id INT PRIMARY KEY AUTO_INCREMENT,
				pageID INT UNSIGNED NOT NULL,
				contentID INT UNSIGNED NOT NULL,
				name VARCHAR(32) NOT NULL,
				titletext VARCHAR(1000) NULL,
				titlesize VARCHAR(16) NULL,
				titleweight INT NULL,
				titleitalic INT(1) UNSIGNED NOT NULL DEFAULT 0,
				titlecolor VARCHAR(32) NULL,
				titlealign ENUM('left', 'right', 'center', 'justify') NULL,
				contenttext VARCHAR(1000) NULL,
				contentsize VARCHAR(16) NULL,
				contentweight INT NULL,
				contentitalic INT(1) UNSIGNED NOT NULL DEFAULT 0,
				contentcolor VARCHAR(32) NULL,
				contentalign ENUM('left', 'right', 'center', 'justify') NULL,
				backgroundcolor VARCHAR(32) NULL,
				backgroundurl VARCHAR(500) NULL,
				linkurl VARCHAR(500) NULL,
				linktitle VARCHAR(64) NULL,
				size ENUM('small', 'medium', 'large') NULL,
				specialmargin VARCHAR(16) NULL,
				specialpadding VARCHAR(16) NULL,
				queue TINYINT NOT NULL DEFAULT 0,
				created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				updated_at TIMESTAMP NULL
			);

			INSERT INTO pagecontents VALUES (1,1,7, 'jpccyouthhome', 'JPCC YOUTH', null, '400', '0', null, null, 'Online Service', null, '400', '0', null, null, '#50afdd', 'jpccyouthtv-bg.jpg', 'page/jpccyouthtv', 'VIEW MORE', 'large', null, null, 1, now(), now());
			INSERT INTO pagecontents VALUES (2,1,7, 'parentinghome', 'PARENTING', null, '400', '0', null, null, 'Learn more to access our Phase Cards & monthly Parent Cue', null, '400', '0', null, null, '#50afdd', 'parenting-bg.jpg', 'page/parenting', 'LEARN MORE', 'large', null, null, 2, now(), now());
			INSERT INTO pagecontents VALUES (3,1,7, 'teammessagehome', 'Team Message', null, '400', '0', null, null, 'Watch this featured monthly team message from JPCC Next Gen Leaders', null, '400', '0', null, null, '#50afdd', 'teammessage-bg.jpg', 'page/teammessage', 'WATCH THIS', 'small', null, null, 3, now(), now());
			INSERT INTO pagecontents VALUES (4,1,7, 'internshome', 'JPCC Next Gen Interns', null, '400', '0', null, null, 'Getting Involved', null, '400', '0', null, null, '#50ddaf', 'interns-bg.jpg', 'page/interns', 'VIEW MORE', 'small', null, null, 4, now(), now());
			INSERT INTO pagecontents VALUES (5,1,7, 'servehome', 'Serve', null, '400', '0', null, null, 'Getting Involved', null, '400', '0', null, null, '#50afdd', 'serve-bg.jpg', 'page/serve', 'VIEW MORE', 'small', null, null, 5, now(), now());
			INSERT INTO pagecontents VALUES (6,1,7, 'locationhome', 'Location', null, '400', '0', null, null, 'Visit Us', null, '400', '0', null, null, '#50ddaf', 'location-bg.jpg', 'page/location', 'VISIT US', 'small', null, null, 6, now(), now());
			INSERT INTO pagecontents VALUES (7,1,7, 'calendarhome', 'Calendar', null, '400', '0', null, null, 'The latest happenings for you at JPCC Next Gen', null, '400', '0', null, null, '#50afdd', 'calendar-bg.jpg', 'page/calendar', 'LEARN MORE', 'small', null, null, 7, now(), now());
			INSERT INTO pagecontents VALUES (8,1,7, 'resourceshome', 'Resources', null, '400', '0', null, null, 'Resources for Leaders', null, '400', '0', null, null, '#34a', 'resources-bg.jpg', 'page/resources', 'LEARN MORE', 'small', null, null, 8, now(), now());



		");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pagecontents');
	}
}
