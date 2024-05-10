<?php
session_start(); // Oturumu başlat

// Kullanıcı oturum açık mı kontrol edelim
if(isset($_SESSION['eposta'])) {
    // Oturum açıksa çıkış yap sayfasına yönlendir
    header("Location:cikisyap.php");
    exit; // Kodun devam etmemesi için çıkış yap
} else {
    // Oturum açık değilse giriş-kayıt sayfasına yönlendir
    header("Location: giris-kayit.php");
    exit; // Kodun devam etmemesi için çıkış yap
}
?>
