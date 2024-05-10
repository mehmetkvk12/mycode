<?php
session_start(); // Oturumu başlat

// Çıkış işlemi
if(isset($_POST['cikis_yap'])) {
    session_destroy(); // Oturumu sonlandır
    header("Location: anasayfa.php"); // Başka bir sayfaya yönlendir
    exit; // Kodun devam etmemesi için çıkış yap
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hesap Bilgileri</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <style>
    .aramaa {
             position: relative;
             display: inline-block;
        }

.araicon {
  position: absolute;
  top: 0;
  left: 0;
  border: none; 
  background: none;
  margin-top: 4px;
}
#icoresim{
    
    padding-right: 5px;
     width: 15px;
     height: 15px;
}

.filtreler {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.filtre-grup {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    width: 150px;
}

.filtre-grup h3 {
    margin: 0;
    padding-bottom: 5px;
    border-bottom: 1px solid #ccc;
}

.filtre-grup div {
    padding-top: 10px;
}

.filtre-grup label {
    display: block;
}

.filtre-grup input[type="checkbox"] {
    margin-right: 5px;
}
</style>
</head>
<body>

<?php
        include 'php/conn.php';

        echo "<div class='menu'>";
        echo "<table width='100%' height='100%' class='usttable'>";
        echo "<tr>";
        echo "<td><a href='anasayfa.php'><img src='resim/markaadi.png' style='margin: auto;'></a></td>";
        echo "<td>";

        echo " <form class='aramaa' action='aramasonuclari.php' method='get'>";
        echo "<button type='submit' class='araicon'><img src='ico/search.png'></button>";
        echo "<input class='ara' type='search' name='arama' placeholder='Ürün Arayın' maxlength='60' value>";
        echo "</form>";


        echo "</td>";
        echo "<td class='menuu'><a href='favoriler.php'><img src='ico/likee.jpg' id='icoresim' >Favoriler</a></td>";
        echo "<td class='menuu'><a href='#'>Sepetim</a></td>";
        echo "<td class='menuu'><a href='oturumacikmi.php'>";
        echo "<div class='menu-item'>";

  
    if (isset($_POST['girisyap'])) {
        $_POST['adsoyad'];
        
    } else {
        echo "Hesabım";
        
    }
  
        echo "</div>";
        echo "</a></td>";
        echo "</tr></table>";
        echo "</div>";
      


            
      


    $epostaa = $_SESSION['eposta'];

    // Veritabanı bağlantısı yapıldığını varsayalım

    // Güvenli bir sorgu yapmak için PDO kullanarak parametreli sorgu yapabilirsiniz
        $sqlemail = "SELECT * FROM kayit WHERE email = $epostaa";
        $result = $conn->query($sqlemail);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
                $adsoyad = $row["adsoyad"];
                $email = $row["email"];
                $phone = $row["phone"];
                // Diğer işlemler burada devam eder...
                
            }
    } 
    else {
         
        echo "Kayıt bulunamadı.";
    }
    ?>

<h2>Hesap Bilgileri</h2>
    <p>Ad Soyad: <?php echo $adsoyad; ?></p>
    <p>E-posta: <?php echo $email; ?></p>
    <p>Telefon: <?php echo $phone; ?></p>

    <form method="post">
        <input type="submit" name="cikis_yap" value="Çıkış Yap">
    </form>
</div>

</body>
</html>
