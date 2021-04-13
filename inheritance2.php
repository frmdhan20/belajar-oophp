<?php
class Film{
	public $judul,
		   $produser,
		   $sutradara,
		   $aktor,
		   $tahunTayang;

	public function __construct( $judul = "judul", $produser = "produser", $sutradara = "sutradara",
			$aktor = "aktor", $tahunTayang  = 0){
		$this->judul 	    = $judul;
		$this->produser 	= $produser;
		$this->sutradara 	= $sutradara;
		$this->aktor 		= $aktor;
		$this->tahunTayang  = $tahunTayang;
}

	// method
	public function getLabel(){
		return "$this->produser, $this->sutradara";
	}

	public function getInfoFilm(){
		$flm = "{$this->judul} {$this->getLabel()} {$this->aktor}";
		return $flm;
	}
}

// instansiasi class
$film1 = new film("Dua Garis Biru", "Manoj Punjabi", "Raffi Ahmad", "Angga Aldi Yunanda", 2019);

// menampilkan ke browser
echo "Daftar Rekomendasi Film Indonesia :<br>". $film1->getInfoFilm();