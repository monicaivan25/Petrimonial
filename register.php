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
        if (isset($_POST['inregistrare'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password1 = $_POST['psw'];
            $password = md5(password1);
            $password2 = $_POST['psw-repeat'];

            $result=mysqli_query($conn,"INSERT INTO `users` ( `username`, `parola`, `email`) VALUES ('".$username."','".$password."','" .$email."')");    

            header('Location:http://127.0.0.1:81/petrimoniale/view/home.html');
            exit();
        }
    }

    mysqli_close($conn);

?>