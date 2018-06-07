<?php
     session_start();
     session_unset();
     session_destroy();
?>

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
  
  <body style="background-color: #FF847C">
   <header class="navigation-bar">
      <a  href="home.php">
        <img class="logo" src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FpetrimonialeALB2.png?1520622937853" height = "35px" >
      </a>
    
      <a class="bar-item" href="monte.php">Monte</a>
      <a class="bar-item" href="pui2.php">Vanzari pui</a>
      <a class="bar-item" href="anunt.php">Adauga anunt</a>
      <a class="bar-item" href="contact.php">Contact</a>

      <button onclick="topFunction()" class="back-to-top-button" id="myBtn" title="Go to top">Top</button>

      <!--Search Menu-->
     
    </header>
    

    
    
<!-- BOOTY -->
<div class="boody" style="padding: 100px">
      

<h2 >Ai fost delogat!</h2>
      
</div>
    
    
  </body>
</html>
