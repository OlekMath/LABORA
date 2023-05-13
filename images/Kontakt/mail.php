
<?php

$to      = 'olekforothersites@gmail.com';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers, '');

echo '<h1>Wiadomość wysłana :)</h1>';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Labora">
    <meta name="keywords" content="BHP, Szkolenie, Informatyka">
    <meta name="author" content="Hubert Kraczkowski">
    <meta name="author" content="Oleksandr Sosnovskyi">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="kon.css">

    <title>Kontakt</title>
  
</head>
<div class="container">
  <div class="dark">
      <div class="logo">
      <img src="images/Kontakt/logo-Laboratoria_Przyszłości_poziom_kolor 1 (4).png" alt="Logo firmy">
      
      <h1>KONTAKT</h1>
      
      </div>
      <nav class="navigation">
        <ul>
          <li><a target="_blank" href="index.html">Home</a></li>
          <li><a target="_blank" href="Lab.html">Laboratorium</a></li>
          <li><a href="">Usługi</a>
            <ul>
                <li><a target="_blank" href="BHP.html">Usługi BHP</a></li>
                <li><a target="_blank" href="InfServices.html">Usługi Informatyczne</a></li>
            </ul>
          </li>
          <li><a href="">Szkolenia</a>
            <ul>
                <li> <a target="_blank" href="Szkolenia.html">Szkolenia</a> </li>
                <li><a target="_blank" href="Materials.html">Materiały szkoleniowe</a></li>
            </ul> 
          </li>
          <li><a target="_blank" href="Kon.html">Kontakt</a></li>
      </ul>
      </nav>
      <div class="description_header">
          <div class="main-desc">
              <h1>Zapoznaj się z naszą ofertą <h2>w Lublinie!</h2></h1>
              <p>Oferujemy duży zakres najrozmaitszych usług: od szkoleń BHP do usług informatycznych, a także laboratoria!</p>
          </div>
          
          <div class="buttons">
              <button>Zapytaj się teraz!</button>
              <button>Dowiedz się więcej!</button>
          </div>
      </div>
  </div>
</div>
</div>
    <main>
        <h1 class="about-part">Kontakt</h1>
        <div class="line"></div>

        <div class="form">
            <img src="images/Kontakt/unsplash_TyanDMPxwHc (2).png" alt="Zdjęcie" class="left-image">
            <div class="container-form">
                
                <h2>Formularz</h2>
                
                <form action="mail.php" method="post" name="contactform" >
                  
                  <div class="group-form">      
                    <input type="text" name="name" id="name" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label for="name">Imię</label>
                  </div>
                    
                  <div class="group-form">      
                    <input type="text" name="subname" id="subname" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label for="subname">Nazwisko</label>
                  </div>
                  <div class="group-form">      
                    <input type="email" name="email" id="email" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label for="email">Adres e-mail</label>
                  </div>
                  <div id="form-right"> 
                    <div class="group-form">      
                    <input name="message" id="message" required></textarea>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>

                    </div>
                  </div>
                  <ul class="actions">
										<li><input type="submit" name="submit" value="Wyślij" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
              </form>
                <!-- <button type="submit">Wyślij</button> -->
            </div>
          </div>
<div id="map">
    <h1 id="amazing-maps">Znajdź nas na Google Maps!</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1248.9111806888534!2d22.5661495963908!3d51.24076635358485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722571177a01169%3A0xaa62eb50946aed4d!2sP.W.%20LABORA%20s.c.!5e0!3m2!1spl!2spl!4v1678700937405!5m2!1spl!2spl"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<div id="info">
    <h1 id="tel">Biuro tel/fax</h1>
    <p>
        81 747 24 47
    </p>
    <h1 id="dyr">Dyrektor</h1>
    <p>
        603 649 461

    </p>
    <h1 id="kier">Kierownik Labora</h1> <p>
        512 459 656

    </p>
    <h1 id="adres">Adres korespondencyjny</h1>
    <p>
        P. W. Labora s. c.20-103 Lublin
ul. Wesoła 7B
    </p>
</div>

</div>

  
    

    </main>
  <footer> 
        <div class ="footer-up">
              <div class="footer-block">
                      <img src="images/Kontakt/logo-Laboratoria_Przyszłości_poziom_kolor 1 (4).png" alt="Logo">
                      <p>consectetur molestiae error repellat repellendus. Libero architecto quasi atque harum nesciunt consectetur</p>
                    </div>
                      
                    <div class="footer-block"> 
                      <h2>Quick-links</h1>
                      <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Usługi</a></li>
                        <li><a href="Szkolenia.html">Szkolenia</a></li>
                        <li><a href="Lab.html">Laboratorium</a></li>
                        <li><a href="Kon.html">Kontakt</a></li>
                      </ul>
                    </div>
                  
                        
                    <div class="footer-block">
                      <h2>Kontakt</h2>
                      <div class="footer-contact">
                      <div class="footer-contact1">
                        <img src="images/Kontakt/drafts (2).svg" alt="Obrazek kontaktowy 2">
                      <p>kontakt@mojafirma.com</p>
                      </div>
                      <div class="footer-contact2">
                        <img src="images/Kontakt/smartphone (1).svg" alt="Obrazek kontaktowy 1">
                      <p>+48 123 456 789</p>
                      </div>
                      
                      </div>
                      
                    </div>
  
                    <div class="footer-block">
                      <div class="footer-address">
                        <img src="images/Kontakt/house (1).svg" alt="Obrazek z adresem">
                      <h2>Adres</h2>
                      </div>
                      
                      <p>P. W. Labora s. c.</p>
                      <p>20-103 Lublin ul. Wesoła 7B</p>
                    </div>
        </div>
        
      <div class="footer-bottom">
        <p>&copy; 2023. P. W. Labora s. c. Wszelkie prawa zastrzeżone | </p>
      </div>
      </footer>    
</body>
</html>