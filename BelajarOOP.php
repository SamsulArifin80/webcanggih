<?php
	class orang {
		public $nama;
		private $asal;
		
		function __destruct() {
			echo "Aduh saya koq terakhir";
		}
		
		function kenalkan() {
			return "Hallooo, Aku ". $this->nama . ", peserta Jong Koding dari " . $this->asal . "<br>";
		}
		
		function __construct($namaOrang, $asalOrang) {
			echo "Horeee, saya duluuan muncul...<br>";
			$this->nama = $namaOrang;
			$this->asal = $asalOrang;
		}
	}
	
	$paijo = new orang("Paijo", "Papua");
	$samsul = new orang("Samsul", "Bogor");
	echo $paijo->kenalkan();
	echo $samsul->kenalkan();
	
	
?>