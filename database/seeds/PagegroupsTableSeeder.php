<?php

use Illuminate\Database\Seeder;

class PagegroupsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('PagegroupsTableSeeder');
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Home', 1, 0)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Location', 3, 0)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Serve', 2, 1)");
		DB::unprepared("INSERT INTO pagegroups (name, queue, asalist) VALUES ('Calendar', 1, 0)");
		$this->command->info('Pagegroups table seeded!');
	}
}
