<!--	Oleh  : Burhan Arif Muthohar
		NIM   : 1800018043
		Kelas : A
-->
<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" type="text/css" href="back.css"> <!-- Memanggil back.css -->
</head>
<body>
	<div class="one">
		<font size="25pt">Pengisian Data Diri</font>
	</div>
	<div class="clock">
		<div class="jam"></div>
		<div class="kunjung">
			<?php
				$filecounter="counter.txt"; //memasukkan counter.txt ke variabel
				$fl=fopen($filecounter,"r+"); //membuka file untuk read/write
				$hit=fread($fl,filesize($filecounter)); //membaca isi file
				echo("<table width=250 align=left border=0 cellspacing=0 cellpadding=9 bgcolor=#6495ED><tr>");
				echo("<td width=250 valign=middle align=left>");
				echo("<font face=verdana size=2 color=black><b>");
				echo("Anda pengunjung yang ke:");
				echo($hit); //menampilkan data $hit
				echo("</b></font>"); 
				echo("</td>"); 
				echo("</tr></table>");
				echo("<br>"); 
				fclose($fl); //menutup file
				$fl=fopen($filecounter,"w+"); //membuka file untuk write
				$hit=$hit+1; //menambahkan nilai hit
				fwrite($fl,$hit,strlen($hit)); //menuliskan $hit ke file
				fclose($fl); //menutup file
				echo("<br>"); 
			?>
		</div>
	</div>
	<div>
	<div class="two">
		<ul>
			<li>
				<a href="home.php">Formulir</a>
			</li>
			<li>
				<a href="lihat.php">Data Diri</a>
			</li>
			<li class="beta">
				<br>
				<form name="formcari" onSubmit="cari()">Google:
				<input name="keyword" size="40" type="text">
				<input type="submit" value="Cari">
				</form>
			</li>
		</ul>
	</div>
	</div>
	<div class="three1">
		<h3 align="center">Data Diri</h3><hr>
			<?php
				$myfile = fopen("datadiri.txt", "r") or die("Tidak bisa membuka file!"); //membuka file
				// menampilkan per baris sampai end-of-file / akhir dari file
				while(!feof($myfile)) {
				echo fgets($myfile) . "<br>";
				}
				fclose($myfile); //menutup file
		?>
	</div>
	<div class="four">
		<font id="copy"></font>
	</div>
	<script type="text/javascript" src="back.js"></script>
</body>
	
</html>