<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kayit";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}




$adso = $_POST['adsoyad'];
$eposta = $_POST['email'];
$telefon = $_POST['phone'];
$sifre = $_POST['password'];

$sqldeneme="SELECT * FROM kayit WHERE email='$eposta' OR phone='$telefon'";

$sonuc=$conn->query($sqldeneme);

if($sonuc->num_rows > 0){
    // E-posta veya telefon numarası kullanılıyorsa uyarı ver
    echo"Bu e-posta veya telefon numarası zaten kullanımda!";
}
else {
    $sql = "INSERT INTO kayit (adsoyad, email, phone, password)
VALUES ('$adso', '$eposta', '$telefon', '$sifre')";

if ($conn->query($sql) === TRUE) {
    header("Location:../giris-kayit.html");
    } 
else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}
}


?>