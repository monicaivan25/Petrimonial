
<!DOCTYPE html>
<html>
  <head>
    <title>Profilul meu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./script.js" defer></script>

    <style>
      
    .boody{
      width: 100%;
      display: grid;
      grid-template-rows: min-content auto min-content auto;
      grid-template-columns: 10% 70% 20%;
      grid-template-areas: "titlu1 titlu1 titlu1"
                           ". main1 ."
                           "titlu3 titlu3 titlu3"
                           ". anunturi .";
      grid-gap: 1.5em;
      }
    .titlu1{
        grid-area: titlu1;
    }
    .main1{
        grid-area: main1;
        display: grid;
        grid-template-rows:  auto min-content auto;
        grid-template-columns: 30% 65%;
        grid-template-areas:  "desc desc"
                             "titlu2 titlu2"
                             "desc1 desc1";
        grid-gap: 3em;
      }
    .image{
        max-width:100%;
        grid-area: image;
      }
      
    .desc{
        grid-area: desc;
      }
    .titlu2{
        grid-area: titlu2;
      }
    .desc1{
        grid-area: desc1;
      }
      
    .titlu3{
      grid-area: titlu3;
      }
      .anunturi{
        grid-area: anunturi;
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 50% 50%;
        grid-template-areas: "anunt1 anunt2";
        grid-column-gap: 5em;
      }
      
      
      


      
      .text--titlu{
        width: 99%;
      }
      .text--titlu1{
        width: 99%;
      }
      .text--titlu2{
        position: relative;
        left:0;
        width: 99%;
      }
      #hr2{
        position: absolute;
        left: 0;
        width: 100%;
      }
      
    .anunt1{
      grid-area: anunt1;
      display: grid;
      grid-template-rows: auto;
      grid-template-columns: 45% 45%;
      grid-template-areas: "card1 card2";
      grid-column-gap: 65px;
      }
    .anunt2{
      grid-area: anunt2;
      display: grid;
      grid-template-rows: auto;
      grid-template-columns: 45% 45%;
      grid-template-areas: "card3 card4";
      grid-column-gap: 65px;
      }
      
      .card1{
      grid-area: card1;
      display: grid;
      grid-template-colums: auto;
      grid-template-rows: 15em min-content auto;
      grid-template-areas: 
        "img" 
        "title"
        "content";
      grid-column-gap: 1.5em;
      box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
      padding: 1.5em;
      margin-bottom: 1.5em;
      }
      .card2{
      grid-area: card2;
      display: grid;
      grid-template-colums: auto;
      grid-template-rows: 15em min-content auto;
      grid-template-areas: 
        "img" 
        "title"
        "content";
      grid-column-gap: 1.5em;
      box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
      padding: 1.5em;
      margin-bottom: 1.5em;
      }
      .card3{
      grid-area: card3;
      display: grid;
      grid-template-colums: auto;
      grid-template-rows: 15em min-content auto;
      grid-template-areas: 
        "img" 
        "title"
        "content";
      grid-column-gap: 1.5em;
      box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
      padding: 1.5em;
      margin-bottom: 1.5em;
      }
      .card4{
      grid-area: card4;
      display: grid;
      grid-template-colums: auto;
      grid-template-rows: 15em min-content auto;
      grid-template-areas: 
        "img" 
        "title"
        "content";
      grid-column-gap: 1.5em;
      box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
      padding: 1.5em;
      margin-bottom: 1.5em;
      }
    .card-img{
      height: 100%;
      max-width: 100%;
      grid-area: img;
      background: pink;
      margin: auto;
      }
    .card-title{
      display: flex;
      justify-content: center;
      align-items: center;
      grid-area: title;
      
      }
    .card-content{
      grid-area: content;
      }
      a{  color: inherit; 
        text-decoration: none;}
      
      .container {
        max-width: 100%;
      }
      
      .container img {
        width: 100%;
        height: auto;
      }
      
    
    
    </style>
</head>
  
  <body>
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
      
         <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>

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
    

    
    
<!-- BOOTY -->
<div class="boody">
      <div class="titlu1">
        <div class="text--titlu">
            <h4 class="text-anunt">Date personale</h4>
            <hr>
        </div>
      </div>
      
      <div class="main1">
        
        <div class="image">
          <div class="container">
           <a target="_blank">
            </a>
          </div>
        </div>
        
        <div class="desc">

            <label> ceva</label>
            <input type="text">
            <label> ceva</label>
            <input type="text">
            <label> ceva</label>
            <input type="text">
            <label> ceva</label>

        </div>
        
        <div class="titlu2">
          <div class="text--titlu2">
            <h4>Adresa</h4>
            <hr id="hr2">
          </div>
        </div>
        
        <div class="desc1">
  
            <label> ceva</label>
            <input type="text">
            <label> ceva</label>
            <input type="text">
            <label> ceva</label>
            <input type="text">
            <label> ceva</label>

        </div>
         
      </div>
      
      <div class="titlu3">
        <div class="text--titlu">
        <h4 class="text-anunt">Anunturile tale</h4>      
        <hr>
       </div>
    </div>
 
      
<div class="anunturi">
  
  <div class="anunt1">

      <div class="card1">        
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FUntitled.png?1521400892099" alt="" class="card-img">
        <h2 class="card-title">NAME</h2>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat.</p>
          <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">Afla mai mult.</a>
        </div>
        
      </div>
      <div class="card2">
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Fimages%20(6).jpg?1521402259191" alt="" class="card-img">
        <h2 class="card-title">NAME</h2>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat.</p>
          <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">Afla mai mult.</a>
        </div>
    </div>
            
  </div>
    
  <div class="anunt2">

      <div class="card3">        
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FUntitled.png?1521400892099" alt="" class="card-img">
        <h2 class="card-title">NAME</h2>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat.</p>
          <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">Afla mai mult.</a>
        </div>
        
      </div>
      <div class="card4">
        <img src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Fimages%20(6).jpg?1521402259191" alt="" class="card-img">
        <h2 class="card-title">NAME</h2>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat.</p>
          <a target="_blank" href="https://petrimonials.glitch.me/templateanunt.html">Afla mai mult.</a>
        </div>
    </div>
            
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
