<?php

	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "tw_2018";
	$conn = mysqli_connect($servername,$user,$password,$dbname);
	if(!$conn){
		die("<p>Eroare la conectarea la baza de date, va rugam reincercati mai tarziu</p>   " . mysqli_connect_error());
	}
	else    {
		
	$numar_telefon = $_POST['numar_telefon'];
	$oras = $_POST['oras'];
	$judet = $_POST['judet'];
	$nume_animal = $_POST['nume_animal'];
	$tip_animal = $_POST['tip_animal'];
	$rasa = $_POST['rasa'];
	$pret = $_POST['pret'];
	$tip_anunt = $_POST['tip_anunt'];
	$descriere = $_POST['descriere'];

	//if connected then Select Database.
	//$db=mysql_select_db("tw_2018",$con);
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$result=mysqli_query($conn,"INSERT INTO `anunturi` ( `numar_telefon`, `oras`, `judet`, `nume_animal`, `tip_animal`, `rasa`, `pret`, `tip_anunt`, `descriere`,`path`) VALUES ('".$numar_telefon."','".$oras."','" .$judet."','".$nume_animal."', '".$tip_animal."', '".$rasa."', '".$pret."', '".$tip_anunt."', '".$descriere."','".$target_file."')");    
	} else {
        echo "Auleu buba.";
    }
}
}

	mysqli_close($conn);
?>

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
  
  <body style="background-color: #FF847C">
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
<br>

    
    <div style="color: white;padding: 100px;">
  <h2>
  
    Anunt adaugat!</h2> <h3>
   Va puteti accesa anuntul <a href="templateanunt.html">aici</a>.
    </h3> 
    </div>
    
   
    </body>
</html>

 
