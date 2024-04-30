
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


    </style>
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
            <td class="menuu"><a href="favoriler.php"><img src="ico/likee.jpg" id="icoresim" >Favoriler</a></td>
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
            <table style="border: 4px solid rgb(255, 255, 255); width: 100%; height:100%;border-radius: 12px;">
                <tr><td style="vertical-align: top; margin:12px; padding-top: 20px; padding-left: 10px;">
                    
                    <div style=" display: flex; flex-direction: column; flex-wrap: wrap; position:relative; box-shadow: none; border-radius: 3px; font-size: 20px; width:150px;height:500px;overflow:auto;">
                        <div >
                            Cinsiyet<hr>
                        </div>
                        <div>
                            <input type="checkbox"><label class="filtre">Erkek</label><br>
                            <input type="checkbox"><label class="filtre">Kadın</label>
                        </div>

                        <div style="padding-top: 20px;">
                           Beden <hr>
                        </div>
                        <div>   
                            <input type="checkbox" ><label class="filtre">XS</label><br>
                            <input type="checkbox"><label class="filtre" >S</label><br>
                            <input type="checkbox"><label class="filtre">M</label><br>
                            <input type="checkbox"><label class="filtre">L</label><br>
                            <input type="checkbox"><label class="filtre">XL</label><br>
                            <input type="checkbox"><label class="filtre">XXL</label>
                        </div>

                        <div style="padding-top: 20px;">
                            Fiyat Aralığı<hr>
                        </div>
                        <div>
                            <input type="number" placeholder="Min. Fiyat" >
                            <input type="number" placeholder="Max. Fiyat" >
                            <button>Tamam</button>
                        </div>  
                     </div>
                     
                    </td>
                    <td class="sagahizala">
                     <table>
                          <tr class="ortaustust">
                              
                                <?php
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "kayit";
    
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                $conn->set_charset("utf8mb4");


                                
                                $urunbir = "SELECT * FROM urun WHERE urunid = 1";
                                $uruniki="SELECT * FROM urun WHERE urunid = 2";
                                $urunuc="SELECT * FROM urun WHERE urunid = 3";

                                
                           $result = $conn->query($urunbir);
                           
                           if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
                                   $urunbiradi= $row["urunadi"];
                                   $urunbirfiyati= $row["fiyati"];
                                   $urunbirurl = $row["urunurl"];
                                   
                               }
                           } else {
                               echo "Ürün bulunamadı.";
                           }

                           $result = $conn->query($uruniki);
                           
                           if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
                                   $urunikiadi= $row["urunadi"];
                                   $urunikifiyati= $row["fiyati"];
                                   $urunikiurl = $row["urunurl"];
                                   
                               }
                           } else {
                               echo "Ürün bulunamadı.";
                           }
                           $result = $conn->query($urunuc);
                           
                           if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
                                   $urunucadi= $row["urunadi"];
                                   $urunucfiyati= $row["fiyati"];
                                   $urunucurl = $row["urunurl"];
                                   
                               }
                           } else {
                               echo "Ürün bulunamadı.";
                           }
                                echo "<td>";
                                echo " <a href='urunler/urun.php?link_number=1' value='urunid1' ><img src='urunler\urun\urun1photo/$urunbirurl.jpg' width='280px' height='400px' >";
                                echo "<p style='font-size: 18px; color: black;'>$urunbiradi</p>";
                                echo "<p style='color: red; font-size: 30px; padding-left: 20px;'>$urunbirfiyati TL</p></a>";
                                echo "</td>";
                                echo "<td>";
                                echo "<a href='urunler/urun.php' value='urunid2' name='baskitshirt'><img src='urunler\urun\urun2photo/$urunikiurl.jpg' width='280px' height='400px' >";
                                echo " <p style='font-size: 18px; color: black;'>$urunikiadi</p>";
                                echo "<p style='color: red; font-size: 30px; padding-left: 20px;'>$urunikifiyati TL</p></a>";
                                echo "</td>";
                                echo "<td>";
                                echo "<a href='urunler/urun.php' value='urunid3' name='baskitshirt'><img src='urunler\urun\urun3photo/$urunucurl.jpg' width='280px' height='400px' >";
                                echo " <p style='font-size: 18px; color: black;'>$urunucadi</p>";
                                echo "<p style='color: red; font-size: 30px; padding-left: 20px;'>$urunucfiyati TL</p></a>";
                                echo "</td>";
                                echo "<td>";

                                
                                ?>
                                
                            
                            
                              <td><a href="urunler/urun.php"><img src="resim/urun.png" >
                                <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                            </td>
                         </tr>
                    </table>
                   <table  >
                                <tr class="ortaustust">
                                    <td>
                                        <a href="urunler/urun.php"><img src="resim/urun.png" >
                                    <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                    <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                    </td>
                                      <td><a href="urunler/urun.php"><img src="resim/urun.png" >
                                        <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                        <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                    </td>
                                    <td>
                                        <a href="urunler/urun.php"><img src="resim/urun.png" >
                                    <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                    <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                    </td>
                                      <td><a href="urunler/urun.php"><img src="resim/urun.png" >
                                        <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                        <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                    </td>
                                </tr>
                                
                        </table>
                        <table  >
                              <tr class="ortaustust">
                                <td>
                                    <a href="urunler/urun.php"><img src="resim/urun.png" >
                                <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                </td>
                                  <td><a href="urunler/urun.php"><img src="resim/urun.png" >
                                    <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                    <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                </td>
                                <td>
                                    <a href="urunler/urun.php"><img src="resim/urun.png" >
                                <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                </td>
                                  <td><a href="urunler/urun.php"><img src="resim/urun.png" >
                                    <p style="font-size: 18px; color: black;">Erkek Lacivert %100 Pamuk Slim Fit Dar Kesim Bisiklet Yaka Kısa Kollu Tişört</p>
                                    <p style="color: red; font-size: 30px; padding-left: 20px;">___TL</p></a>
                                </td>
                                </tr>
                                
                            </table>
                    </td>
                </tr>
            </table>

        </div>

</div>
</body>
</html>