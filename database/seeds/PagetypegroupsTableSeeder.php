<?php

use Illuminate\Database\Seeder;

class PagetypegroupsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('PagetypegroupsTableSeeder');
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('blank')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('about')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('blog')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('contact')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('portfolio')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('services')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('team')");
		DB::unprepared("INSERT INTO pagetypegroups	(name) VALUES ('home')");

		$this->command->info('Pagetypegroups table seeded!');
	}
}
