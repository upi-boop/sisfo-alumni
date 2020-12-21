<?php 
	  
        $name = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $jns_kelamin = $_POST['jns_kelamin'];
        $status = $_POST['status'];
        $no_tlp = $_POST['no_tlp'];


          $query =  "INSERT INTO biodata(name,jurusan,email,alamat,jns_kelamin,status,no_tlp) VALUES('$name','$jurusan','$email','$alamat','jns_kelamin','status','no_tlp')";
	



// <?php  
	
// 	if(isset($_POST['Submit'])) {
       
// 		// Defining post variable names 
// 		$nama = $_POST['nama'];
// 		$jurusan = $_POST['jurusan'];
// 		$email = $_POST['email'];
// 		$alamat = $_POST['alamat'];
// 		$jns_kelamin= $_POST['jns_kelamin'];
// 		$status= $_POST['status'];
// 		$no_tlp = $_POST['no_tlp'];
		
include "koneksi.php";



	
// $data = mysqli_query($link,"INSERT INTO biodata (
				
// 				`nama`,
// 				 `jurusan`,
// 				  `email`,
// 				   `alamat`,
// 				    'jns_kelamin',
// 				     `status`,
// 				      'no_tlp')



// 				VALUES (
// 				   '$nama',
// 				    '$jurusan' ,
// 				     '$email',
 					  // '$alamat',
// 				       '$jns_kelamin',
// 				        '$status',
// 				         '$no_tlp'
// 				          )");

//   echo "User added successfully. <a href='grafik.php'>View Users</a>";



?>








