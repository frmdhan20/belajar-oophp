<?php

abstract class Produk{
	protected $brand,
		   $merk,
		   $noSeri,
		   $harga,
		   $diskon = 0;

		public function __construct($brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0){
			$this ->brand   	= $brand;
			$this ->merk    	= $merk;
			$this ->noSeri  	= $noSeri;
			$this ->harga   	= $harga;
		}

		public function setBrand($brand){ // set adalah setter
			if( !is_string($brand) ){ //pengkondisian yang diisi harus string
				throw new Exception("Nama Brand Harus String Ya!");
			}
			$this->brand = $brand;
		}

		public function getBrand(){ // get adalah getter
			return $this->brand;
		}

		public function setMerk($merk){
			$this->merk = $merk;
		}

		public function getMerk(){
			return $this->merk;
		}

		public function setNoSeri($noSeri){
			$this->noSeri = $noSeri;
		}

		public function getNoSeri(){
			return $this->noSeri;
		}

		public function setHarga($harga){
			$this->harga = $harga;
		}

		public function getHarga(){
			return $this->harga - ( $this->harga * $this->diskon /100 );
		}

		public function setDiskon($diskon){
			$this->diskon = $diskon;
		}

		public function getDiskon(){
			return $this->diskon;
		}

	// get => return, set=> tanpa return langsung $this->merk..

	public function getLabel(){
		return "$this->merk, $this->noSeri";
	}

	abstract public function getInfo();
}