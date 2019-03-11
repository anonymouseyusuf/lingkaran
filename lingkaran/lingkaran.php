<html>
<h3>Hitung Lingkaran</h3>
<p>Masukan Jari-jari</p>
<form action="lingkaran.php" method="post">
	jari-jari :<input type="text" name="jari"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
<?php
if(isset($_POST['submit'])){
	$jari=$_POST['jari'];
	$luas_lingkaran= 3.14 *$jari*$jari;//Menghitung luas segitiga
	echo "Luas lingkaran dengan jari-jari : $jari <br>";
	echo "yaitu $luas_lingkaran";
}
?>
</html>