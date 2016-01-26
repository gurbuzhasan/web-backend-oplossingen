<?php
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->delete();
		
		$todo = array(
			
			array(
				
				'user_id' => 1,
				'name' => 'todo1',
				'done' => false
			),
			
			array(
				
				'user_id' => 1,
				'name' => 'todo2',
				'done' => true
			),
			
			array(
				
				'user_id' => 2,
				'name' => 'todo3',
				'done' => true
			)
		);
		
		DB::table('tasks')->insert($todo);
    }
}
