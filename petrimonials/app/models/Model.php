<?php
	class Model
	{
		public $conn;
		public function __construct(){
			global $conn;
			$conn = new mysqli ("localhost:3306", "root", "", "tw_2018");
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

		}

		public function closeCon(){
			global $conn;
			mysqli_close($conn);
		}

		public function getCards(){
		    global $conn;

		    $stmt = $conn->prepare('SELECT path, descriere, nume_animal FROM anunturi');

		    if (false === $stmt ) {
		        die('prepare() failed: ' . htmlspecialchars($conn->error));
		    }

		    $stmt->execute();
		    $result = $stmt -> get_result();
		    $rows = mysqli_fetch_all ($result, MYSQLI_ASSOC);

		    return $rows;
		}

		public function insertData($numar_telefon, $oras, $judet, $nume_animal, $tip_animal, $sex_animal, $rasa, $pret, $tip_anunt, $descriere, $target_file){
		    global $conn;

		    $result=mysqli_query($conn,"INSERT INTO `anunturi` ( `numar_telefon`, `oras`, `judet`, `nume_animal`, `tip_animal`, `sex_animal`, `rasa`, `pret`, `tip_anunt`, `descriere`,`path`) VALUES ('".$numar_telefon."','".$oras."','" .$judet."','".$nume_animal."', '".$tip_animal."', '".$sex_animal."', '".$rasa."', '".$pret."', '".$tip_anunt."', '".$descriere."','".$target_file."')");
		   
		    return $result;
		}
		public function insertDataNoPic($numar_telefon, $oras, $judet, $nume_animal, $tip_animal, $sex_animal, $rasa, $pret, $tip_anunt, $descriere){
		    global $conn;

		    $result=mysqli_query($conn,"INSERT INTO `anunturi` ( `numar_telefon`, `oras`, `judet`, `nume_animal`, `tip_animal`, `sex_animal`, `rasa`, `pret`, `tip_anunt`, `descriere`) VALUES ('".$numar_telefon."','".$oras."','" .$judet."','".$nume_animal."', '".$tip_animal."', '".$sex_animal."', '".$rasa."', '".$pret."', '".$tip_anunt."', '".$descriere."')");
		   
		    return $result;
		}
		
		public function iaAnunt($id){
			global $conn;
		    if ($result=mysqli_query($conn,"SELECT * FROM `anunturi` WHERE id=".$id))
		    	{
		    		$row=mysqli_fetch_row($result);
		    	}		    	
		    return $row;
		}
		public function iaID($numar_telefon, $oras, $judet, $nume_animal, $tip_animal, $sex_animal, $rasa, $pret, $tip_anunt, $descriere){
			global $conn;
			$row='';
		    if ($result=mysqli_query($conn,"SELECT id FROM `anunturi` WHERE numar_telefon='".$numar_telefon."' and oras='".$oras."' and judet='".$judet."' and nume_animal='".$nume_animal."' and tip_animal = '" . $tip_animal."' and sex_animal='". $sex_animal."' and rasa='".$rasa."' and pret='". $pret."' and tip_anunt='". $tip_anunt."' and descriere='". $descriere."'"))
		    	{
		    		$row=mysqli_fetch_row($result);
		    	}		
		    return $row;
		}
	}
?>
