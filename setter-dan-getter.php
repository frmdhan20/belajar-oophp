<?php 
class Produk{
	private $brand,
		   $merk,
		   $noSeri,
		   $harga,
		   $diskon = 0;

	// class => public, private & protected

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
echo $produk2->getInfoProduk()."<br><hr>";

$produk2->setDiskon(21); //diskon 21%
echo $produk2->getHarga()."<hr>";

$produk1->setBrand("Brand Baru Infinix");
echo $produk1->getBrand()."<br>";

$produk2->setMerk("MacBook");
echo $produk2->getMerk();