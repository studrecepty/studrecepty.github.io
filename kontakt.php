<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nás - Študentské recepty</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function() {
    emailjs.init("sjqCvFW3T1vtEei94",);
    })();
    </script>
    <script src="script.js"></script>
</head>
    <style>
        .contact-form {
            position: relative; top: 175px;
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-form textarea {
            height: 150px;
        }
        .contact-form input[type="submit"] {
            background-color: #009688;
            color: #fff;
            border: none;
            padding: 12px 20px;
            margin-left: 40%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .contact-form input[type="submit"]:hover {
            background-color: #00796b;
        }
        h2{
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
            padding: 20px;
            font-size: 50px;
        }
        button{
            background-color: #009688;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 40%;
            border-radius: 5px;
        }
        button:hover {
            transition: transform 0.3s;
            transform: scale(1.1);
            cursor: pointer;
        }
        fieldset {
    border: 0;
}
    </style>
<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="logo.png" class="logo"></a>
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
        <section class="contact-form">
            <h2>Kontaktujte nás</h2>
                
                  <input placeholder="Meno" id="Name" name="Name" type="text" required>
                
                  <input placeholder="Email" type="email" id="email_id" name="email"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                
                  <textarea name="message" id="message" placeholder="Sem napíš obsah správy..." required></textarea>
                
                  <button type="submit" onclick="SendMail()">Odošli</button>
                
        </section>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
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
</body>
</html>
