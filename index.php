<?php 

class hewan{
	public $jumlah_kaki, $jenis_hewan, $bisa_terbang, $bersuara ;

	public function cetakjenishewan(){
		return "Milo adalah jenis hewan ".$this-> jenis_hewan;
	}
	public function cetakjumlahkaki(){
		return $this->jumlah_kaki;
	}
	public function cetakterbang(){
		return $this->bisa_terbang;
	}
	public function cetaksuaranya(){
		return $this->bersuara;
	}

}


$milo = new hewan;
$milo -> jumlah_kaki = "4" ;
$milo -> jenis_hewan = "kucing" ;
$milo -> bisa_terbang = "tidak bisa terbang" ;
$milo -> bersuara = "meowww" ;

echo $milo-> cetakjenishewan() ;
echo "<br>";
echo "Punya kaki sebanyak ".$milo-> cetakjumlahkaki();
echo "<br>";
echo $milo-> cetakterbang();
echo "<br>";
echo "Suaranya : ".$milo-> cetaksuaranya();