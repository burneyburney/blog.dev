<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('posts')->delete();
		DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

// thats why we do php artisan migrate:refresh
// runs downs in order, runs ups in order
