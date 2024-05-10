
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ana Sayfa</title>
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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    
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
      


            
        ?>
    
            
				
            
            
    
    <div class="orta">
        
         <div class="ortaust">
            <table style="border: 4px solid rgb(255, 255, 255); width: 100%; height:100%;border-radius: 12px;">
                <tr><td style="vertical-align: top; margin:12px; padding-top: 20px; padding-left: 10px;">
                    
                <div class="filtreler">
        <form action="filtrele.php" method="post">
    <div class="filtre-grup">
        <h3>Cinsiyet</h3>
        <div>
            <label for="erkek"><input type="checkbox" id="e" name="cinsiyet[e]" value="Erkek"> Erkek</label><br>
            <label for="kadin"><input type="checkbox" id="k" name="cinsiyet[k]" value="Kadın"> Kadın</label>
        </div>
    </div>

    <div class="filtre-grup">
        <h3>Beden</h3>
        <div>   
            <label for="xs"><input type="checkbox" id="xs" name="beden[]" value="XS"> XS</label><br>
            <label for="s"><input type="checkbox" id="s" name="beden[]" value="S"> S</label><br>
            <label for="m"><input type="checkbox" id="m" name="beden[]" value="M"> M</label><br>
            <label for="l"><input type="checkbox" id="l" name="beden[]" value="L"> L</label><br>
            <label for="xl"><input type="checkbox" id="xl" name="beden[]" value="XL"> XL</label><br>
            <label for="xxl"><input type="checkbox" id="xxl" name="beden[]" value="XXL"> XXL</label>
        </div>
    </div>

    <div class="filtre-grup">
        <h3>Fiyat Aralığı</h3>
        <div>
        <input type="text" class="fiyat" placeholder="En Az" name="en_az">
        <span>-</span>
        <input type="text" class="fiyat" placeholder="En Çok" name="en_cok">

            
        </div>
        <input type="submit" value="Filtrele">
        </form>
    </div>
</div>

                     
                    </td>
                    <td class="sagahizala">
                     <table class="ortaustust" >
                          <tr >
                              
                          <?php
                          session_start();
                                
                                include 'php/conn.php';
                                // Veritabanından ürünleri al
                    $urunler = array();
                    for ($i = 1; $i <= 12; $i++) {
                        $urunlerial = "SELECT * FROM urun WHERE urunid = $i";
                        $result = $conn->query($urunlerial);
                    
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $urunler[$i] = $row;
                        } else {
                            echo "Ürün bulunamadı.";
                        }
                    }

                        // Ürünleri tablo içinde döngüyle yazdırma
                       // echo "<tr>";
                        foreach ($urunler as $urunid => $urun) {
                            echo "<td>"; 
                            echo "<a href='urunler/urun.php?urun=$urunid'><img src='urunler/urun/urun{$urunid}photo/{$urun['urunurl']}.jpg' width='280px' height='400px'>";
                            echo "<p style='font-size: 18px; color: black;'>{$urun['urunadi']}</p>";
                            echo "<p style='color: red; font-size: 30px; padding-left: 20px;'>{$urun['fiyati']} TL</p>";
                            echo "</a></td>";
                            if ($urunid % 4 == 0) { // Her 4 üründen sonra yeni satıra geç
                                echo "</tr><tr>"; // Satır sonu ve yeni satır başlangıcı
                            }
                        }
                        echo "</tr>"; // Son satırın sonu
                        echo "</table>";



                                ?>
                                                            
                </tr>
            </table>

        </div>

</div>
</body>
</html>
