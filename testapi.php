<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "area51";

$conn = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal");
mysqli_select_db($conn, $name) or die('Database is not found!');



function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$row = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
    return $rows;
}


// function tambah($data) {
// 	global $conn;

//     $nrp = htmlspecialchars($data["nrp"]);
// 	$nama = htmlspecialchars($data["nama"]);
// 	$email = htmlspecialchars($data["email"]);
// 	$jurusan = htmlspecialchars($data["jurusan"]);

// 	// upload gambar

// }


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$email = strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $sql = "SELECT email FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    
      if ( mysqli_fetch_assoc($result) ) {
      	   echo "<script>
      	         alert('email sudah ada')
      	         </script>";
      	    return false;     
      }

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
		        alert('konfirmasi password tidak sesuai!')
		      </script>";
		return false;      
      }


      // enkripsi password
      $password = password_hash($password, PASSWORD_DEFAULT);

      // tambah user bari ke database
      $sql = "INSERT INTO user VALUES(NULL, '$username', '$email', '$password')";
		if (mysqli_query($conn, $sql)) {
			    
			} 

      return mysqli_affected_rows($conn);
      mysql_close($conn);
}

function beli_billing($data)
{
	global $conn;

	$id_user = strtolower(stripslashes($data["id_user"]));
	$username = strtolower(stripslashes($data["username"]));
	$produk = strtolower(stripslashes($data["produk"]));
	$total_bayar = strtolower(stripslashes($data["total_bayar"]));
	$kode_billing = rand();
	$i = 0;
	while ($i < 1 ) {
		$curl = curl_init();
			// echo $total_bayar;
			// $harga = 10054;
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://bukubank.com/api/v1/mutasi?module=ovo&amount={$total_bayar}",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Accept: application/json",
			    "Authorization: IHN49tgpPWhKAaEjbXYf3n0y5svqlz7MrmiLQwD6"
			  ),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			// echo $response;

			$someArray = json_decode($response, true);
			// print_r($someArray);
			if ($someArray["message"] == "Mutasi tidak ditemukan") {
				// echo "tidak ada mutasi";
				beli_billing($data);
				$i = 0;
			} else {

			// echo "<br>";
			// echo $someArray[0]["mutasi_id"];
			// echo "<br>";
			// echo $someArray[0]["amount"];
			// $jumlah = (int) $someArray[0]["amount"];
			// echo '<br>';
				if ($someArray[0]["amount"] == $total_bayar) {
					// echo "sama 10000";
					$sql = "INSERT INTO billing VALUES(NULL, '$id_user', '$username', '$produk', '$kode_billing', '$total_bayar')";
					if (mysqli_query($conn, $sql)) {
						$i = 3;
						echo "<script>
					        alert('Pembayaran Berhasil lihat Kode Biling anda di halaman bawah!')
					      </script>";
						// header("Location: index.php");
					      echo "<script>window.history.back()</script>";
			        	exit;	    
					} 
				} else {
					echo "<script>
					        alert('Anda belum melakukan pembayaran, Mohon pesan ulang untuk atur kode pembayaran!')
					      </script>";
					 // echo "<script>window.history.back()</script>";
					// header("Location: biling.php");
			        	exit;
			        	$i = 0;
				} 
			}



			exit();

	}

	// $curl = curl_init();
	// echo $total_bayar;
	// // $harga = 10054;
	// curl_setopt_array($curl, array(
	//   CURLOPT_URL => "https://bukubank.com/api/v1/mutasi?module=ovo&amount={$total_bayar}",
	//   CURLOPT_RETURNTRANSFER => true,
	//   CURLOPT_ENCODING => "",
	//   CURLOPT_MAXREDIRS => 10,
	//   CURLOPT_TIMEOUT => 0,
	//   CURLOPT_FOLLOWLOCATION => true,
	//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	//   CURLOPT_CUSTOMREQUEST => "GET",
	//   CURLOPT_HTTPHEADER => array(
	//     "Accept: application/json",
	//     "Authorization: IHN49tgpPWhKAaEjbXYf3n0y5svqlz7MrmiLQwD6"
	//   ),
	// ));

	// $response = curl_exec($curl);

	// curl_close($curl);
	// // echo $response;

	// $someArray = json_decode($response, true);
	// print_r($someArray);
	// // echo "<br>";
	// // echo $someArray[0]["mutasi_id"];
	// // echo "<br>";
	// // echo $someArray[0]["amount"];
	// // $jumlah = (int) $someArray[0]["amount"];
	// // echo '<br>';
	// if ($someArray[0]["amount"] == $total_bayar) {
	// 	// echo "sama 10000";
	// 	$sql = "INSERT INTO billing VALUES(NULL, '$id_user', '$username', '$produk', '$kode_billing', '$total_bayar')";
	// 	if (mysqli_query($conn, $sql)) {
	// 		echo "<script>
	// 	        alert('Pembayaran Berhasil lihat Kode Biling anda di halaman bawah!')
	// 	      </script>";
	// 		// header("Location: index.php");
	// 	      echo "<script>window.history.back()</script>";
 //        	exit;	    
	// 	} 
	// } else {
	// 	echo "<script>
	// 	        alert('Anda belum melakukan pembayaran, Mohon pesan ulang untuk atur kode pembayaran!')
	// 	      </script>";
	// 	 // echo "<script>window.history.back()</script>";
	// 	// header("Location: biling.php");
 //        	exit;
	// } 


	// exit();

	
  //     	$sql = "INSERT INTO billing VALUES(NULL, '$id_user', '$username', '$produk', '$kode_billing', '$total_bayar')";
		// if (mysqli_query($conn, $sql)) {
		// 	header("Location: index.php");
  //       	exit;
		// } 

      return mysqli_affected_rows($conn);
      mysql_close($conn);
      // }
}

?>