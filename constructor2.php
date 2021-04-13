<?php
class Mahasiswa{
	public $nim,
		   $nama,
		   $umur,
		   $alamat,
		   $jurusan,
		   $semester;

	public function __construct($nim = "nim", $nama = "nama", $umur = "umur", $alamat = "alamat", 
				$jurusan = "jurusan", $semester = 1){
		$this ->nim  	  = $nim;
		$this ->nama 	  = $nama;
		$this ->umur 	  = $umur;
		$this ->alamat 	  = $alamat;
		$this ->jurusan   = $jurusan;
		$this ->semester  = $semester;
	}

	// method
	public function getMahasiswa(){
		return "$this->nim, $this->nama, $this->umur";
	}
}

$mhs1 = new Mahasiswa("19132301", "M.Fajar Ramadhan", "20 Tahun", "Leces", "Sistem Informasi", 4);
$mhs2 = new Mahasiswa("19132302", "Bagus Sadewo", "20 Tahun", "Tongas Wetan", "Sistem Informasi", 4);
$mhs3 = new Mahasiswa("19132303", "Siti Maryam", "19 Tahun", "Malasan Kulon", "Sistem Informasi", 4);

// menampilkan ke browser
echo "Daftar Mahasiswa AMIK Taruna Probolinggo :<br>". $mhs1->getMahasiswa()."<br>";
echo $mhs2->getMahasiswa()."<br>";
echo $mhs3->getMahasiswa();