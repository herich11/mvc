<?php

class Author
{
	public $author;
	public $age;
	public $city;

	public function __construct($author, $age, $city)
	{

		$this->author = $author;
		$this->age = $age;
		$this->city = $city;
	}
}
