<!DOCTYPE html>
<html min-height="100%">
  <head>
    <title>Contacteaza-ne</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="script.js" defer></script>


    <style>
     
      button{
        background-color: #E84A5F;
      }
      
      .contact-form-container {
          float:left;
          background-color: #ffffff;
          padding: 5% 5% 0 5%;
          width: 45%;
          max-height: 100% !important;
      }
      
      .bg {
        background-image: url("https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FdoggoBGSmall.png?1521023455801");
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      
      @media screen and (max-width: 1000px){
        .bg{
          background: none;
        }
        .contact-form-container{
          width:100%;
          
        }
      }

    </style>
  </head>
  
  <body class = "bg">
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

        <?php } else { ?>
           <div class="dropdown" id="loginInregistrare" style="float:right;">
            <button class="dropbtn"><i class="fa fa-reorder"></i></button>
             <div class="dropdown-content">
                <button onclick="document.getElementById('login').style.display='block'" class="barbtn">Logare</button>
                <button onclick="document.getElementById('signup').style.display='block'" class="barbtn">Inregistrare</button>
               </div>
            </div>  
        <?php  } ?>
      <!--Search Menu-->
      <div class="dropdown" style="float:right;">
          <button class="dropbtn"><i class="fa fa-search"></i></button>
            <div class="search-bar"> 
                
              <div class="search-crit">
                  <button style="background-color:#2A363B;"><i class="fa fa-search"></i></button>
              </div>    
              
              <div class="search-crit">
                <select>
                    <option value="0">Categorie</option>
                    <option value="Monte">Monte</option>
                    <option value="Vanzari">Vanzari</option>
                    <option value="Adoptii">Adoptii</option>
                </select>
              </div>
              
              <div class="search-crit">
                <input type="text" placeholder="Cauta aici">
              </div>
  
            </div>
      </div>  
    </header>
 <hr style="width:100%; color:white; border-color:white;">
    <div class="contact-form-container">
    
      <form method="post" action="http://localhost:81/petrimonials/public/TrimiteEmail/trimite">        
        <label for="prenume">Prenume</label>
        <input type="text" name="first_name" placeholder="Prenume" required>

        <label for="nume">Nume</label>
        <input type="text" name="last_name" placeholder="Nume" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" required>

        <label for="subiect">Subiect</label>

        <select name="subject">
          <option value="monte">Anunturi monte</option>
          <option value="cumPui">Cumparare pui</option>
          <option value="vandPui">Vanzare pui</option>
          <option value="adPui">Adoptii pui</option>
          <option value="sugestii">Sugestii</option>
          <option value="other">Alt subiect</option>
        </select>

        <label for="detalii">Detalii</label>
        <textarea name="comments" style="height:100px"></textarea>

        <button type="submit">Trimiteti</button>
      </form>
    </div>


    
    <!--LOGIN & SIGNUP -->
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

    <div id="delogin" class="modal">
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
    
     

    
    </body>
</html>
