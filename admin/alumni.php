<?php
// Create database connection using config file
include "koneksi.php";
  include "assets/sidebar.php";
  include "assets/footer.php";
  include "assets/header.php";

// Fetch all users data from database

?>


<div class="container-fluid">
 <div class="alert alert-success" role="alert">
       <i class="fas fa-fw fa-university"></i> Alumni Terdaftar
  </div>

    <table class="table table-striped table-boedered table-hover"> 

    <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Jns_kelamin</th>
            <th>Status</th>
            <th>N.Tetepon</th>
           
            <th colspan="2">AKSI</th>
        </tr>

    <?php

   $query = "SELECT * FROM biodata";
    $hasil = mysqli_query($link, $query);

    if (mysqli_num_rows($hasil) > $no=1){
       while ($data =mysqli_fetch_assoc($hasil)) {
      

        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['jurusan']."</td>";
        echo "<td>".$data['alamat']."</td>";  
        echo "<td>".$data['jns_kelamin']."</td>"; 
        echo "<td>".$data['status']."</td>"; 
        echo "<td>".$data['no_tlp']."</td>"; 
        echo "<td width='25px'>" .'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'."</td>";
        echo "<td width='25px'>" .'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'."</td>"; 
       
       }
    }  
          
    
    ?>
</table>
</div>

