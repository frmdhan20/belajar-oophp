<?php 
class Produk{
	public $brand,
		   $merk,
		   $noSeri,
		   $harga;

		public function __construct($brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0){
			$this ->brand   	= $brand;
			$this ->merk    	= $merk;
			$this ->noSeri  	= $noSeri;
			$this ->harga   	= $harga;
		}

	// ini method
	public function getLabel(){
		return "$this->merk, $this->noSeri";
	}

	public function getInfoProduk(){
		$str = "{$this->brand} {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

// class kedua inheritance atau pewarisan ke class Produk
class HP extends Produk{
	public $ramInternal;

	public function __construct( $brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0, $ramInternal = "ramInternal" ){

		parent::__construct( $brand, $merk, $noSeri, $harga );
		$this->ramInternal = $ramInternal;
	}

	public function getInfoProduk(){
		$str = "HP : | ". parent::getInfoProduk() ." - {$this->ramInternal} GB.";
	    return $str; 
	    //parent:: untuk mengmbil properti atau method yang ada di class parentnya
	}
}

// class ketiga inheritance pewarisan ke class Produk
class Laptop extends Produk{
	public $processor;

	public function __construct( $brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0, $processor = "processor" ){

		parent::__construct( $brand, $merk, $noSeri, $harga );
		$this->processor = $processor;
	}

	public function getInfoProduk(){
		$str = "Laptop : | ". parent::getInfoProduk() ." - {$this->
				processor}";
	    return $str;
	}
}

// class keempat
class cetakInfoProduk{
	public function cetak( Produk $produk ){
		$str = "{$produk->brand} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

// menginstansiasi class
$produk1 = new HP("VIVO", "V11 Pro", "V1000", 4000000, "4/64", "GB");
$produk2 = new Laptop("DELL", "Latitude", "E4300", 2000000, "Intel Core I7");

// menampilkan ke browser
echo $produk1->getInfoProduk()."<br>";
echo $produk2->getInfoProduk()."<br>";