<!DOCTYPE html>
<html lang="sk">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Študentské recepty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
   <style>
    img{
        border-radius: 3%;
    }
    body{
        background-color: #010204;
    }
   </style>
</head>
    <body>
        <section class="header">
             <nav>
                 <a href="index.php"><img src="logo.png"></a>
                 <div class="nav-links" id="navLinks">
                     <i class="fa fa-times" onclick="hideMenu()"></i>
                     <ul>
                         <li><a href="index.php">Domov</a></li>
                         <li><a href="recepty.php">Recepty</a></li>
                         <li><a href="kontakt.php">Kontakt</a></li>
                     </ul>
                 </div>
                 <i class="fa fa-bars" onclick="showMenu()"></i>
             </nav>
             <div>
                <h1 class="zoznam">Zoznam receptov</h1>
                <div class="container">
                    <div class="column">
                        <h3>Párky</h3>
                        <p><a href="parky/index.php"><img src="https://cloud-5.edupage.org/cloud?z%3AdAejgCFZfjc1xkp9C%2BHimx5II%2BbCrPqusBh5dGLviDl4cVPlovLWP7v9%2Bd5p13HT" style="width:400px;height:400px;" class="center"></a></p>
                    </div>
                    <div class="column">
                        <h3>Omeleta</h3>
                        <p><a href="omelet/index.php"><img src="https://cloud-8.edupage.org/cloud?z%3Ap5Z0VPj1trxHUOwD3g9c1OYxxMmlXqK%2B9HOWgxK6hp0PWd2XnydvBgRkSUwtp3%2BY" style="width:400px;height:400px;" class="center"></a></p>
                    </div>
                    <div class="column">
                        <h3>Špekačka na ohni</h3>
                        <p><a href="twister/index.php"><img src="https://cloud-7.edupage.org/cloud?z%3Ab3pysk9D5bD1whL7rMrg6AxlFpZkv3VJFoI1%2Fd93lNG99ZVAA4Uqbr0yZJLbyUS2" style="width:400px;height:400px;" class="center"></a></p>
                    </div>
                    <div class="column">
                        <h3>RECEPT</h3>
                        <p><a href=".html"><img src="" style="width:400px;height:400px;" class="center"></a></p>
                    </div>
                    <div class="column">
                        <h3>RECEPT</h3>
                        <p><a href=".html"><img src="" style="width:400px;height:400px;" class="center"></a></p>
                    </div>
                    <div class="column">
                        <h3>RECEPT</h3>
                        <p><a href=".html"><img src="" style="width:400px;height:400px;" class="center"></a></p>
                    </div>
                    
        
    <script>
                var navLinks = document.getElementById("navLinks");
        
                function showMenu(){
                    navLinks.style.right= "0";
                }
                function hideMenu(){
                    navLinks.style.right= "-200px";
                }
    </script>
           
    
    </body>
</html>
        
 