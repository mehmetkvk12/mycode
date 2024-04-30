<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kayit";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}


$eposta = $_POST['email'];
$sifre = $_POST['password'];



$sql = "SELECT * FROM kayit WHERE email='$eposta' AND password='$sifre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $isimal=$result->fetch_assoc();
 // echo "<script>alert('Giriş Başarılı oldu. Hoş Geldiniz $isimal[adsoyad]'); window.location.href='../anasayfa.html'</script>";
  echo "<script>window.location.href='../anasayfa.php'</script>";
} else {

  echo "<script>alert('Giriş Başarılı olamadı'); window.location.href='../giris-kayit.php'</script>";
  


}

?>