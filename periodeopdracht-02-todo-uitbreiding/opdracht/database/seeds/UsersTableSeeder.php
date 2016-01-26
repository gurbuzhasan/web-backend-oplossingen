<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
		
		$users = array(
			
			array(
				
				'email' => 'hello',
				'password' => Hash::make("world")
			),
			array(
				
				'email' => 'world',
				'password' => Hash::make("hello")
			),
		);
		
		DB::table('users')->insert($users);
    }
}
