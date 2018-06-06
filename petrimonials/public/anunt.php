<!DOCTYPE html>
<html min-height="100%">
  <head>
    <title>Adauga un anunt</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js" defer></script>


    
    <style>
     
      button{
        background-color: #E84A5F;
      }
      
      .formular-container {
          background-color: #ffffff;
          padding: 5% 0 0 15%;
          width: 60%;
          max-height: 100% !important;
      }
      
      .bg {
        height: 100%; 
        positon: relative;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      
   .hr-container-first{
     margin-top: 5%;
    }
      
  .hr-container{
    margin-top: 1%; 
    }
      
.submit-button{
   box-sizing: content-box !important;
   background-color: #FF7F50;
   position: absolute;
   color: white;
   padding: 15px;
   text-decoration: none !important;
   left: 7%;
   bottom: auto;
   cursor: pointer;
   width: 60px; 
   border-radius: 10px; 
 }

.submit-button:hover {
    background-color: red;
  }
      
 @media screen and (max-width: 800px){
       .bg{
          background: none;
        }
   
        .formular-container{
          width:90%;
          padding: 5% 0 0 7%;
          margin: 0 0 30% 0;
        }
   
   hr{
     width: 85%;
   }
   
   .text-anunt{
     width: 60%;
   }
}
      
 @media screen and (max-width: 700px){
       .bg{
          background: none;
        }
   
        .formular-container{
          width:90%;
          padding: 5% 0 0 7%;
          margin: 0 0 30% 0;
        }
   
   hr{
     width: 85%;
   }
   
   .text-anunt{
     width: 60%;
   }
}
     
 @media screen and (max-width: 400px){
       .bg{
          background: none;
        }
   
        .formular-container{
          width:90%;
          padding: 5% 0 0 7%;
        }
   
   hr{
     width: 85%;
   }
   
   .text-anunt{
     width: 60%;
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
      
    </header>
    
    <!-- back to top button -->
    <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>

    <div class="hr-container-first">
      <hr>
      
      <h2 class="text-anunt" >Adauga un anunt*</h2>
      
      <hr>
    </div>
    
    <div class="hr-container-first">
      <h4 class="text-anunt" >Informatii proprietar</h4>
      
      <hr>
    </div>
    <form action = "http://localhost:81/petrimonials/public/AdaugaAnunt/addAnunt" method="POST" enctype="multipart/form-data">

      <div class="formular-container">
          
          <label for="numar_telefon">Numarul tau de telefon</label>
          <input type="text" placeholder="Telefon" name = "numar_telefon" required>

          <label for="subiect">Oras</label>
          <input type="text" placeholder="Oras" name = "oras" required>
          
          <label for="subiect">Judet</label>
          <input type="text" placeholder="Judet" name = "judet" required>
      </div>
        
      <div class="hr-container">
        <h4 class="text-anunt" >Descriere animal*</h4>
        
        <hr>
      </div>
      
      <div class="formular-container">
          <label for="nume">Nume animal (optional)</label>
          <input type="text" placeholder="Nume" name="nume_animal">
          
           <label for="tip_animal">Tip animal</label>
          <select name = "tip_animal">
            <option value="caine">Caine</option>
            <option value="pisica">Pisica</option>
          </select>
          
           <label for="sex_animal">Sex animal</label>
          <select name = "sex_animal">
            <option value="m">Mascul</option>
            <option value="f">Femela</option>
            <option value="o">Altceva</option>
          </select>

          <label for="rasa">Rasa (optional)</label>
          <input type="text" placeholder="Rasa, daca stii :)" name = "rasa">
          
          <label for="pret">Pret (optional)</label>
          <input type="text" placeholder="Pret,  lei" name = "pret" required>  
          
          <label for="tipanunt">Tipul anuntului</label>
          <select name = "tip_anunt">
            <option value="vanzari">Vanzari/Adoptii</option>
            <option value="monte">Monte</option>
          </select>
          
          <label for="detalii">Scurta descrierea a animalului </label>
          <textarea name="descriere" name="detalii" style="height:100px"> </textarea>
   
          <label for="poze">Adauga poze cu animalul tau</label>

         <input type="file" name="fileToUpload" id="fileToUpload">
          <!--<input type="file" name="pic" accept="image/*" id = "poza2">
          <input type="file" name="pic" accept="image/*" id = "poza3" >-->
          
</form>
          <button type="submit" >Publica</button>

      </div>
    </form>

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
