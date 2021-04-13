<?php

class Laptop extends Produk implements infoProduk{
	public $processor;

	public function __construct( $brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0, $processor = "processor" ){

		parent::__construct( $brand, $merk, $noSeri, $harga );
		$this->processor = $processor;
	}

	public function getInfo(){
		$str = "{$this->brand} {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk(){
		$str = "Laptop : | ". $this->getInfo() ." - {$this->processor}";
	    return $str;
	}
}