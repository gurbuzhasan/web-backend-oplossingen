<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


	
	
    public function isDone(){
		
		//zet de bool van de task op true als het false is en omgekeerd, op die manier kan je het besturen via een checkbox
		$this->done = $this->done ? false : true;
		
		
		$this->save();
		
	}
}
