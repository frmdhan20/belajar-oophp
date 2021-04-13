<?php

define('NAMA', 'M.Fajar Ramadhan');
echo NAMA. "<br>";

const UMUR = 20;
echo UMUR . " Tahun<hr>";


class Coba{
	const NAMA = 'Joko Yulianto';
}

echo Coba::NAMA. "<hr>";

echo __FILE__. "<br>";

function coba(){
	return __FUNCTION__;
}
echo coba(). "<br>";

class ATP{
	public $amik = __CLASS__;
}

// instansiasi
$obj = new ATP;
echo $obj->amik;