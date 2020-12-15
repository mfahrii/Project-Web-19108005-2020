<?php  
	include_once("fungsi.php");
	if(isset($_POST["tambah"])){
		if(Add($_POST)>0){
			echo "<script>alert('Data Berhasil Ditambahkan!');window.location.href='show.php';</script>";
		}
		else{
		echo "<script>alert('Data Gagal Dihapus!');window.location.href='show.php';</script>";
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-md">
    			<div class="card">
				  <div class="card-header">
				    Form Data Mahasiswa
				  </div>
				  <div class="card-body">
				    <form method="POST" action="">
				    	<div class="form-group">
						    <label for="nim_mahasiswa">NIM</label>
						    <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa">
  						</div>
  						<div class="form-group">
						    <label for="nama_mahasiswa">Nama Mahasiswa</label>
						    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
  						</div>
  						<div class="form-group">
						    <label for="tempat">Tempat Lahir</label>
						    <input type="text" class="form-control" id="tempat" name="tempat">
  						</div>
  						<div class="form-group">
						    <label for="tanggal_lahir">Tanggal Lahir</label>
						    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
  						</div>
  						<div class="form-group">
						    <label for="id_fakultas">Fakultas</label>
						    <input type="text" class="form-control" id="id_fakultas" name="id_fakultas">
  						</div>
  						<div class="form-group">
						    <label for="id_jurusan">Jurusan</label>
						    <input type="text" class="form-control" id="id_jurusan" name="id_jurusan">
  						</div>
  						<button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
				    </form>
				  </div>
				</div>
    		</div>
    	</div>
    </div>
  </body>
</html>

