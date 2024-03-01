<?php
    date_default_timezone_set('Europe/Bratislava');
    include 'comments.inc.php';
    $conn = mysqli_connect('localhost', 'root', '', 'komenty');
    if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="sk">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Študentské recepty</title>
    <link rel="stylesheet" href="../style2.css">
    <link rel="icon" type="image/png" href="../favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <style>
        #myImg {
          border-radius: 5px;
          cursor: pointer;
          transition: 0.3s;
        }
        
        #myImg:hover {opacity: 0.7;}
        
        .modal {
          display: none; 
          position: fixed; 
          z-index: 1; 
          padding-top: 100px; 
          left: 0;
          top: 0;
          width: 100%; 
          height: 100%;
          overflow: auto;
          background-color: rgb(0,0,0); 
          background-color: rgba(0,0,0,0.9); 
        }
        
        .modal-content {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
        }
        
        #caption {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
          text-align: center;
          color: #ccc;
          padding: 10px 0;
          height: 150px;
        }
        
        .modal-content, #caption {  
          -webkit-animation-name: zoom;
          -webkit-animation-duration: 0.6s;
          animation-name: zoom;
          animation-duration: 0.6s;
        }
        
        @-webkit-keyframes zoom {
          from {-webkit-transform:scale(0)} 
          to {-webkit-transform:scale(1)}
        }
        
        @keyframes zoom {
          from {transform:scale(0)} 
          to {transform:scale(1)}
        }
        
        .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
        }
        
        .close:hover,
        .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
        }

        @media only screen and (max-width: 700px){
          .modal-content {
            width: 100%;
          }
        }
        .comment-box p{
    font-family: Arial;
    font-size: 14px;
    line-height: 16px;
    color: #282828;
    font-weight: 100;
    }
    </style>
    </head>
    <body>
       <section class="header">
            <nav>
                <a href="../index.php"><img src="../logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="../index.php">Domov</a></li>
                        <li><a href="../recepty.php">Recepty</a></li>
                        <li><a href="../kontakt.php">Kontakt</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>

            <h1>Špekačka na ohni</h1>
            <br>
            <h2>Budeme potrebovať:</h2>
<br>
            <ul>
                <li class="zoznam">Špekačku</li>
                <li class="zoznam">Chlieb</li>
                <li class="zoznam">Horčicu</li>
                <li class="zoznam">Oheň</li>
                <li class="zoznam">Konár</li>
            </ul>
<br>
<br>
<br>
            <h2>Postup:</h2>

<br>


            <ol>
                 <li class="postup">
                    <div class="circle" >1</div>
                    <p>Založíme oheň (ideálne niekde vonku).</p>
                </li>
                <li class="postup">
                    <div class="circle" >2</div>
                    <p>Do špekačky pomocou nožíku vyrežeme dookola špirálu.</p>
                </li>
                <li class="postup">
                    <div class="circle" >3</div>
                    <p>Narezanú špekačku napichneme na konár a dáme opekať nad oheň. Dávame pozor aby nám špekačka z konára nepadla alebo sa nám nezlomil.</p>
                </li>
                <li class="postup">
                    <div class="circle" >4</div>
                    <p>Postupne otáčame aby sa opiekla rovnomerne z každej strany. Pozor aby nám nezhorela na uhoľ.</p>
                </li>
                <li class="postup">
                    <div class="circle" >5</div>
                    <p>Keď máme špekačku hotovú dáme ju na krajec chleba a dáme na to horčicu. Dobrú chuť.</p>
                </li>
                </ol>
            
<br>
<img style="cursor:pointer" id="myImg" src="https://cloud-7.edupage.org/cloud?z%3Ab3pysk9D5bD1whL7rMrg6AxlFpZkv3VJFoI1%2Fd93lNG99ZVAA4Uqbr0yZJLbyUS2" alt="Špekačka" height="400px" width="400px" class="obrazek">

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
    </div>
    
    <?php
  echo "<form method='POST' action='".setComments($conn)."'>
        <h4>Používateľské meno:</h4>
        <input class='komenty-meno' type='text' name='uid'><br>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'><br>
        <h4>Správa:</h4>
        <textarea class='komenty-sprava' name='message'></textarea><br>
        <button class='komenty-button' type='submit' name='commentSubmit'>Komentuj</button>
    </form>";
getComments($conn);
?>
    <script>    
    var modal = document.getElementById("myModal");
    
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    
    var span = document.getElementsByClassName("close")[0];
    
    span.onclick = function() { 
      modal.style.display = "none";
    }
    </script> 
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