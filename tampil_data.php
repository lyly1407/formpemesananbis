<html>
<body>
    <h1 id="header">Data Hasil Pemesanan Tiket</h1>
    <table width="80%" border=1>
        <tr>
            <th>Nama</th> <th>No Id</th> <th>No Hp</th> <th>Kelas</th> <th>Jadwal</th> <th>Jumlah Penumpang</th> <th>Jumlah Penumpang Lansia</th> <th>Total Penumpang</th> <th>Total Bayar</th>
        </tr>
        
<?php

    include_once ("db_config.php");
    
    $result = mysqli_query($mysqli, "select * from tiket3");
    while ($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$user_data ['nama']."</td>";
    echo "<td>".$user_data ['noidentitas']."</td>";
    echo "<td>".$user_data ['nohp']."</td>";
    echo "<td>".$user_data ['kelas']."</td>";
    echo "<td>".$user_data ['tanggal']."</td>";
    echo "<td>".$user_data ['penumpang']."</td>";
    echo "<td>".$user_data ['penumpanglan']."</td>";
    echo "<td>".$user_data ['totalpen']."</td>";
    
    $kelas = $user_data['kelas'];
    $penumpang = $user_data['penumpang'];
    $penumpanglan = $user_data['penumpanglan'];
    
 
    if ($kelas == "eksekutif"){
        $harga= 200000;
    }
    else if ($kelas =="bisnis"){
        $harga= 150000;
    }
    else if ($kelas =="ekonomi") { 
        $harga= 100000;
    } 
    else
    {
        $harga = 0;
    }
    
    $totalbiaya = ($harga * $penumpang) + ($harga * $penumpanglan);
    echo "<td>".$totalbiaya."</td>";
    
   }
   
?>
    
</body>

</html>