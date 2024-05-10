<?php
session_start(); 
include 'php/conn.php';
if(isset($_SESSION['eposta'])) {
    // Oturum açıksa sayfasına yönlendir
    
    if(isset($_POST['favoriekle'])) {
        if(isset($_SESSION['email'])) {
            // User is logged in, proceed with adding to favorites
            $emaill = $_SESSION['bilgial'];
            $urunidd = $_SESSION['urunid'];
            
            $sqlkaydet = "INSERT INTO favoriler (email, urunid) VALUES ('$emaill', '$urunidd')";
            
            if ($conn->query($sqlkaydet) === TRUE) {
                echo "Ürün favorilere eklendi!";
                // Redirect to favorites page after adding to favorites
                header("Location: ../favorilereekle.php");
                exit;
            } else {
                echo "Hata: " . $sqlkaydet . "<br>" . $conn->error;
            }
        } else {
            // User is not logged in, redirect to login page
            echo "Hata";
            exit;
        }
    }
    
    
    if(isset($_POST['sepetekle'])) {
        if(isset($_SESSION['email'])) {
            // User is logged in, proceed with adding to favorites
            $emaill = $_SESSION['bilgial'];
            $urunidd = $_POST[$id];
    
            $sqlkaydet = "INSERT INTO favoriler (email, urunid) VALUES ('$emaill', '$urunidd')";
            
            if ($conn->query($sqlkaydet) === TRUE) {
                echo "Ürün Sepete eklendi!";
                // Redirect to favorites page after adding to favorites
                header("Location: ../sepetim.php");
                exit;
            } else {
                echo "Hata: " . $sqlkaydet . "<br>" . $conn->error;
            }
        } else {
            // User is not logged in, redirect to login page
            echo "Hata";
            exit;
        }
    }


    exit; // Kodun devam etmemesi için çıkış yap
} else {
    // Oturum açık değilse giriş-kayıt sayfasına yönlendir
    header("Location: giris-kayit.php");
    exit; // Kodun devam etmemesi için çıkış yap
}





?>