<?php

trait OwnerTrait{
	public function owner()
	{
		return 'fetched the owner';
	}
}

class Thread {

	use OwnerTrait;


	/*public function owner()
	{
		# code...
	}*/
}


class Comment {

	use OwnerTrait;

	/*public function owner()
	{
		# code...
	}*/
}


//var_dump((new Thread)->owner());
var_dump((new Comment)->owner());
whats-a-trait
