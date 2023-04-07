<?php

$kullanici_adi="mehmet";
$sifree="23";
$mail="mhmhmhmhm";
$host="localhost";
$veritabani="egitimm";
$kullanici="root";
$sifre="";

$baglan=@mysqli_connect($host,$kullanici,$sifre,$veritabani) or die("Bağlanamadı");


$ekle= "INSERT INTO egitim ( kullanici_adi,sifre,mail )  VALUES ('".$kullanici_adi."','".$sifree."','".$mail."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Veritabanına veri eklendi";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}
?>