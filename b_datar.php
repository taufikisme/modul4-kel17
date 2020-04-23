<?php
	declare(strict_types = 1);
	class b_datar{
		public function persegi(int $jumlah, string $warna){
			for ($i=0; $i<$jumlah; $i++){
				echo "<div id='persegi' style='background:$warna;'></div>";
				echo "&emsp;";
			}
		}

		public function lingkaran(int $jumlah, string $warna){
			for ($i=0; $i<$jumlah; $i++){
				echo "<div id='lingkaran' style='background:$warna;'></div>";
				echo "&emsp;";
			}
		}

		public function segitiga(int $jumlah, string $warna){
			for ($i=0; $i<$jumlah; $i++){
				echo "<div id='segitiga' style='border-bottom: 200px solid $warna;'></div>";
				echo "&emsp;";
			}
		}
	}
?>