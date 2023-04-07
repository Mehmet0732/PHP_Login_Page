<?php


$kullanici_adi=$_POST['user'];
$sifree=$_POST['password'];

$host="localhost";
$veritabani="egitimm";
$kullanici="root";
$sifre="";
 
session_start();

 $baglan=@mysqli_connect($host,$kullanici,$sifre,$veritabani) or die("Bağlanamadı");
/*
$sql_check ="select * from egitim where kullanici_adi='".$kullanici_adi."' and sifre='".$sifree."' " or die("Kontrol yapılamadı");*/

 
$sql="SELECT * FROM egitim WHERE kullanici_adi='".$kullanici_adi."' and sifre='".$sifree."' ";

$result=mysqli_query($baglan,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);



if(mysqli_num_rows($result) == 1)
{
$_SESSION[‘username’] = $username; // Initializing Session
header("location: anasayfa.php"); // Redirecting To Other Page
}else
{
 echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
}


?>