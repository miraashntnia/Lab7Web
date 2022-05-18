
<!DOCTYPE html>
<html lang="en">
<head>
<style>
		body{
			background-image:url(ocean.png);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:white;
		}
</style>
<style>     
	label { 
		display: inline-block;
		width: 140px;
	}     
</style>
<body>
	<form style="margin: 40px;" method="post" action="Lab7WebOP.php">
		<fieldset style="margin: 100px 390px;">	
		<font color="white">
			<legend style="text-align: center;"><h2>Form Input Sederhana</h2></legend>
			<br>
			<label>Nama &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label> 
			<input type="text" name="nama"><br>
			<br>
			<label>Tanggal Lahir &emsp;&emsp;&nbsp;&nbsp;:</label> 
			<input type="date" name="tanggal_lahir"><br>
			<br>
			<label>Pekerjaan &emsp;&emsp;&emsp;&emsp;&nbsp;:</label>
			<select name="pekerjaan">
				<option value="inputgaji"> - Pilih Pekerjaan - </option>
				<option value="freelance">Freelance </option>
				<option value="guru">Guru </option>
				<option value="karyawan_swasta">Karyawan Swasta </option>
				<option value="pegawai_negeri">Pegawai Negeri </option>
			</select>
			<br> <br>
			<input style="margin: 10px 200px;" type="submit" name="input" value="Input">
			</font>
		</fieldset>
	</form>
</body>
</html>