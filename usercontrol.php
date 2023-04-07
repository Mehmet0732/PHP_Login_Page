<?php

$kullanici_adi=$_POST['user'];
$sifree=$_POST['password'];
$mail=$_POST['mail'];
$host="localhost";
$veritabani="egitimm";
$kullanici="root";
$sifre="";
//echo $username."-".$password;


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