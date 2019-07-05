<!--	Oleh  : Burhan Arif Muthohar
		NIM   : 1800018043
		Kelas : A
-->
<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" type="text/css" href="back.css">
	
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
	<div class="three">
			<form name="forml" method="post" action="posting.php">
					<table align="center">
					<tr>
						<td align="left">Nama</td>
						<td align="left"><input type="text" name="nama" id="nama"></td>
					</tr>
					<tr>
						<td align="left">Alamat</td>
						<td align="left"><input type="text" name="alamat" id="alamat"></td>
					</tr>
					<tr>
						<td align="left">Email</td>
						<td align="left"><input type="text" name="email" id="email"></td>
					</tr>
					<tr>
						<td align="left">Status</td>
						<br>
						<td align="left"><select name="status" id="status">
							<option>Menikah</option>
							<option>Single</option>
						</select></td>
					</tr>
					<tr>
						<br>
						<td align="left">Komentar</td>
						<br>
						<td align="left"><textarea name="komentar" id="komentar"></textarea></td>
					</tr>
					<tr>
						<br>
						<td><input type="submit" name="Submit" value="Kirim" onclick="validasi()"><input type="reset" name="Submit2" value="Batal"></td>
					</tr>
					</table>
				</form>
	</div>
	<div class="four">
		<font id="copy"></font>
	</div>
	<script type="text/javascript" src="back.js"></script>
</body>
	
</html>