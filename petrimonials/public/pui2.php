 <!DOCTYPE html>
<html>
  <head>
    <title>Anunturi pui</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js" defer></script>
    <style>
    body{
      position: relative;
    }
    .boody {
      width: 100%;
    display: grid;
    grid-template-rows: auto auto;
    grid-template-columns: 1% 14% 38% 38% 5%;    
    grid-template-areas: ". sidebar main1 main2 ." 
                         ". sidebar main3 main4 .";
    grid-gap: 1.5em;
      }
      
    #main1{
      grid-area: main1;
      }
    #main2{
      grid-area: main2;
      }
      
    @media only screen and (max-width: 700px) {
      .boody {
          grid-template-columns: 0% 90%;    
          grid-template-areas: ". main1" 
                               ". main3";
          grid-gap: 1.4em;
        }
        #main2{
          grid-area: main3; 
        }
        aside {
          display: none; 
        } 
      }
      
    @media only screen and (max-width: 1000px) and (min-width: 701px) {
        .boody {
          grid-template-columns: 1% 45% 45%;    
          grid-template-areas: ". main1 main2" 
                               ". main3 main4";
        }
        aside {
          display: none; 
        }  
      }
      
    aside{
      grid-area: sidebar;
      background: #99B898;
      padding: 2em; 
      }
    .card{
      display: grid;
      grid-template-columns: 2fr 3fr;
      grid-template-rows: min-content min-content min-content;
      grid-template-areas: 
        "img title" 
        "img content"
        "img content";
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
      margin-right: auto;
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
    @media only screen and (max-width: 1600px) {
      
    .card{
      grid-template-columns: auto;
      grid-template-rows: 15em min-content auto;
      grid-template-areas: 
        "img1" 
        "img2"
        "img3";
      }
      .card-img{ grid-area: img1; margin: auto !important;}
      .card-title{ grid-area: img2; }
      .card-content{ grid-area: img3; }
      
      }
      
      a{  color: inherit; 
      text-decoration: none;}

      
    </style>
    </head>  
  
  
  <body>
    <!-- NAVBAR -->
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
      
      <!--Search Menu-->
     
    </header>
    
    
    <!--BODY-->
   <div class="boody">
                                                                       <!-- MAIN 1 -->
    <main id="main1">

     </main>
                                                                       <!-- MAIN 2 -->
     <main id="main2">
 
    </main>
    
    <aside>
      <div style="position:sticky; position: -webkit-sticky; top:0;">
        <h2>  TIP ANIMAL  </h2>
      <form>
        <input type="radio" name="type" value="caine" checked> Caine<br>
        <input type="radio" name="type" value="pisica"> Pisica <br> 
      </form>

      <hr>
      <br>

      <h2>  RASA  </h2>
      <form>
        <input type="text" name="rasa" id="rasaAnimal">
      </form>

      <hr>
      <br>
      <h2>  SEX  </h2>
      <form>
        <input type="radio" name="gender" value="m" checked> Mascul<br>
        <input type="radio" name="gender" value="f"> Femela<br> 
      </form>

      <hr>
      <br>
      <h2>  PRET  </h2>
      <form>
        <input type="radio" name="pret" value="1" checked> Cu Pret<br>
        <input type="radio" name="pret" value="0"> Gratis<br> 
      </form>
      <hr>
      <br>
      <br>
      <h2>
        LOCATIE
      </h2>
      <select id="locatie" style="height: 45px;">
                  <option value="a">Judet</option>
                  <option value="Alba">Alba</option>
                  <option value="Arad">Arad</option>
                  <option value="Arges">Arges</option>
                  <option value="Bacau">Bacau</option>
                  <option value="Bihor">Bihor</option>
                  <option value="Bistrita Nasaud">Bistrita Nasaud</option>
                  <option value="Botosani">Botosani</option>
                  <option value="Brasov">Brasov</option>
                  <option value="Braila">Braila</option>
                  <option value="Bucuresti">Bucuresti</option>
                  <option value="Buzau">Buzau</option>
                  <option value="Caras Severin">Caras Severin</option>
                  <option value="Calarasi">Calarasi</option>
                  <option value="Cluj">Cluj</option>
                  <option value="Constanta">Constanta</option>
                  <option value="Covasna">Covasna</option>
                  <option value="Dambovita">Dambovita</option>
                  <option value="Dolj">Dolj</option>
                  <option value="Galati">Galati</option>
                  <option value="Giurgiu">Giurgiu</option>
                  <option value="Gorj">Gorj</option>
                  <option value="Harghita">Harghita</option>
                  <option value="Hunedoara">Hunedoara</option>
                  <option value="Ialomita">Ialomita</option>
                  <option value="Iasi">Iasi</option>
                  <option value="Ilfov">Ilfov</option>
                  <option value="Maramures">Maramures</option>
                  <option value="Mehedinti">Mehedinti</option>
                  <option value="Mures">Mures</option>
                  <option value="Neamt">Neamt</option>
                  <option value="Olt">Olt</option>
                  <option value="Prahova">Prahova</option>
                  <option value="Satu Mare">Satu Mare</option>
                  <option value="Salaj">Salaj</option>
                  <option value="Sibiu">Sibiu</option>
                  <option value="Suceava">Suceava</option>
                  <option value="Teleorman">Teleorman</option>
                  <option value="Timis">Timis</option>
                  <option value="Tulcea">Tulcea</option>
                  <option value="Vaslui">Vaslui</option>
                  <option value="Valcea">Valcea</option>
                  <option value="Vrancea">Vrancea</option>
      </select>
      <br>
      <br>
      <button id="filtreaza"  onclick="filter()" style="background: #2A363B;">
        Filtreaza
      </button>
    </div>
    </aside>
  </div> 
    <!--\BODY-->
    
    
    <!-- back to top button -->
    <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>
       
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


    </div>

  </body>
  <footer>
  <script>

    function filter(){
      let rasa;
      let gender;
      let pret;
      let tip;
      let locatie = document.getElementById("locatie").value;
      let radios = document.getElementsByName('type');
      for (var i = 0, length = radios.length; i < length; i++)
      {
       if (radios[i].checked)
       {
        tip=radios[i].value;
        break;
       }
      }

      rasa = document.getElementById('rasaAnimal').value;

      radios = document.getElementsByName('gender');
      for (var i = 0, length = radios.length; i < length; i++)
      {
       if (radios[i].checked)
       {
        gender=radios[i].value;
        break;
       }
      }

      radios = document.getElementsByName('pret');
      for (var i = 0, length = radios.length; i < length; i++)
      {
       if (radios[i].checked)
       {
        pret=radios[i].value;
        break;
       }
      }
      let obj;

      if(rasa !== '' && locatie !== 'a'){
        obj = {
        gender: `${gender}`,
        pret: `${pret}`,
        tip: `${tip}`,
        rasa: `${rasa}`,
        locatie: `${locatie}`
      };
      } else if(rasa !== '' && locatie == 'a')
      {
        obj = {
        gender: `${gender}`,
        pret: `${pret}`,
        tip: `${tip}`,
        rasa: `${rasa}`
      };
      } else if(rasa == '' && locatie !== 'a')
      {
        obj = {
        gender: `${gender}`,
        pret: `${pret}`,
        tip: `${tip}`,
        locatie: `${locatie}`
      };
      } else if(rasa == '' && locatie == 'a')
      {
        obj = {
        gender: `${gender}`,
        pret: `${pret}`,
        tip: `${tip}`
      };
      } 
      

      let k = document.getElementById("main1");
      k.innerHTML = '';
      k = document.getElementById("main2");
      k.innerHTML = '';

      let xhr = new XMLHttpRequest();

      xhr.open("POST", "http://localhost:81/petrimonials/public/GetAnunt/filtreazaAnunturiVanzari");

      xhr.addEventListener("load", function loadCallback() {
          switch (xhr.status) {
              case 200:
                  let object=JSON.parse(xhr.response);
                  putOnScreen(object);
                  break;
              case 404:
                  console.log("Oups! Not found");
                  break;
          }
      });

      xhr.addEventListener("error", function errorCallback() {
          console.log("Network error");
      });

      xhr.send(JSON.stringify(obj));

    };


      function putOnScreen(obj){
        let lim=0;
        if(obj.length%2==0)
        {
          lim=obj.length/2;
        }else{
          lim=(obj.length+1)/2;
        }
        
        let inc1=0;
        let inc2=0;
        obj.slice(0,lim).forEach(function(elem){
          
          inc1+=1;
          let card = document.createElement("div");
          card.classList.add("card");
          let image = document.createElement("img");
          image.classList.add("card-img");
          image.src="http://localhost:81/petrimonials/app/models/uploads/"+elem.path;
          image.alt="poza anunt";
          let title = document.createElement("h2");
          title.classList.add("card-title");
          title.innerHTML = elem.nume_animal;
          let content = document.createElement("div");
          content.classList.add("card-content");
          let paragraf = document.createElement("p");
          paragraf.innerHTML = elem.descriere;
          let link = document.createElement("a");
          link.target = "_blank";
          link.href="localhost:81/petrimonials/public/Anunturi/get/"+elem.id;
          link.innerHTML="Afla mai mult.";
          content.appendChild(paragraf);
          content.appendChild(link);
          card.appendChild(image);
          card.appendChild(title);
          card.appendChild(content);
          let k = document.getElementById("main1");
          if(typeof k !=="undefined")
            {k.appendChild(card);}
        });

        obj.slice(lim,obj.length).forEach(function(elem){

          inc2+=1;

          let card = document.createElement("div");
          card.classList.add("card");
          let image = document.createElement("img");
          image.classList.add("card-img");
          image.src="http://localhost:81/petrimonials/app/models/uploads/"+elem.path;
          image.alt="poza anunt";
          let title = document.createElement("h2");
          title.classList.add("card-title");
          title.innerHTML = elem.nume_animal;
          let content = document.createElement("div");
          content.classList.add("card-content");
          let paragraf = document.createElement("p");
          paragraf.innerHTML = elem.descriere;
          let link = document.createElement("a");
          link.target = "_blank";
          link.href="localhost:81/petrimonials/public/Anunturi/get/"+elem.id;
          link.innerHTML="Afla mai mult.";
          content.appendChild(paragraf);
          content.appendChild(link);
          card.appendChild(image);
          card.appendChild(title);
          card.appendChild(content);
          let k = document.getElementById("main2");
          if(typeof k !=="undefined")
            {k.appendChild(card);}
        });
      };

      function getCards(){
        let xhr = new XMLHttpRequest();

        xhr.open("GET", "http://localhost:81/petrimonials/public/GetAnunt/getAnunturiPui");

        xhr.addEventListener("load", function loadCallback() {
            switch (xhr.status) {
                case 200:
                    let obj=JSON.parse(xhr.response);
                    putOnScreen(obj);
                    break;
                case 404:
                    console.log("Oups! Not found");
                    break;
            }
        });

        xhr.addEventListener("error", function errorCallback() {
            console.log("Network error");
        });

        xhr.send();
      };

      window.onload=getCards();

    </script>
    <footer>

</html>