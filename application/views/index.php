<html>
<head>
<!-- <link rel = "stylesheet" type = "text/css" href = "fishcreek.css"> -->

<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css_file/fishcreek.css">

</head>
<body>

<div id = "wrapper">

<h1>Fish Creek Animal Hospital</h1>


<div id ="sidebar">
<nav id ="nav"> 
<a href="index.php">Home</a><br/>
<a href = "services.php">Services</a><br/>
<a href = "askvet.php">Ask The Vet</a><br/>
<a href = "subscribe.php">Subscribe</a><br/>
<a href = "contact.php">Contact</a><br/>
</nav>
</div>

<div id ="maincontent">

	<?php

		/* error_reporting(0);

		if($_GET['status'] == "contact"){
			//echo "Data comes from Contact";
			$contactname = $_GET['contactname']; 
			$contactemail = $_GET['contactemail'];
			$contactcomments = $_GET['contactcomments'];

			if($contactname == "" || $contactemail == "" || $contactcomments == ""){
				echo "<script>";
				echo "alert(\"Some of field were empty while submitting hence the DB could not be updated\")";
				echo "</script>";
				die("");
			}

			if(!filter_var($contactemail,FILTER_VALIDATE_EMAIL)){
				echo "<script>";
				echo "alert(\"Email ID was not specified in proper output hence the DB could not be updated\")";
				echo "</script>";
				die("");
			}

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "wdmassignment4";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "INSERT INTO contact (name, email, questioncomments) VALUES ('".$contactname."', '".$contactemail."', '".$contactcomments."')";
			//echo $sql;
			if ($conn->query($sql) === TRUE) {
    			//echo "Record updated successfully";
			} else {
    			//echo "Error updating record: " . $conn->error;
			}

			$conn->close();
		}
		else if($_GET["status"] == "subscribe"){

			$subscribefullname = $_GET["subscribefullname"];
			$subscribeaddress = $_GET["subscribeaddress"];
			$subscribeemail = $_GET["subscribeemail"];
			$subscribephone = $_GET["subscribephone"];
			$subscribepassword = $_GET["subscribepassword"];
			$servicedropdownid = $_GET["servicedropdown"];
			$petdropdownid = $_GET["petdropdown"];

			if($subscribefullname == "" || $subscribeaddress == "" || $subscribeemail == "" || $subscribephone == "" || $subscribepassword == ""){
				echo "<script>";
				echo "alert(\"Some of field were empty while submitting hence the DB could not be updated\")";
				echo "</script>";
				die("");
			}

			if(ctype_alnum($subscribepassword) && strlen($subscribepassword)>=8 && strlen($subscribepassword)<=16 && preg_match('/[A-Z]/', $subscribepassword) && preg_match('/[a-z]/', $subscribepassword)){
				$subscribepasswordmd5hash = md5($subscribepassword);
			}
			else{
				echo "<script>alert(\"Password should be alphanumeric and between 8 to 16 characters and should contain atleast one uppercase letter and one lowercase letter\");</script>";
				die("");
			}

			if(ctype_digit($subscribephone)){
				
			}
			else{
				echo "<script>alert(\"Mobile number should contain only numbers\");</script>";
				die("");
			}

			//Comment this please
			$check = strpos($subscribeemail, "@");
			$check1 = strpos($subscribeemail,".");

			if($check === false && $check1 === false){

				echo "<script>";
				echo "alert(\"Email ID was not specified in proper output hence the DB could not be updated\")";
				echo "</script>";
				die("");

			}
			//Comment the above please

			if(!filter_var($subscribeemail,FILTER_VALIDATE_EMAIL)){
				echo "<script>";
				echo "alert(\"Email ID was not specified in proper output hence the DB could not be updated\")";
				echo "</script>";
				die("");
			}


			//Check if email is present in the client table or not
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "wdmassignment4";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM client where email = '".$subscribeemail."'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				//Client already present in the database
			    // output data of each row
			    while($row = $result->fetch_assoc()) {

			        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

			    	$clientid = $row["clientid"];

			    	$date = "date";
			    	$sql = "INSERT INTO subscription (clientid, serviceid, petid,".$date.") VALUES ('".$clientid."', '".$servicedropdownid."', '".$petdropdownid."','".date("y-m-d")."')";

			    	if ($conn->query($sql) === TRUE) {
    					//echo "Record updated successfully";
					} else {
    					//echo "Error updating record: " . $conn->error;
					}



			    }


			} else if($result -> num_rows == 0){
				//Client not present in the database

				$sql = "INSERT INTO client (name,address,phone,email,password) VALUES ('".$subscribefullname."', '".$subscribeaddress."', '".$subscribephone."','".$subscribeemail."','".$subscribepasswordmd5hash."')";

				if ($conn->query($sql) === TRUE) {
    					//echo "Client Record inserted successfully";
					} else {
    					//echo "Error updating client record: " . $conn->error;
					}

				$sql = "SELECT * FROM client WHERE email='".$subscribeemail."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {

				    	$clientid = $row["clientid"];

				    	$date = "date";
				    	$sql = "INSERT INTO subscription (clientid, serviceid, petid,".$date.") VALUES ('".$clientid."', '".$servicedropdownid."', '".$petdropdownid."','".date("y-m-d")."')";

				    	if ($conn->query($sql) === TRUE) {
	    					//echo "Record updated successfully";
						} else {
	    					//echo "Error updating record: " . $conn->error;
						}
					        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
					    }
				} else {
				    //echo "0 results";
				}


			    
			}
			$conn->close();

		}
		
		*/
	?>

<p id="heading">Full Services Facility</p>
<p id ="paragraphindex">Veterinarians and staff are on duty 24 hours a day, 7 days a week.</p>
<p id="heading">Years of Experience</p>
<p id ="paragraphindex">Fish Creek Veterinarians have provided quality, dependable care for your beloved animals since 1984.</p>
<p id="heading">Open Door Policy</p>
<p id="paragraphindex">Our professionals welcome owners to stay with their pets during any medical procedure.</p>

<p id="paragraph">8000-555-5555 <br/> 1242 Grassy Lane <br/> Fish Creek, WI 55534</p>

<footer>
<small><i>Copyright © 2016 Fish Creek Animal Hospital</i> <br/>
<a href="mailto:yourfirstname@yourlastname.com" target="_top">yourfirstname@yourlastname.com</a> </small>
</footer>

</div>

</div>

</body>
</html>