<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use WesternCountry\Models;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete(); // Delete all records 

		User::create(['name' => 'trever', 'password' => 'password', 'email' => 'trever@test.com']);
		User::create(['name' => 'charie', 'password' => 'charie1', 'email' => 'charie@test.com']);
		User::create(['name' => 'macoy', 'password' => 'password', 'email' => 'macoy@test.com']);
		User::create(['name' => 'test', 'password' => 'password', 'email' => 'test@test.com']);
	}

}
