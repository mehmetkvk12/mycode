<?php
session_start();
include '../php/conn.php';

if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}


$eposta = $_POST['email'];
$sifre = $_POST['password'];
$_SESSION['eposta'] = $eposta;
$sql = "SELECT * FROM kayit WHERE email='$eposta' AND password='$sifre'";



$result = $conn->query($sql);

if ($result->num_rows >0) {
  $isimal=$result->fetch_assoc();
  
 // header("Location: ../anasayfa.php");

  //$geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
  //echo "<script>document.location.href=\"$geldigi_sayfa\"</script>"; 

  if(isset($_SERVER['HTTP_REFERER'])) {
    //$previous = $_SERVER['HTTP_REFERER'];
    header('Location:../anasayfa.php' );
exit;
}
} else {

  echo '<div id="hataMesaji">Kullanıcı adı veya şifre hatalı.</div>';


}
//$conn->close();
?>
