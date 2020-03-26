<?php

use Illuminate\Database\Seeder;

class PagetypesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('PagetypesTableSeeder');
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (1, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (2, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (3, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (4, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (5, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (6, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (7, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (8, 'basic', 0)");
		DB::unprepared("INSERT INTO pagetypes(pagetypegroupID, name, favourite) VALUES (8, 'black n white', 0)");
		
		$this->command->info('Pagetypes table seeded!');
	}
}
