<?php 

require 'dokter.php';

$id = $_GET["id"];

// query data berdasarkan id

$dft = query("SELECT * FROM pendaftaran WHERE id = $id")[0];


// cek tombol tambah data 
if ( isset($_POST["submit"]) ){


if ( ubah($_POST) > 0) {

  echo "
   <script>
alert('Data Berhasil di Ubah !');
document.location.href = 'coba.php'
   </script>
  ";
  # code...
}

else{
  echo "<script>
      alert('Data Gagal di Ubah !');
      document.location.href = 'coba.php'
    </script>";
  
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">

  .button {
  padding: 15px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #eee;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}


.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  
</style>
<body> 
  <form method="POST" action="">
 <div class="container">
   <div class="row">
 
     <div class="col-lg-6">
    <h3><p style="padding-bottom: 1%;font-weight: bold;" align="center"><span class="spinner-border" role="status">
    </span> Ubah Data Pendaftaran <span class="spinner-border" role="status"></span></p></h3>

      <input type="hidden" name="id" value="<?=$dft["id"]; ?>">

    <table style="box-shadow: 0 10px 45px rgba(0, 0, 0, 0.6);text-align: center;" align="center">

      <form method="POST" action="">
  <tr>
    <td height="50" style="padding: 20px;"> <label for="nama"></label><input type="text" name="nama" id="nama" value="<?= $dft["nama"]; ?>" 
      placeholder=" Nama" autocomplete="off" style="height: 60px;"></td>
    <td style="padding: 20px;"> <label for="email"></label><input type="text" name="email" id="email" placeholder="Email" value="<?= $dft["email"]; ?>" autocomplete="off" style="height: 60px;"></td>
  </tr>
<tr>
    <td height="50" style="padding: 10px;"> <label for="telepon"></label><input type="text" id="telepon" name="telepon" value="<?= $dft["telepon"]; ?>" autocomplete="off" placeholder="No tlp/hp" style="height: 60px;"></td>
    <td style="padding: 20px;">
      <label for="dktr"></label>
<input list="browsers" name="dktr" id="dktr" placeholder="Dokter" style="height: 60px;" value="<?= $dft["dktr"]; ?>">

<datalist id="browsers">
  <option value="Dokter Leni">
  <option value="Dokter Fery">
  <option value="Dokter Irfan">
  <option value="Dokter Fany">
  <option value="Dokter Lisa">
</datalist>
    </td>
  </tr>
  <tr>
     <td style="padding-top: 5px;padding-bottom: 8%;">
      <button class="button" type="submit" name="submit" style="color: #eee;">Ubah!
     </button></td>
   
  </tr>
  </table>
</form>

    </div>
  </div>
</div>
</body>
</html>
