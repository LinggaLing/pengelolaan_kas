<?php
include 'koneksi.php';
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$query=("INSERT INTO tb_user (nama,username,password) VALUES ('$nama','$username','$password')");
$hasil=mysqli_query($koneksi, $query);
?>
		<script>
		alert('Pendaftaran Berhasil !!');
		document.location.href = 'login.php';
		</script>