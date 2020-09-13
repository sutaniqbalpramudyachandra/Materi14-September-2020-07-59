<?php 

class hewan{
	public $jumlah_kaki, $jenis_hewan, $bisa_terbang, $bersuara ;

	public function cetakjenishewan(){
		return $this->jenis_hewan;
	}
}


$milo = new hewan;
$milo -> jumlah_kaki = "4" ;
$milo -> jenis_hewan = "kucing" ;
$milo -> bisa_terbang = "tidak" ;
$milo -> bersuara = "meowww" ;

echo "Milo adalah jenis hewan ".$milo-> cetakjenishewan() ;
echo "<br>";