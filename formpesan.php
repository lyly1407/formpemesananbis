<html>
<head>
<link href="style1.css" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tiket Bus</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form>
    <h1 id="header">Form Pembelian</h1>
        <table id="article" width="35%">
<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text"  name="nama"></td>
</tr>

<tr>
    <td>Nomor Identitas Penumpang</td>
    <td>:</td>
    <td><input type="text"  name="noidentitas"></td>
</tr>

<tr>
    <td>Nomor Hp </td>
    <td>:</td>
    <td><input type="number" name="nohp"></td>
</tr>
<tr>
    <td>Jadwal Keberangkatan</td>
    <td>:</td>
    <td><input type="Date"  name="tanggal"></td>
</tr>

<tr>
    <td>Kelas Penumpang</td>
    <td>:</td>
    <td><select  name="kelas">
      <option>Kelas</option>
      <option name="eksekutif" value ="eksekutif"> Eksekutif</option>
     <option name="bisnis" value ="bisnis">Bisnis</option>
      <option name="ekonomi" value ="ekonomi">Ekonomi</option>
      </select></td>
</tr>


<tr>
    <td>Jumlah Penumpang </td>
    <td>:</td>
    <td><input type="number" name="penumpang"></td>
</tr>

<tr>
    <td>Jumlah Penumpang Lansia</td>
    <td>:</td>
    <td><input type="number" name="penumpanglan"></td>
</tr>

<tr>
    <td>Total Penumpang</td>
    <td>:</td>
    <td><input type="number" name="totalpen"></td>
</tr>

</tr>
            <td>Harga Tiket Eksekutif</td>
            <td>:</td>
            <td>Rp.200.000</td>
            </tr>
</tr>
            <td>Harga Bisnis</td>
            <td>:</td>
            <td>Rp.150.000</td>
            </tr>
</tr>
            <td>Harga Tiket Ekonomi</td>
            <td>:</td>
            <td>Rp.100.000</td>
            </tr>
<tr>
            <td><input type="submit" name="add" value="Pesan"> <input type="reset" name="reset" value="Cancel"></td>
            </tr>
</table>
</form>

<?php
        //including the database connection file
        include_once("db_config.php");
        if(isset($_POST['Pesan']));
            if(isset($_GET['nama'])) $nama=$_GET["nama"];
            if(isset($_GET['noidentitas'])) $noidentitas=$_GET["noidentitas"];
            if(isset($_GET['nohp'])) $nohp=$_GET["nohp"];
            if(isset($_GET['tanggal'])) $tanggal=$_GET["tanggal"];
            if(isset($_GET['kelas'])) $kelas=$_GET["kelas"];
            if(isset($_GET['penumpang'])) $penumpang=$_GET["penumpang"];
            if(isset($_GET['penumpanglan'])) $penumpanglan=$_GET["penumpanglan"];
            if(isset($_GET['totalpen'])) $totalpen=$_GET["totalpen"];
            
            $addS = mysqli_query($mysqli, "select 'nama' from tiket3 where nama='$nama' and noidentitas='$noidentitas' and nohp='$nohp' and tanggal='$tanggal' and kelas='$kelas' and penumpang='$penumpang' and penumpanglan='$penumpanglan' and totalpen='$totalpen'");
            $addS = mysqli_query($mysqli, "INSERT INTO tiket3 (nama, noidentitas, nohp, tanggal, kelas, penumpang, penumpanglan, totalpen) VALUES ('$nama', '$noidentitas', '$nohp', '$tanggal', '$kelas', '$penumpang', '$penumpanglan', '$totalpen')");
            echo "Your Services has been added you can close this page and return to main page and reload that page";
             $response = 1;
             echo "File upload status: ".$response;
?>
</form>
    <div id="nav">
        Add your data 
        <a href="tampil_data.php">Lihat Data Pemesanan</a>
    </div>
    
</body>

</html>
