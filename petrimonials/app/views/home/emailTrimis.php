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
  
  <body>
<header class="navigation-bar">
      <a  href="../../public/home.php">
        <img class="logo" src="https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2FpetrimonialeALB2.png?1520622937853" height = "35px" >
      </a>
    
      <a class="bar-item" href="../../public/monte.php">Monte</a>
      <a class="bar-item" href="../../public/pui2.php">Vanzari pui</a>
      <a class="bar-item" href="../../public/anunt.php">Adauga anunt</a>
      <a class="bar-item" href="../../public/contact.php">Contact</a>
    
    </header>


    
    <div style="padding: 100px; background-color:#99B898;height:100%;">
    <h2>
       Va multumim ca ne-ati contactat. </h2> <h3>
       Va vom raspunde in cel mai scurt timp posibil!
    </h3> 
    </div>
    
   
    </body>
</html>

 
 
