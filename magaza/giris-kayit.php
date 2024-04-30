
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Giriş Yap- Kayıt Ol</title>
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
                    <button class="araicon" ><img src="ico/search.png"></button> 
                      <input class="ara" type="search" placeholder="Ürün Arayın" maxlength="60" value>
                      
                        
                </form>
            </td>
            <td class="menuu"><a href="favoriler.php"><img src="ico/likee.jpg" id="icoresim">Favoriler</a></td>
            <td class="menuu"><a href="#">Sepetim</a></td>
            <td class="menuu"><a href="giris-kayit.php">Hesabım</a>
            </td>
            </tr>
            
            </table>
    </div>
    <div class="orta">
<table >
    <tr class="ortatable">
        <td>
 <!--Giris Yap Kayit Ol Bolumu-->
        <!--Kayit Ol Bolumu-->
    <div class="kayitol">
        <h1 style=" text-align: center; padding-top: 20px;">Kayıt Ol</h1>


        <form action="php/kayit.php" method="POST">
            <label for="adsoyad">Adınız Soyadınız</label><br>
            <input type="text" id="adsoyad" name="adsoyad" required><br><br>
    
            <label for="email">E-Posta</label><br>
            <input type="email" id="email" name="email" required><br><br>
    
            <label for="phone">Telefon Numarası</label><br>
            <input type="text" id="phone" name="phone" minlength="11" maxlength="11" required><br><br>
    
            <label for="password">Şifre</label><br>
            <input type="password" id="password" name="password" required >

            <button type="button" onclick="togglePasswordVisibility()" id="toggleButton">
            <i class="bi bi-eye" id="showIcon" ></i>
            <i class="bi bi-eye-slash" id="hideIcon" style="display:none;"></i>
            </button>

            <br><br>
            
    
            <input type="submit" id="kayit" value="Kayıt Ol" >
            <br>
            
        </form>
        <!--Sifrenin Gorunurlugu icin SCRİPT kodları-->
        <script>
            function togglePasswordVisibility()
            {
                var passwordInput = document.getElementById('password');
                var showIcon = document.getElementById('showIcon');
                var hideIcon = document.getElementById('hideIcon');
                if(passwordInput.type === "password")
                {
                    passwordInput.type = "text";
                    showIcon.style.display='none';
                    hideIcon.style.display='inline-block';
                }
                else{
                    passwordInput.type = "password";
                    showIcon.style.display='inline-block';
                    hideIcon.style.display='none';
                }
                
            }
        
        </script>
    <!--/////Sifrenin Gorunurlugu icin SCRİPT kodları-->

        
    </div>

        <!--////Kayit Ol Bolumu-->
    </td>
    <td>
        <!--Giris Yap Formu-->
        <div class="girisyap">
        <h1 style=" text-align: center; padding-top: 20px;">Giriş Yap</h1>
        <form action="php/giris.php" method="POST">
          <label for="email">E-posta</label><br>
          <input type="email" id="email" name="email" required><br><br>
        
          <label for="password">Şifre</label><br>
          <input type="password" id="password" name="password" required >

          <button type="button" onclick="togglePasswordVisibility()" id="toggleButton">
            <i class="bi bi-eye" id="showIcon" alt="deneme" ></i>
            <i class="bi bi-eye-slash" id="hideIcon" style="display:none;" alt="deneme"></i>
            </button>
          <br><br>
        
          <input type="submit" value="Giriş Yap" id="giris">
        </form>

         <!--Sifrenin Gorunurlugu icin SCRİPT kodları-->
         <script>
            function togglePasswordVisibility()
            {
                var passwordInput = document.getElementById('password');
                var showIcon = document.getElementById('showIcon');
                var hideIcon = document.getElementById('hideIcon');
                if(passwordInput.type === "password")
                {
                    passwordInput.type = "text";
                    showIcon.style.display='none';
                    hideIcon.style.display='inline-block';
                }
                else{
                    passwordInput.type = "password";
                    showIcon.style.display='inline-block';
                    hideIcon.style.display='none';
                }
                
            }
        
        </script>
    <!--/////Sifrenin Gorunurlugu icin SCRİPT kodları-->

      


        </div>
        <!--////Giris Yap Formu-->


<!--////Giris Yap Kayit Ol Bolumu-->
    </td>
    </tr>
</table>
    </div>

</div>
</body>
</html>