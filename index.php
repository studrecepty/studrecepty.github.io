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
    h3{
        color: black;
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

    <div class="text-box">
            <h1>Študentské recepty</h1>
            <p style="color: #ffffff";>Vitajte na našej stránke plnej kreatívnych a jednoduchých receptov pre študentov! <br>Naša stránka je tu práve pre vás, aby sme vám pomohli objaviť svet chutného, cenovo dostupného a jednoducho prípravne receptov, ktoré sa hodia do študentského životného štýlu.</p>
    </div>
       </section>
 
       <section class="course">
            <h1>O nás</h1>

            <div class="row">
                <div class="course-col">
                    <h3>Kto sme?</h3>
                    <p>Túto stránku vytvorili študenti 4.A triedy SPŠE Piešťany Tibor Jendreas a Matej Urban v rámci predmetu Ročníkový projekt.</p>
                </div>
                <div class="course-col">
                    <h3>Prečo sme vznikli?</h3>
                    <p>Keďže sme už v štvrtom ročníku SPŠE Piešťany a máme predmet ročníkový projekt, museli sme vymyslieť niečo čo spravíme. Od začiatku bola webstránka jasná voľba, no dlho sme nevedeli na akú tému ju spravíme. Až nás jedného dňa napadlo že stránka so študentskými receptami by bola celkom fajn.</p>
                </div>
                <div class="course-col">
                    <h3>Odkiaľ máme recepty?</h3>
                    <p>Veľmi dobre poznáme študentský život a vieme že je to pre študentov veľmi ťažké. Každý študent s obmedzeným rozpočtom a prázdnym žalúdkom na našej stránke nájde presne to čo hľadá. Lacné a rýchle recepty ktoré su samozrejme chutné a porcie kľudne vydržia aj niekoľko dní.</p>
                </div>
            </div>
        </section>

        
    <footer>
        <p>&copy;2023 Tibor Jendreas, Matej Urban</p>
    </footer>


    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right= "0px";
        }
        function hideMenu(){
            navLinks.style.right= "-200px";
        }
    </script>
    </body>
</html>
