<?php

function Konek(){
	$server = "localhost";
    $username = "root";
    $password = "";
    $db = "fahri_progweb";
    return mysqli_connect($server, $username, $password, $db);
}

function Tampilan($query){
	$connect = konek();
	$result = mysqli_query($connect,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function Add($data){
	$connect = Konek();
	$nim = htmlspecialchars($data["nim_mahasiswa"]);  
	$nama = htmlspecialchars($data["nama_mahasiswa"]);
	$tempat = htmlspecialchars($data["tempat"]);
	$tanggal = htmlspecialchars($data["tanggal_lahir"]);
	$fakultas = htmlspecialchars($data["id_fakultas"]);
	$jurusan = htmlspecialchars($data["id_jurusan"]);

	$query = "INSERT INTO tb_mahasiswa VALUES (null,'$nim','$nama','$tempat','$tanggal','$fakultas','$jurusan')";
	mysqli_query($connect,$query);
	return mysqli_affected_rows($connect);
}

function Delete($id){
	$connect = Konek();
	$query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $id";

	mysqli_query($connect,$query);
	return mysqli_affected_rows($connect);
}

function Update($data){
	$connect = Konek();
	$id_mhs = htmlspecialchars($data["id_mahasiswa"]);
	$nim = htmlspecialchars($data["nim_mahasiswa"]);  
	$nama = htmlspecialchars($data["nama_mahasiswa"]);
	$tempat = htmlspecialchars($data["tempat"]);
	$tanggal = htmlspecialchars($data["tanggal_lahir"]);
	$fakultas = htmlspecialchars($data["id_fakultas"]);
	$jurusan = htmlspecialchars($data["id_jurusan"]);

	$query = "UPDATE tb_mahasiswa SET nim_mahasiswa='$nim' , nama_mahasiswa='$nama' , tempat='$tempat' , tanggal_lahir='$tanggal' , id_fakultas='$fakultas' , id_jurusan='$jurusan' WHERE id_mahasiswa=$id_mhs";
	mysqli_query($connect,$query);
	return mysqli_affected_rows($connect);
}

function search($keywords){
	$query = "SELECT * FROM tb_mahasiswa WHERE nim_mahasiswa LIKE '%$keywords%' OR nama_mahasiswa LIKE '%$keywords%'";
	return Tampilan($query);
}