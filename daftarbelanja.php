<?php 
session_start();
$nama = $_POST['nama'] ;
$password = $_POST['password'];

$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];
$_SESSION['iduser'] = 1234;

if(isset($_GET['ancur'])){
	session_destroy();
	header("Location: login.php");
}

$data = array(
			array( 
				"nama" =>"Rahmi" ,
				"password" =>"4567"),
			array(  
				"nama" =>"Shinta",
				"password"=>"9875"
				),
			array( 
				"nama" =>"Hesti",
				"password"=>"4563"),
		);
if ($nama == $data[1]["nama"] && $password == $data[1]['password']||
	$nama == $data[2]["nama"] && $password == $data[2]['password']||
	$nama == $data[0]["nama"] && $password == $data[0]['password']) {
	echo "<center><h1>Belanja Online</h1></center>";
}else{
	header("location: login.php");
}
 ?>
	<form action="hasil.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
  		<td>Daftar Belanjaan :</td>
  		<td><input type="checkbox" name="belanjaan[]" value="Meja">Meja<br></td>
  	</tr>
  	<tr>
  		<td></td>
  		<td colspan="2"><input type="checkbox" name="belanjaan[]" value="Tas">Tas<br></td>
    </tr>
    <tr>
  		<td></td>
  		<td><input type="checkbox" name="belanjaan[]" value="Sepatu">Sepatu</td>
    </tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr>
    	<td>Jenis Pengiriman : </td>
    	<td><input type="radio" name="pengiriman" value="JNE">JNE<br></td>
    <tr>
    	<td></td>
    	<td><input type="radio" name="pengiriman" value="Gojek"> Gojek</td>
    </tr>
    <tr>	
  		<td></td>
  		<td><input type="radio" name="pengiriman" value="J&T Express"> J&T Express</td>
  	</tr>
  	<tr>
    	<td>Alamat	: </td>
    	<td><input type="text" name="alamat"></td>
    </tr>
</table>
<br>
<input type="submit" style="width: 200px" name="" value="Kirim">
</form>
<?php 

 ?>