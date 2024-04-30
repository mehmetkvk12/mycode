
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ürünler</title>
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

    </style>
<!-- Ürün Resim Değişimi -->
<script>
  function changeImage(imageUrl) {
    document.getElementById('mainImage').src = imageUrl;
  }
</script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='urun/css/style.css'>
 
</head>
<body>
    
    <div class="menu">
        <table width="100%" height="100%" class="usttable">
            <tr>
            <td><a href="..\anasayfa.php"><img src="urun/resim/markaadi.png" style="margin: auto;"></a></td>
            <td>
                <form class="aramaa" action="/arama" method="get">
                    <button class="araicon"><img src="urun/ico/search.png"></button>
                      <input class="ara" type="search" placeholder="Ürün Arayın" maxlength="60" value>
                      
                        
                </form>
            </td>
            <td class="menuu"><a href="../favoriler.php"><img src="urun/ico/like.png" id="icoresim" >Favoriler</a></td>
            <td class="menuu"><a href="#">Sepetim</a></td>
            <td class="menuu"><a href="../giris-kayit.php">
                <div class="menu-item">Hesabım</div>
            </a>
            </td>
            </tr>
            
            </table>
    </div>

    <div class="orta">
        
         
            <table style="color: white; width: 100%; height:100%;border-radius: 12px; margin-top: 35px;">
                <tr>
                    
                    
                        <?php

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "kayit";

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $conn->set_charset("utf8mb4");

                            

                            
                               
                               
                            
                               $id=1;
                            
                            $urunphoto="urun" . $id . "photo";
                            $sql = "SELECT * FROM urun WHERE urunid = $id";


                            $result = $conn->query($sql);
                           
                           if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
                                $urunadi=$row["urunadi"] ;
                                $urunfiyati=$row["fiyati"];
                                $urunurl=$row["urunurl"];
                                   
                               }
                           } else {
                               echo "Ürün bulunamadı.";
                           }
                            

                          
                            echo "<td class='ortala'>";
                            echo "<div  class='resim-galerisi' id='imageContainer' >
                            <img src='urun/" . $urunphoto . "/" . $urunurl . ".jpg' alt='Default Image' class='resim' id='mainImage'>
                          </div>";

                       

                          echo "</div>";
                          echo " </td>";

                          
                          echo "<td style='background-color: #efefef; color: black; padding-left: 20px;margin-top: 5px; border-radius: 12px;'>";
                          #
                          echo "<div style='font-size: 30px; margin-bottom='50px''>";
                          
                           echo "$urunadi"; 


                           echo "<p style='color:#f27a1a; font-size: 26px;'>$urunfiyati TL</p>";

                          echo "<p style='color:#f27a1a; font-size: 26px;'></p>";


                          echo "<p style='font-size: 20px;'>Renk;</p>";
                          echo "<button style='font-size: 18px; width: 120px; color: red;' onclick=\"changeImage('urun/" . $urunphoto . "/" . $urunurl . "2.jpg')\">Kırmızı</button>";
                          echo "<button style='font-size: 18px; width: 120px; color:blue;' onclick=\"changeImage('urun/" . $urunphoto . "/" . $urunurl . "3.jpg')\">Mavi</button>";
                          echo "<button style='font-size: 18px; width: 120px; color:green;' onclick=\"changeImage('urun/" . $urunphoto . "/" . $urunurl . "4.jpg')\">Yeşil</button>";
                          echo "<button style='font-size: 18px; width: 120px; color:navy;' onclick=\"changeImage('urun/" . $urunphoto . "/" . $urunurl . "5.jpg')\">Lacivert</button>";
                          echo "<button style='font-size: 18px; width: 120px; color:gray;' onclick=\"changeImage('urun/" . $urunphoto . "/" . $urunurl . ".jpg')\">Gri</button>";
                           echo "<br><br>";
                           echo "<p style='font-size: 20px;'>Beden;</p>";
                           echo "<button style='font-size: 18px; width: 100px;'>XS</button>";
                           echo " <button style='font-size: 18px; width: 100px;'>S</button>";
                           echo "<button style='font-size: 18px; width: 100px;'>M</button>";
                           echo "<button style='font-size: 18px; width: 100px;'>L</button>";
                           echo "<button style='font-size: 18px; width: 100px;'>XL</button>";
                           echo "<button style='font-size: 18px; width: 100px;'>XXL</button>";
                           echo " <br><br><br><br>";

                           
                           echo "<button class='renklibuton' id='favoriekle' name='favoriekle'>Favorilere Ekle</button>";
                           echo "<button class='renklibuton' id='sepetekle'name='sepetekle'>Sepete Ekle</button>";
                           
                           

                           if (isset($_POST["favoriekle"])) {
                            $favoriekle="INSERT INTO favoriler ($id)
                            VALUES ('urunid')";

                            echo "<div id='mesaj'></div>";

                            
                           }
                           
                           echo "</td>";
                           # Mesaj Script Kodları
                           

                           
                           
                          
                          
                           
                        ?>                                                            
                                   <script>
                             document.addEventListener('DOMContentLoaded', function() {
                                 document.querySelector('form').addEventListener('submit', function() { var mesajDiv =
                                     document.getElementById('mesaj'); mesajDiv.innerHTML = 'Ürün başarıyla eklendi';
                                      mesajDiv.style.display = 'block'; setTimeout(function() { 
                                        mesajDiv.style.display = 'none'; }, 5000); }); }); 
                             </script>

                        
                    
                    <td>
                        

                      
                     
                    </td>
                </tr>
            </table>

        

</div>
</body>
</html>