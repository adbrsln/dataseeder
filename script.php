<?php //script contoh upload dalam db
include 'function.php';
	
for ($i=0; $i < 10; $i++) { //looping 10 data

    $alamat = $faker->unique()->address;
    $emel = $faker->unique()->email;
    $daerah = 3;
    $kumpulan = 1;
    $nama = ucwords($faker->unique()->name);
    $ic = $faker->unique()->isbn13;
    $notel = $faker->unique()->e164PhoneNumber;
    $agama = "Islam";
    $jantina = "Lelaki";
    $namawaris = ucwords($faker->unique()->name);
    $notelwaris = $faker->unique()->e164PhoneNumber;
    $p = md5('user1234');

    //sql syntax insert
    $sql3 = "INSERT INTO pengguna (emel,katalaluan,nama,noKadPengenalan,alamatRumah,noTelefon,agama,jantina,namaWaris,noTelefonWaris,idPangkat,jenisPengguna,statusAkaun) 
    VALUES ('$emel','$p','$nama','$ic','$alamat','$notel','$agama','$jantina','$namawaris','$notelwaris',1,'kelana',0)";
  

}  


echo "</br></br> Seeding Complete";
?>