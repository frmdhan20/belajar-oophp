<?php

class ContohStatic{
	public static $angka = 99;

	public static function hallo(){
		return "Hallo Word! " . self::$angka++ . " Kali.";
	}
}

// menampilkan ke browser
echo ContohStatic::$angka."<br>";
echo ContohStatic::hallo()."<hr>";

echo ContohStatic::hallo(). "<hr>";

// class kedua
class Contoh{
	public static $angka = 49;

	public function hallo(){
		return "Hallo Dunia! ". self::$angka++ . " Kali. <br>";
	}
}

// instansiasi object
$obj = new Contoh;
$obj2 = new Contoh;

// menampilan ke browser
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo(). "<hr>";

echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();