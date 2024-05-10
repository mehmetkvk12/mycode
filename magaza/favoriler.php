<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Favoriler</title>
    <style>
        .aramaa {
             position: relative;
             display: inline-block;
        }
#icoresim img:hover{
    filter: hue-rotate(90deg);
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
<!-- Ürün Resim Değişimi -->
<script>
  function changeImage(imageUrl) {
    document.getElementById('mainImage').src = imageUrl;
  }
</script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
 
</head>
<body>
    
    <div class="menu">
        <table width="100%" height="100%" class="usttable">
            <tr>
            <td><a href="anasayfa.php"><img src="resim/markaadi.png" style="margin: auto;"></a></td>
            <td>
                <form class="aramaa" action="/arama" method="get">
                    <button class="araicon"><img src="ico/search.png"></button>
                      <input class="ara" type="search" placeholder="Ürün Arayın" maxlength="60" value>
                      
                        
                </form>
            </td>
            <td class="menuu"><a href="#"><img src="ico/like.png" id="icoresim" >Favoriler</a></td>
            <td class="menuu"><a href="#">Sepetim</a></td>
            <td class="menuu"><a href="giris-kayit.php">
                <div class="menu-item">Hesabım</div>
            </a>
            </td>
            </tr>
            
            </table>
    </div>
    <div class="orta">
        
         <div class="ortaust">
            <table style="color: white; width: 100%; height:100%;border-radius: 12px; margin-top: 70px;">
                <tr>
                    <td class="sagahizala">
                    
                    <table class="ortaustust" >
                        
                    <?php
session_start();

// Kullanıcı oturum açmış mı kontrol edelim
if(isset($_SESSION['eposta'])) {
    // Kullanıcı oturum açmışsa, favori ürünleri çekelim
    include 'php/conn.php'; // Veritabanı bağlantısı

    $emaill = $_SESSION['eposta']; // Kullanıcının e-posta adresini alalım

    // Favori ürünleri veritabanından çekelim
    $sqlal = "SELECT urun.urunadi, urun.fiyati, urun.urunurl, urun.urunid
            FROM favoriler
            INNER JOIN urun ON favoriler.urunid = urun.urunid
            WHERE favoriler.email = '$emaill'";

    $result = $conn->query($sqlal);

    // Favori ürünleri var mı kontrol edelim
    if ($result->num_rows > 0) {
        // Favori ürünleri tablo şeklinde gösterelim
        
        $counter = 0;
        while($row = $result->fetch_assoc()) {
            $link = $row['urunid'];
                $id= $link;
                $urunphoto="urun" . $id . "photo";
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
                }  }
} else {
    // Kullanıcı oturum açmamışsa, favori ürünleri gösterme
    echo "Lütfen önce giriş yapınız.";
}
?>

                                                         
                                   
                    </table>
                        
                    </td>
                    <td>
                        

                      
                     
                    </td>
                </tr>
            </table>

        </div>

</div>
</body>
</html>