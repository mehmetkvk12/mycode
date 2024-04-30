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
                    
                        <?php

                                  

                            
                           
                        ?>                                                            
                                   

                        
                    </td>
                    <td>
                        

                      
                     
                    </td>
                </tr>
            </table>

        </div>

</div>
</body>
</html>