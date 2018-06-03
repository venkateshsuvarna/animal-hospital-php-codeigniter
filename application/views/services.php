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

	echo "<ul>";
  	foreach($servicelist as $service){
  		echo '<li><b>'.$service->servicename.'</b></li>';
  		echo '<p id="paragraph">'.$service->description.'</p>';
  	}
  	echo "</ul>";


/*echo "<ul>";

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

$sql = "SELECT * FROM service";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	echo "<li><b>".$row["servicename"]."</b></li>";
    	echo "<p id = \"paragraph\">".$row["description"]."</p>";

        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo "</ul>";

*/

?>


<!-- <ul>
<li><b>Medical Services</b></li>
<p id="paragraph">We offer state-of-the-art equipment and technology.</p>
<li><b>Surgical Services</b></li>
<p id="paragraph">Full range of surgical procedures including orthopedics and emergency surgeries.</p>
<li><b>Dental Care</b></li>
<p id="paragraph">A dental exam can determine whether your pet needs preventive dental care such as scaling and polishing.</p>
<li><b>House Calls</b></li>
<p id="paragraph">The elderly,physically challenged, and multiple pet households often find our in-home veterinary service helpful and convenient</p>
<li><b>Emergencies</b></li>
<p id="paragraph">At least one of our doctors is on call every day and night.</p>
</ul> -->

<footer>
<small><i>Copyright © 2016 Fish Creek Animal Hospital</i> <br/>
<a href="mailto:yourfirstname@yourlastname.com" target="_top">yourfirstname@yourlastname.com</a> </small>
</footer>

</div>

</div>

</body>
</html>