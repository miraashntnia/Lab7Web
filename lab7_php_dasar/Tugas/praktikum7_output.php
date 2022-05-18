<!DOCTYPE html>
<html lang="en">
<link href="style.css" rel="stylesheet" type="text/css">
<style>
	body{
		background-image:url(background.jpg);
		background-size:cover;
		background-attachment: fixed;
	}
	p{
		color:white;
	}
</style>
<style>
	div.a {
		text-align: center;
	}
</style>
<form style="margin: 0px 40px; display: inline-block; width: 1200px; text-align: ;">
<fieldset style="margin: 0;">	
<font color="white">
<div class="pg">
<legend style="text-align: center;"><h2> <font size="20"><u>Data Input</u></font></h2></legend> <br> <br>
<?php
	if ($_POST)
	{
		echo '<b>Nama :</b>' . $_POST['nama'];
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<b>Tanggal Lahir :</b>' . $_POST['tanggal_lahir'];
		echo '<br>';
		echo '<br>';
		echo '<br>';
			$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
			$sekarang = new DateTime("today");
		if ($tanggal_lahir > $sekarang) { 
			$tgl = "0";	
			$bln = "0";
			$thn = "0";
	}
		$tgl = $sekarang->diff($tanggal_lahir)->d;
		$bln = $sekarang->diff($tanggal_lahir)->m;
		$thn = $sekarang->diff($tanggal_lahir)->y;
	echo "<b>Umur : </b>";
	echo $thn." tahun ".$bln." bulan ".$tgl." hari";
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<b>Pekerjaan :</b>' . $_POST['pekerjaan'];
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<b>Gaji :</b>';
		$pekerjaan = $_POST["pekerjaan"];
		if ($pekerjaan=="freelance") {
			$pekerjaanop="Freelance"; }
		else if ($pekerjaan=="guru") {
			$pekerjaanop="Guru"; }
		else if ($pekerjaan=="karyawan_swasta") {
			$pekerjaanop="Karyawan Swasta"; }
		else if ($pekerjaan=="pegawai_negeri") {
			$pekerjaanop="Pegawai Negeri"; }
		else
		echo "";
		if ($pekerjaanop=="Freelance") {
			$gajiakhir="1 - 3 Jt"; }
		else if ($pekerjaanop=="Guru") {
			$gajiakhir="500rb - 2 Jt"; }
		else if ($pekerjaanop=="Karyawan Swasta") {
			$gajiakhir="4 - 6 Jt"; }
		else if ($pekerjaanop=="Pegawai Negeri") {
			$gajiakhir="4 - 6 Jt"; }
		else
			{$gajiakhir=" ";}
		echo " Rp. $gajiakhir";
}
?>
</div>
</font>
</fieldset>
</form>