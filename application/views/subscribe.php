<html>
<head>
<!-- <link rel = "stylesheet" type = "text/css" href = "fishcreek.css"> -->
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css_file/fishcreek.css">
</head>
<body>

	<?php echo validation_errors(); ?>

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

<p id="heading1"><b>Subscribe Fish Creek</b></p>

<p id="paragraph">Required fields are marked with an asterisk(*).</p>

<table id ="nonboxtable">
<!-- <form action="index.php" method="get"> -->
<?php echo form_open('proj5controller/getDetailsFromSubscribePHP');?>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Client Full Name: </p></td><td id ="nonboxtable"><input type="text" name="subscribefullname"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Address: </p></td><td id ="nonboxtable"><input type="text" name="subscribeaddress"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* E-mail: </p></td><td id ="nonboxtable"><input type="text" name="subscribeemail"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Phone: </p></td><td id ="nonboxtable"><input type="text" name="subscribephone"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Password: </p></td><td id ="nonboxtable"><input type="password" name="subscribepassword"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Type of Service: </p></td><td id ="nonboxtable"><select name = "servicedropdown">

  <?php

  	foreach($servicelistsubscribe as $service){
  		echo "<option value =\"".$service->serviceid."\">".$service->servicename."</option>";
  	}

  	/*$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wdmassignment4";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM service";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {

    		echo "<option value =\"".$row["serviceid"]."\">".$row["servicename"]."</option>";

        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    	}
	} else {
    	echo "0 results";
	}
	$conn->close();

*/

  ?>
  <!-- <option value="servicename">Service Name</option>
  <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option3">Option 3</option> -->
</select></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Pet: </p></td><td id ="nonboxtable"><select name = "petdropdown" required>
  
  <?php
  foreach($petlistsubscribe as $pet){
 		echo "<option value =\"".$pet->petid."\">".$pet->petname."</option>";
 		
  	}

  	/*$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wdmassignment4";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM pet";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {

    		echo "<option value =\"".$row["petid"]."\">".$row["petname"]."</option>";

        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    	}
	} else {
    	echo "0 results";
	}
	$conn->close(); */


  ?>


  <!-- <option value="petname">Pet Name</option>
  <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option3">Option 3</option> -->
</select></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"></td><td id ="nonboxtable"><input type="submit" value="Send Now"></td></tr>
<input type ="hidden" name ="status" value="subscribe">
</form>
</table>

<footer>
<small><i>Copyright © 2016 Fish Creek Animal Hospital</i> <br/>
<a href="mailto:yourfirstname@yourlastname.com" target="_top">yourfirstname@yourlastname.com</a> </small>
</footer>

</div>

</div>

</body>
</html>