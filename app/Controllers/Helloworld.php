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
		echo "Selamat Datang di Informasi Kucing!\n";
		echo "Paww!\n";
		echo "by: Agnes Pramudani\n";
		echo "1857051004";
	}
}