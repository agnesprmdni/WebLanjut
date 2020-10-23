<?php namespace App\Controllers;

class Helloworld extends BaseController {

	public function index($name, $npm)
	{
		//echo $this->name;
		echo $name . "<br>";
		echo $npm . "<br>";
		//echo "Hello Agnes";
	}
	public function show()
	{
		echo "Agnes Pramudani\n";
		echo "185051004";
	}
}