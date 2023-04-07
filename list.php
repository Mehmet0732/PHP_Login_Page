<?php

$host="localhost";
$veritabani="egitimm";
$kullanici="root";
$sifre="";
 

 $baglan=@mysqli_connect($host,$kullanici,$sifre,$veritabani) or die("Bağlanamadı");

$sec= "select * from egitim";

$sonuc= $baglan->query($sec);

if ($sonuc->num_rows > 0) 
{
  // verileri listeleyebiliriz
  while($cek = $sonuc->fetch_assoc()) 
   {
    $id=$cek["id"];
    $kullanici_adi=$cek["kullanici_adi"];
    $sifre=$cek["sifre"];
    $mail=$cek["mail"];


    echo $kullanici_adi."-".$sifre."-".$mail."<br>";

   }
} 
else 
{
  echo "Sonuç Bulunamadı.";
}

header("Refresh: 10; url=admin.php");

?>