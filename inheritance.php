<?php 
class Produk{
	public $brand,
		   $merk,
		   $noSeri,
		   $harga,
		   $ramInternal,
		   $processor;

		public function __construct( $brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0, $ramInternal= "ramInternal", $processor = "processor" ){
			$this ->brand   	= $brand;
			$this ->merk    	= $merk;
			$this ->noSeri  	= $noSeri;
			$this ->harga   	= $harga;
			$this ->ramInternal = $ramInternal;
			$this ->processor 	= $processor;
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
	public function getInfoProduk(){
		$str = "HP : | {$this->brand} {$this->getLabel()} (Rp. {$this->harga}) - {$this->ramInternal} GB.";
	    return $str;
	}
}

// class ketiga inheritance pewarisan ke class Produk
class Laptop extends Produk{
	public function getInfoProduk(){
		$str = "Laptop : | {$this->brand} {$this->getLabel()} (Rp. {$this->harga}) - {$this->
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
$produk2 = new Laptop("DELL", "Latitude", "E4300", 2000000, "Intel", "Intel Core I7");

// menampilkan ke browser
echo $produk1->getInfoProduk()."<br>";
echo $produk2->getInfoProduk()."<br>";