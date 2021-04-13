<?php

class HP extends Produk implements infoProduk{
	public $ramInternal;

	public function __construct( $brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0, $ramInternal = "ramInternal" ){

		parent::__construct( $brand, $merk, $noSeri, $harga );
		$this->ramInternal = $ramInternal;
	}

	public function getInfo(){
		$str = "{$this->brand} {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk(){
		$str = "HP : | ". $this->getInfo(). " - {$this->ramInternal} GB.";
	    return $str; 
	}
}