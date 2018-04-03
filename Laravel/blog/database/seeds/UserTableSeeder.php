<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserTableSeeder extends Seeder
{

	// public function run()
 //    	{
 //    	    DB::table('users')->insert([
 //    	        'name' => 555,
 //    	        'email' => str_random(10).'@gmail.com',
 //    	        'password' => bcrypt('secret')
 //    	    ]);
 //    	}

	/**
	 * 运行数据库填充
	 *
	 * @return void
	 */
	public function run(){
	    factory('App\User', 50)->create()->each(function($u) {
	        $u->posts()->save(factory('App\Post')->make());
	    });
	}



}
