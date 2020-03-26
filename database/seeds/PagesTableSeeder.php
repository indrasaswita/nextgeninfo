<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('PagesTableSeeder');
		DB::unprepared("INSERT INTO pages(pagetypeID, name, pageheader, subheader, background) VALUES (8, 1, 'home', 'JPCC Next Gen', 'Kids - Youth - Campus', 'image/home-bg.png')");
		DB::unprepared("INSERT INTO pages(pagetypeID, name, pageheader, subheader, background) VALUES (2, 2, 'location', 'Location', 'Visit Us', 'image/home-bg.png')");
		DB::unprepared("INSERT INTO pages(pagetypeID, name, pageheader, subheader, background) VALUES (8, 3, 'small group leader', 'Small Group Leader', null, 'image/home-bg.png')");
		DB::unprepared("INSERT INTO pages(pagetypeID, name, pageheader, subheader, background) VALUES (8, 3, 'large group (creative)', 'Large Group (Creative)', null, 'image/home-bg.png')");
		$this->command->info('Pages table seeded!');

	}
}
