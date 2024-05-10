<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Arama Sonuçları</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
.urun-listesi {
    display: flex;
    flex-wrap: wrap;
}

.urun {
    width: 25%; /* Her ürünün genişliği */
    padding: 10px;
    box-sizing: border-box; /* Padding'in genişlik hesabına dahil edilmesi */
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
        echo "<td class='menuu'><a href='giris-kayit.php'>";
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
      


            
        ?>
         <div class="orta">
        
        <div class="ortaust">
           <table style="border: 4px solid rgb(255, 255, 255); width: 100%; height:100%;border-radius: 12px;">
               <tr><td style="vertical-align: top; margin:12px; padding-top: 20px; padding-left: 10px;">
               </td>
                    <td class="sagahizala">
                     <table class="ortaustust" >
                          

<h1>Arama Sonuçları</h1>
    <?php
    include 'php/conn.php';

    if (isset($_GET['arama'])) {
        $aranan = $_GET['arama'];
    
        // Veritabanında arama yapacak SQL sorgusu
        $sqlarama = "SELECT * FROM urun WHERE urunaciklama LIKE '%$aranan%'"; // Örnek bir sorgu, urunler tablosunda arama yapıyor
    
        // SQL sorgusunu çalıştır
        $result = $conn->query($sqlarama);
    
        // Sonuçları ekrana yazdır
        if ($result->num_rows > 0) {
            //echo "<div class='urun-listesi'>"; // Döngüden önce bir div başlatıyoruz
            echo "<tr>";
            $counter = 0; // Sayaç değişkeni, her 4 üründe bir alt satıra geçmek için kullanacağız
            while($row = $result->fetch_assoc()) {
                $link = $row['urunid'];
                $urunphoto = "urun" . $link . "photo";
                echo "<td width='300' height='450'>";
                echo "<a href='urunler/urun.php?urun=$link'><img src='urunler/urun/$urunphoto/" . $row["urunurl"]. ".jpg' width='280px' height='400px'>";
                echo "<p style='font-size: 18px; color: black;'>Fiyat: " . $row["urunadi"]. "</p>";
                echo "<p style='color: red; font-size: 30px; padding-left: 20px;'>Fiyat: " . $row["fiyati"]. "</p>";
                // Diğer bilgileri de buraya ekleyebilirsiniz
                //echo "</div>";
                echo "</a></td>";
                $counter++;
                if ($counter % 4 == 0) { // Her 4 üründe bir alt satıra geçmek için kontrol
                    echo "</tr><tr>";
                }
            }
            echo "</div>"; // Döngü bittiğinde div'i kapatıyoruz
        } else {
            echo "Üzgünüz, aradığınız ürün bulunamadı.";
        }
    }
    ?>

    
   </tr>
   </table>
</body>
</html>