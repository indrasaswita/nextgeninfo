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
			INSERT INTO pagecontents VALUES (9,2,1, 'kasablankatitle1location', null, null, null, '0', null, null, 'THE KASABLANKA', '200%', '400', '0', '#e90', null, null, null, null, null, 'large', null, null, 1, now(), now());
			INSERT INTO pagecontents VALUES (10,2,1, 'servicetimelocation', null, null, null, '0', null, null, 'SERVICE TIME', '95%', '400', '0', '#e90', null, null, null, null, null, 'medium', null, null, 2, now(), now());
			INSERT INTO pagecontents VALUES (11,2,5, 'jpcckidskokaslocation', 'JPCC Kids (Baby - Grad 6):', '110%', '800', '0', '#444', null, '07:15 | 9:30 | 11:45', '110%', '300', '0', '#444', null, null, null, null, null, 'small', null, null, 3, now(), now());
			INSERT INTO pagecontents VALUES (12,2,5, 'jpccyouthkokaslocation', 'JPCC Youth (Grade 7-12):', '110%', '800', '0', '#444', null, '07:15 | 9:30 | 12:45', '110%', '300', '0', '#444', null, null, null, null, null, 'small', null, null, 4, now(), now());
			INSERT INTO pagecontents VALUES (13,2,5, 'jpcccampuskokaslocation', 'JPCC Campus (University Students):', '110%', '800', '0', '#444', null, '14:00', '110%', '300', '0', '#444', null, null, null, null, null, 'small', null, null, 5, now(), now());
			INSERT INTO pagecontents VALUES (14,2,1, 'locationlocation', null, null, null, '0', null, null, 'LOCATION & DIRECTIONS', '95%', '400', '0', '#e90', null, null, null, null, null, 'medium', null, null, 6, now(), now());
			INSERT INTO pagecontents VALUES (15,2,5, 'location2location', null, null, null, '0', null, null, 'The Kasablanka<br>Mal Kota Kasablanka 3rd-4th floor<br>Jl. Casablanca Raya Kav. 88<br>Jakarta 12870', '110%', '300', '0', '#444', null, null, null, null, null, 'small', null, null, 7, now(), now());
			INSERT INTO pagecontents VALUES (16,2,8, 'linelocation', null, null, null, '0', null, null, null, null, null, '0', null, null, null, null, null, null, null, null, null, 8, now(), now());
			INSERT INTO pagecontents VALUES (17,9,5, 'phasecard1parenting', 'Phase Card', '150%', null, '0', 'rgb(100, 124, 150)', null, 'Merupakan kumpulan ringkasan singkat tentang fase, info terkait pertumbuhan & perkembangan anak, tips sederhana untuk mempengaruhi pikiran dan hati mereka, mulai dari usia 0 (new baby) - SMA.', null, '400', '0', '#666', null, null, null, null, null, null, null, null, 1, now(), now());
			INSERT INTO pagecontents VALUES (18,9,2, 'phasecard2parenting', null, null, null, '0', null, null, null, null, null, '0', null, null, 'rgb(100, 124, 150)', null, 'https://nextgen.myjpcc.org/phasecards', 'PHASE CARDS', 'large', null, null, 2, now(), now());
			INSERT INTO pagecontents VALUES (19,9,8, 'lineparenting', null, null, null, '0', null, null, null, null, null, '0', null, null, null, null, null, null, null, null, null, 3, now(), now());
			INSERT INTO pagecontents VALUES (20,9,5, 'parentcue1parenting', 'Parent Cue', '150%', null, '0', 'rgb(100, 124, 150)', null, 'Parent Cue merupakan materi dari bahan JPCC Kids & Youth yang bisa diaplikasikan oleh orangtua di rumah. Parent Cue di desain secara khusus untuk menolong orangtua agar dapat menolong anak-anaknya dalam mengembangkan iman yang sejati. Kami akan mengirimankan Parent Cue melalui e-mail. Untuk mendapatkan Parent Cue secara berkala, klik tombol dibawah ini :', null, '400', '0', '#666', null, null, null, null, null, null, null, null, 4, now(), now());
			INSERT INTO pagecontents VALUES (21,9,2, 'parentcue2parenting', null, null, null, '0', null, null, null, null, null, '0', null, null, 'rgb(100, 124, 150)', null, 'https://nextgen.myjpcc.org/parentcue', 'PARENT CUE', 'large', null, null, 5, now(), now());
			INSERT INTO pagecontents VALUES (22,2,1, 'upperroomtitle1location', null, null, null, '0', null, null, 'UPPERROOM JAKARTA', '200%', '400', '0', '#e90', null, null, null, null, null, 'large', null, null, 1, now(), now());
			INSERT INTO pagecontents VALUES (23,2,1, 'servicetimelocation2', null, null, null, '0', null, null, 'SERVICE TIME', '95%', '400', '0', '#e90', null, null, null, null, null, 'medium', null, null, 2, now(), now());
			INSERT INTO pagecontents VALUES (24,2,5, 'jpcckidsupperoomlocation', 'JPCC Kids (Baby - Grad 6):', '110%', '800', '0', '#444', null, '10:30 | 13:00', '110%', '300', '0', '#444', null, null, null, null, null, 'small', null, null, 3, now(), now());
			INSERT INTO pagecontents VALUES (25,2,1, 'locationlocation2', null, null, null, '0', null, null, 'LOCATION & DIRECTIONS', '95%', '400', '0', '#e90', null, null, null, null, null, 'medium', null, null, 6, now(), now());
			INSERT INTO pagecontents VALUES (26,2,5, 'location2location3', null, null, null, '0', null, null, 'Annex Building 10th-12th floor<br>Wisma Nusantara Complex<br>Jl. M. H. Thamrin No. 59<br>Jakarta 10350', '110%', '300', '0', '#444', null, null, null, null, null, 'small', null, null, 7, now(), now());


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
