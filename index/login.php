<?php	
	if(isset($_POST["login"])){

		$con = new PDO("mysql:host=localhost; dbname=lorraine_14;","root","");

		$sql="SELECT * FROM uuser WHERE uname='". $_POST["txtuname"] ."' and pword='". $_POST["txtpword"] ."'";
			$result=$con->query($sql); 
			$rows=$result->rowCount(); 
			if($rows>=1){
				header("location: profile.php");
			}else{
				echo "Invalid username and password combination";
			}

	}

?>
<?php	
	if(isset($_POST["signup"])){

		// create a connection, just like in basic login
		$con = new PDO("mysql:host=localhost; dbname=lorraine_14;","root","");

		// INSERT INTO is ansql command to add new record to the databse
		$sql="INSERT INTO uuser VALUES('". $_POST["txtuname"] ."', '". $_POST["txtpword"] ."')";
		$con->query($sql); //the command will be executed and a new record will be added to the databse
		echo "New Record Saved!";
	}

?>