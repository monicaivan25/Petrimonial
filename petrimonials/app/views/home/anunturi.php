
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./script.js" defer></script>
    
    <script> function share_fb(url) {
    window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
    }
    window.onload=function(){
      document.title=document.getElementById('titluAnunt').innerHTML;
    };
    </script>

    <style>

* {box-sizing: border-box}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

input[type=text], 
input[type=password],
textarea,
select {
  width: 100%;
  height: 45px;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, 
input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
      
button {
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

button:hover {
        opacity:1;
      }
button:focus {
  outline: none;
}
.navigation-bar{
  background-color: #2A363B;
  height: 70px;
}

.navigation-bar .logo{    
  float:left;
  margin: 20px;
  color: white;
}

.navigation-bar .bar-item {
  float: left;
  color: white;
  text-align: center;
  padding: 25px 16px;
  text-decoration: none;
  font-size: 20px;
}

.navigation-bar a:hover {
    background-color: #66c2ff;
    max-height: 70px;
    color: black;
}

.navigation-bar select{
    float: right;
    padding: 10px 5px;
    border: none;
    margin-top: 17px;
    margin-right: 16px;
    font-size: 100%;
    color: black;
}

.navigation-bar input[type=text] {
    float: right;
    padding: 10px 5px;
    border: none;
    margin-top: 17px;
    margin-right: 16px;
    font-size: 14px;
    color: black;
}

.square {
    display: inline-block;    
    width: 40%;
    height: 150px;
    vertical-align: middle;
    overflow: hidden;
    padding: 4%;
    margin: 0.5%;
}

/* colors */
.about-us {background-color: #99B898;}
.anunturi-monta {background-color: #FF847C;}
.anunturi-pui {background-color: #E84A5F;}
.contact {background-color: #FECEAB;}
.lightsteelblue{background-color: #B0C4DE;}
.lightskyblue{background-color: #87CEFA;}
.lightcyan{background-color: #E0FFFF;}
.darkorange{background-color: #FF8C00;}
.darkkhaki{background-color: #BDB76B;}
.burly2ood{background-color: #DEB887;}
.mediumseagreen{background-color: #3CB371;}
.palegreen{background-color: #98FB98;}
.yellowgreen{background-color: #9ACD32;}
.mediumaquamarine{background-color: #66CDAA;}
.lightcoral{background-color: #F08080;}
.gold{background-color: #FFD700;}


.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.back-to-top-button{
   box-sizing: content-box !important;
   position: fixed;
   bottom: 0;
   background-color: #FF7F50;
   width: 30px;
   right: 15px;
   text-decoration: none !important;
   z-index: 99;
   border: none; 
   color: black; 
   cursor: pointer; 
   padding: 15px; 
   border-radius: 10px; 
}

.back-to-top-button:hover {
    background-color: red;
}

       
.loginbtn,
.signupbtn{
    padding: 14px 20px;
    background-color: #99B898;
    float: left;
    width: 50%;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #E84A5F;
    float: left;
    width: 50%;
}
      
.barbtn{
    float: right;
    color: white;
    text-align: center;
    font-size: 20px;
    background-color: #2A363B;
    height: 70px;
    width: auto;
    overflow: hidden;
    margin: 0 !important;
}


.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    padding-top: 50px;
    background-color: rgba(0,0,0,0.8);
}

.modal-content {
    padding: 16px;
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 50%; 
}

.closebtn {
    position: absolute;
    right: 22%;
    top: 50px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.closebtn:hover,
.closebtn:focus {
    color: #E84A5F;
    cursor: pointer;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

hr { 
    display: block;
    margin-top: auto;
    margin-bottom: auto;
    width: 88%;
    border-style: inset;
    border-width: 1px;
}
      
.text-anunt{
    margin-left: 7%;
}

.image-box {
    float: left;
    width: 276px;
    height: 200px;
}

.image-box img {
    width: 100%;
    height: auto;
}

.dropbtn {
    background-color: inherit;
    color: white;
    font-size: 20px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown:hover{
    background-color: #66c2ff;
    max-height: 70px;
    color: black;
}
.dropbtn:hover{
    color: black;
}
.dropdown-content {
    display: none;
    position: absolute;
    right:0;
    background-color: #2A363B;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.search-bar{
    background-color: #2A363B;
    position: absolute;
    min-width: 450px;
    right:0;
    display:none;
    z-index:1;
  
}  
.search-crit{
        
    float:right;
    width:max-content;
    margin: 5px;
}

.dropdown:hover .search-bar {
    display: block;
}
/*-------MEDIA-----------*/

@media screen and (max-width: 1000px){
    .navigation-bar a:not(:first-child) {display: none;}

}
@media screen and (max-width: 700px){
    .modal-content{
      width: 85%;
    }
    .closebtn{
      display:none;
    }
    .search-bar{
        min-width: 500px;
    }
}

@media screen and (max-width: 600px){
    .search-bar{
      min-width: 400px;
    }
}
@media screen and (max-width: 550px){

    .search-bar{
      min-width: 300px;
    }
}
@media screen and (max-width: 450px){
    
    .search-bar{
      min-width: 190px;
      width:100%;
      -webkit-transform: scaleY(-1);
      transform: scaleY(-1);
    }
    .search-crit{
      clear: both;
      width: 150px;
      margin: 0;
      -webkit-transform: scaleY(-1);
      transform: scaleY(-1);
    }
}
@media screen and (max-width: 400px){
      .logo{
        width: 100px;
        padding-top: 5px;
        height:auto;
      }   

}

      
.fb{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 5px;
    padding-bottom: 5px;
    width: 40%;
    background-color: #3b5998;
    color: white;
    font-weight: bold;
    font-size: 14px;
      }   
      
.container img {
    width: 100%;
    height: auto;
}
      
.container {
        width: 100%;
      }
    
  .hr-container-first{
     margin-top: 5%;
    }
      
  .hr-container{
    margin-top: 1%; 
    }
         
main {
      margin-top: 30px;
      display: grid;
      grid-template-rows: auto min-content auto;
      grid-template-columns: 5% 40% 40% 5%;
      grid-template-areas: ". img1 desc ."
                           "titlu titlu titlu titlu"
                           ". anunt1 anunt2 .";
      grid-column-gap: 4em;
      grid-row-gap: 2em;
  }
      
    .img1{
      grid-area: img1;
      }
    .desc{
      grid-area: desc;
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
      
    .titlu{
      grid-area: titlu;
      }
    .text--titlu{
      max-width: 99%;
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
      
      @media only screen and (max-width: 1200px){
        main{
          
          grid-template-columns: 5% 45% 45%;
          grid-template-rows: auto auto min-content auto;
          grid-template-areas: ". img1 img1"
                               ". desc desc"
                               ". titlu titlu"
                               ". anunt1 anunt1";
          grid-column-gap: 0;
        }
        .text-anunt{
          margin-left :0%;
        }
        .anunt1{
          grid-area: anunt1;
          grid-column-gap: 1em;
          margin-left: 5%;
      }
        .anunt2{
          display: none;
          grid-area: none;
        }
        .myhr{
          margin: 0;
          width: 100%;
        }
      }
      
      @media only screen and (max-width: 700px){
        .anunt1{
          grid-template-areas: "card1 card1";
        }
        .card1{
          grid-area: card1;
        }
        .card2{
          display: none;
        }
      }
    .text-anunt1{
      padding-left: 7%
      }
    </style>
    
  </head>
  
  <body class="bg">
    <header class="navigation-bar">
      <a  href="http://localhost:81/petrimonials/public/home.php">
        <img class="logo" src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FpetrimonialeALB2.png?1520622937853" height = "35px" >
      </a>
    
      <a class="bar-item" href="http://localhost:81/petrimonials/public/monte.php">Monte</a>
      <a class="bar-item" href="http://localhost:81/petrimonials/public/pui2.php">Vanzari pui</a>
      <a class="bar-item" href="http://localhost:81/petrimonials/public/anunt.php">Adauga anunt</a>
      <a class="bar-item" href="http://localhost:81/petrimonials/public/contact.php">Contact</a>
          
    </header>
    
<!-- back to top button -->
    <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>
    
<!-- nume anunt si categoria -->    
    <div class="hr-container-first">
      <hr>
      
      <h4 class="text-anunt1" >Nume anunt: <span id="titluAnunt">
        <?php
          echo $data[0][5];
        ?>
      </span></h4>
      
      <hr>
    </div>
    <div class="hr-container-first">
      <h4 class="text-anunt1">Categoria: 
        <?php echo $data[0][10]?></h4>
      <hr>
    </div>  
    <?php
      $img = "http://localhost:81/petrimonials/app/models/uploads/".$data[0][12];
    ?>
<main>   
<!-- imaginea cu animalul respectiv -->
  <div class="img1">

  <div class="container">
    <a target="_blank">
      <img src="<?php echo $img ?>" alt="dog" width="300" height="200">
    </a>
  </div>
        
  </div>
    
<!-- detaliile anuntului -->
  <div class="desc">

    <div class="hr-container-first">
      <h4>
        <span>PRET : <?php echo $data[0][9]; ?></span><br>
      </h4>
    </div>
    <div class="hr-container-first">
      <h4>
        <span>ANIMAL: <?php echo $data[0][6] . ', ' . $data[0][8].', '.$data[0][7]; ?></span><br>
      <h4>  
    </div>
    <div class="hr-container-first">
      <h4>
        <span><?php echo $data[0][3]. ', ' .$data[0][4]; ?></span><br>
      </h4>
    </div>
    <div class="hr-container-first">
      <h4>
        <span><?php echo $data[0][11]; ?></span>
      </h4>
    </div>

    <br>
          <i class="fb">
    <a href="#" onclick="share_fb(document.URL);return false;" rel="nofollow" share_url="document.URL" target="_blank">
        DISTRIBUIE PE FACEBOOK
    </a>
    </i>
  </div>
    
<!-- anunturi similare --> 
<div class="titlu">
  <div class="text--titlu">
      <h4 class="text-anunt">Anunturi similare din apropiere</h4>      
      <hr class="myhr">
  </div>
</div>
 
  <div class="anunt1">
      <div class="card1">     
      <?php $img = "http://localhost:81/petrimonials/app/models/uploads/".$data[1][12];
        $link = "http://localhost:81/petrimonials/public/Anunturi/get/".$data[1][0];
      ?>
   
        <img src="<?php echo $img;?>" class="card-img">
        <h2 class="card-title"><?php echo $data[1][5]?></h2>
        <div class="card-content">
          <h3><?php echo $data[1][3]. ', ' .$data[1][4].', '.$data[1][9];?></h3>
          <p><?php echo $data[1][11];?></p>
          <a target="_blank" href="<?php echo $link;?>">Afla mai mult.</a>
        </div>
        
      </div>
      <div class="card2">
      <?php $img = "http://localhost:81/petrimonials/app/models/uploads/".$data[2][12];
        $link = "http://localhost:81/petrimonials/public/Anunturi/get/".$data[2][0];
      ?>

         <img src="<?php echo $img;?>" class="card-img">
        <h2 class="card-title"><?php echo $data[2][5]?></h2>
        <div class="card-content">
          <h3><?php echo $data[2][3]. ', ' .$data[2][4].', '.$data[2][9];?></h3>
          <p><?php echo $data[2][11];?></p>
          <a target="_blank" href="<?php echo $link;?>">Afla mai mult.</a>
        </div>
    </div>
            
  </div>
    
  <div class="anunt2">

      <div class="card3">   
      <?php $img = "http://localhost:81/petrimonials/app/models/uploads/".$data[3][12];
        $link = "http://localhost:81/petrimonials/public/Anunturi/get/".$data[3][0];
      ?>
     
        <img src="<?php echo $img;?>" class="card-img">
        <h2 class="card-title"><?php echo $data[3][5]?></h2>
        <div class="card-content">
          <h3><?php echo $data[3][3]. ', ' .$data[3][4].', '.$data[3][9];?></h3>
          <p><?php echo $data[3][11];?></p>
          <a target="_blank" href="<?php echo $link;?>">Afla mai mult.</a>
        </div>
        
      </div>
      <div class="card4">
        <?php $img = "http://localhost:81/petrimonials/app/models/uploads/".$data[4][12];
          $link = "http://localhost:81/petrimonials/public/Anunturi/get/".$data[4][0];
        ?>
        <img src="<?php echo $img;?>" class="card-img">
        <h2 class="card-title"><?php echo $data[4][5]?></h2>
        <div class="card-content">
          <h3><?php echo $data[4][3]. ', ' .$data[4][4].', '.$data[4][9];?></h3>
          <p><?php echo $data[4][11];?></p>
          <a target="_blank" href="<?php echo $link;?>">Afla mai mult.</a>
        </div>
    </div>
            
  </div>
</main>

  </body>
</html>