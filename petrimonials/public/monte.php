
<!DOCTYPE html>
<html>
  <head>
    <title>Anunturi monte</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./script.js" defer></script>

  <style>
* {
    box-sizing: border-box;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
        
}

/* Add padding BETWEEN each column */
.row,.row > .column {
    padding: 10px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: block; /* Hide all elements by default */
}
    @media screen and (max-width: 500px) {
      .column { width: 100%; } 
    }
/* Clear floats after rows */ 
.row:after {
      content: "";

    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: #E84A5F;
    padding: 10px;
    height: 100%;
    width: 100%;
    text-align: center;
}
    


  
.back-to-top-button-style{
   position: fixed;
   bottom: 0;
   background-color: #FF7F50;
   width: 55px;
   right: 15px;
   text-decoration: none !important;
   z-index: 99;
   border: none; 
   color: black; 
   cursor: pointer; 
   padding: 15px; 
   border-radius: 10px;  
}
    
.back-to-top-button-style:hover {
    background-color: red;
}
    a{  color: inherit; 
      text-decoration: none;}

</style>
  
    
  </head>
  <body>
<!--       NAVBAR       -->
<header class="navigation-bar">
      <a  href="home.html">
        <img class="logo" src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FpetrimonialeALB2.png?1520622937853" height = "35px" >
      </a>
    
      <a class="bar-item" href="monte.html">Monte</a>
      <a class="bar-item" href="pui2.html">Vanzari pui</a>
      <a class="bar-item" href="anunt.html">Adauga anunt</a>
      <a class="bar-item" href="contact.html">Contact</a>
     
      <!--Login/signup Menu-->
      <div class="dropdown" style="float:right;">
          <button class="dropbtn"><i class="fa fa-reorder"></i></button>
          <div class="dropdown-content">
             <button onclick="document.getElementById('login').style.display='block'" class="barbtn">Logare</button>
             <button onclick="document.getElementById('signup').style.display='block'" class="barbtn">Inregistrare</button>
          </div>
      </div>  
      
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
<!--     ITEMS       -->
    
    <!-- back to top button -->
    <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>
    
    <!-- MAIN (Center website) -->
<div class="main">

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      <h4>Name</h4>
      <p>Short description</p>
    </div> 
    </a>
  </div>
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>
  
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
            
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      
        <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
      
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      
      <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>

  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
      
      <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      
  <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
    <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>
  <div class="column">
    <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">
    <div class="content">
    <img src="https://cdn.hyperdev.com/click-me.svg?1477239469954" alt="Car" style="width:100%">
      <h4>Name</h4>
      <p>Short description</p>
    </div>
    </a>
  </div>


  </div>
    </div>
    
    <!--LOGIN & SIGNUP -->
    <div id="login" class="modal">
      <span onclick="document.getElementById('login').style.display='none'" class="closebtn" title="Close Modal">&times;</span>
      <form class="modal-content" action="/action_page.php">
          <h1>Logare</h1>
          <p>Introduceti emailul si parola.</p>
          
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Email" name="email" required>

          <label for="psw"><b>Parola</b></label>
          <input type="password" placeholder="Parola" name="psw" required>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Inapoi</button>
            <button type="submit" class="loginbtn">Logare</button>
          </div>
      </form>
    </div>

    <div id="signup" class="modal">
      <span onclick="document.getElementById('signup').style.display='none'" class="closebtn" title="Close Modal">&times;</span>
      <form class="modal-content" action="/action_page.php">
          <h1>Inregistrare</h1>
          <p>Completati acest formular pentru a va inregistra.</p>
          
          <label for="nume"><b>Nume</b></label>
          <input type="text" placeholder="Numele dvs." name="nume" required>  
        
          <label for="email"><b>Prenume</b></label>
          <input type="text" placeholder="Prenumele dvs." name="prenume" required>
        
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Emailul dvs." name="email" required>

          <label for="psw"><b>Parola</b></label>
          <input type="password" placeholder="Scrieti noua parola" name="psw" required>

          <label for="psw-repeat"><b>Repetati parola</b></label>
          <input type="password" placeholder="Rescrieti noua parola" name="psw-repeat" required>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Inapoi</button>
            <button type="submit" class="signupbtn">Inregistrare</button>
          </div>
      </form>
    </div>
  </body>
</html>
 
