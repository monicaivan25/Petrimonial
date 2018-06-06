<!DOCTYPE html>
<html>
  <head>
    <title>Petrimoniale</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js" defer></script>

    <style>
    /* Pentru patrate cu hover over */
      .container {
        position: relative;
        width: 49.5%;
        display: inline-block;
      }

      .image {
        display: inline-block;
        width: 100%;
        height: auto;
      }

      .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        overflow: hidden;
        width: 100%;
        height:0;
        transition: .5s ease;
      }

      .container:hover .overlay {
        bottom: 0;
        height: 100%;
      }

      @media screen and (max-width: 700px) {
        .container{
          width:100%;
        }
      }

    </style>
  </head>
  
  <body>
    <header class="navigation-bar">
      <a  href="home.php">
        <img class="logo" src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FpetrimonialeALB2.png?1520622937853" height = "35px" >
      </a>
    
      <a class="bar-item" href="monte.php">Monte</a>
      <a class="bar-item" href="pui2.php">Vanzari pui</a>
      <a class="bar-item" href="anunt.php">Adauga anunt</a>
      <a class="bar-item" href="contact.php">Contact</a>
     
      <!--Login/signup Menu-->
      <?php
        session_start();

         if (isset($_SESSION['email'])){
        ?>
          <div class="dropdown" id="delogare" style="float:right;">
           <button class="dropbtn"><i class="fa fa-reorder"></i></button>
            <div class="dropdown-content">
             <button onclick="document.getElementById('delogin').style.display='block'" class="barbtn">Delogare</button>
             <button onclick="document.getElementById('myprofile').style.display='block'" class="barbtn">Profilul meu</button>
            </div>
          </div>  

          </div>  

        <?php } else  { ?>
           <div class="dropdown" id="loginInregistrare" style="float:right;">
            <button class="dropbtn"><i class="fa fa-reorder"></i></button>
             <div class="dropdown-content">
                <button onclick="document.getElementById('login').style.display='block'" class="barbtn">Logare</button>
                <button onclick="document.getElementById('signup').style.display='block'" class="barbtn">Inregistrare</button>
               </div>
            </div>  
        <?php  } ?>
      
      
    </header>
    
    <!-- back to top button -->
    <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>
    
 <!-- Patrate colorate -->   
    <hr style="width:100%; color:white; border-color:white;">
    <div class="container">
      <a href="despre_noi.php">
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Fhome.png?1520685517090" alt="Home" class="image">
        <div class="overlay about-us">
          <div class="text">
            <h3>DESPRE NOI</h3>
            <p>Ajutam animalele sa si-o dea din 2018.</p>
          </div>
        </div>
      </a>
    </div>
    
    <div class="container">
      <a href="monte.php">
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Fmonte.png?1520685631928" alt="Monte" class="image">
        <div class="overlay anunturi-monta">
          <div class="text">
            <h3>CAUTA UN PARTENER</h3>
            <p>Cauta un partener pentru prietenul tau pufos si fa-i viata mai frumoasa.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="container">
      <a href="pui2.php">
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Fpui.png?1520684329548" alt="Pui" class="image">
        <div class="overlay anunturi-pui">
          <div class="text">
            <h3>ADOPTA UN PRIETEN</h3>
            <p>Nu ai inca un prieten pufos sau nu ai destui? Cumpara sau adopta unul chiar astazi! </p>
          </div>
        </div>
      </a>
    </div>

    <div class="container">
      <a href="contact.php">
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Fcontact.png?1520684330441" alt="Contact" class="image">
        <div class="overlay contact">
          <div class="text">
            <h3>CONTACTEAZA-NE!</h3>
            <p>Daca ai intrebari sau sugestii legate de website sau orice altceva, nu ezita sa ne contactezi! </p>
          </div>
        </div>
        </a>
    </div>

<!--LOGIN & SIGNUP & DELOGIN-->
    <div id="login" class="modal">
      <span onclick="document.getElementById('login').style.display='none'" class="closebtn" title="Close Modal">&times;</span>
      <form class="modal-content">
          <h1>Logare</h1>
          <p>Introduceti emailul si parola.</p>
          
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Email" name="email" id="email-id-log" required>

          <label for="psw"><b>Parola</b></label>
          <input type="password" placeholder="Parola" name="psw" id="parola-id-log" required>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Inapoi</button>
            <button type="button" class="loginbtn" onclick="Logare()" >Logare</button>
          </div>
      </form>
    </div>

    <div id="signup" class="modal">
      <span onclick="document.getElementById('signup').style.display='none'" class="closebtn" title="Close Modal">&times;</span>
      <form class="modal-content">
          <h1>Inregistrare</h1>
          <p>Completati acest formular pentru a va inregistra.</p>
          
          <label for="nume"><b>Nume</b></label>
          <input type="text" placeholder="Numele dvs." name="username" id="user-id" required>  
        
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Emailul dvs." name="email" id="email-id" required>

          <label for="psw"><b>Parola</b></label>
          <input type="password" placeholder="Scrieti parola" name="psw" id="par1-id" required>

          <label for="psw-repeat"><b>Repetati parola</b></label>
          <input type="password" placeholder="Rescrieti parola" name="psw-repeat" id="par2-id" required>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Inapoi</button>
            <button type="button" class="signupbtn" onclick="Inregistrare()" >Inregistrare</button>
          </div>
      </form>
    </div>

     <div id="delogin" class="modal" > 
      <span onclick="document.getElementById('delogin').style.display='none'" class="closebtn" title="Close Modal">&times;</span>
      <form class="modal-content">
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('delogin').style.display='none'" class="cancelbtn">Inapoi</button>
            <button type="button" class="signupbtn" onclick="Delogare()" >Delogare</button>
          </div>
      </form>
    </div>

     <div id="myprofile" class="modal" > 
      <span onclick="document.getElementById('myprofile').style.display='none'" class="closebtn" title="Close Modal">&times;</span>
      <form class="modal-content">
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('myprofile').style.display='none'" class="cancelbtn">Inapoi</button>
            <button type="button" class="signupbtn" onclick=" goToMyProfile()">  Profilul meu </button>
          </div>
      </form>
    </div>
    
    <script>
    
    </script>
  </body>
</html>

