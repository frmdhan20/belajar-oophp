<?php 
class Produk{
	public $brand,
		   $merk,
		   $noSeri,
		   $harga,
		   $ramInternal,
		   $processor,
		   $tipe;

		public function __construct( $brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0, $ramInternal= "ramInternal", $processor = "processor", $tipe ){
			$this ->brand   	= $brand;
			$this ->merk    	= $merk;
			$this ->noSeri  	= $noSeri;
			$this ->harga   	= $harga;
			$this ->ramInternal = $ramInternal;
			$this ->processor 	= $processor;
			$this ->tipe 		= $tipe;
		}

	// ini method
	public function getLabel(){
		return "$this->brand, $this->merk, $this->noSeri";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : | {$this->getLabel()} (Rp. {$this->harga})";
			if( $this->tipe == "HP" ){
				$str .= " - {$this->ramInternal} GB.";
			}else if ( $this->tipe == "Laptop" ){
				$str .= " ~ {$this->processor}";
			}

		return $str;
	}
}

// class kedua
class cetakInfoProduk{
	public function cetak( Produk $produk ){
		$str = "{$produk->brand} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


// menginstansiasi class
$produk1 = new Produk("VIVO", "V11 Pro", "V1000", 4000000, "4/64", "GB", "HP");
$produk2 = new Produk("DELL", "Latitude", "E4300", 2000000, "Intel", "Intel Core I7", "Laptop");

// menampilkan ke browser
echo $produk1->getInfoLengkap()."<br>";
echo $produk2->getInfoLengkap()."<br>";