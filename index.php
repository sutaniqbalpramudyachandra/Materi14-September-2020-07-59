<?php 


class hewan{
	public $jumlah_kaki, $jenis_hewan, $bisa_terbang, $bersuara ;

	 public function cetakjenishewan(){
		return $this->jenis_hewan;
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

class milo extends hewan {
	function bisa_terbang(){
		return "Tidak bisa terbang" ;
	}
	function bersuara (){
		return "Meowwww" ;
	}
}

class buggy extends hewan{
	function bisa_terbang(){
		return "Tidak bisa terbang";
	}
	function bersuara (){
		return "Gukk Gukk";
	}
}

class gagah extends hewan{
	function bisa_terbang(){
		return "Bisa terbang";
	}
	function bersuara (){
		return "Miiippppp";
	}
}

class putih extends hewan{
	function bisa_terbang(){
		return "Bisa terbang";
	}
	function bersuara (){
		return "Kwakkkk";
	}
}

$milo = new milo ;
$milo-> jumlah_kaki = 4;
echo "Milo adalah Kucing <br>";
echo "Punya kaki sebanyak : ".$milo->jumlah_kaki."<br>";
echo $milo->bisa_terbang()."<br>";
echo "Suaranya : ".$milo->bersuara()."<br>";

echo "<hr>" ;

$buggy = new buggy ;
$buggy-> jumlah_kaki = 4 ;
echo "Buggy adalah Anjing <br>";
echo "Punya kaki sebanyak : ".$buggy->jumlah_kaki."<br>" ;
echo $buggy->bisa_terbang()."<br>";
echo "Suaranya : ".$buggy->bersuara()."<br>" ;

echo "<hr>" ;

$gagah = new gagah ;
$gagah-> jumlah_kaki = 2 ;
echo "Gagah adalah Elang <br>";
echo "Punya kaki sebanyak : ".$gagah->jumlah_kaki."<br>" ;
echo $gagah->bisa_terbang()."<br>";
echo "Suaranya : ".$gagah->bersuara()."<br>" ;


echo "<hr>" ;

$putih = new putih ;
$putih-> jumlah_kaki = 2 ;
echo "Putih adalah Angsa <br>";
echo "Punya kaki sebanyak : ".$putih->jumlah_kaki."<br>" ;
echo $putih->bisa_terbang()."<br>";
echo "Suaranya : ".$putih->bersuara()."<br>" ;


