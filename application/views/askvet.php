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
<table>
<nav id ="nav">
<a href="index.php">Home</a><br/>
<a href = "services.php">Services</a><br/>
<a href = "askvet.php">Ask The Vet</a><br/>
<a href = "subscribe.php">Subscribe</a><br/>
<a href = "contact.php">Contact</a><br/>
</nav>
</table>
</div>

<div id ="maincontent">

<p id="paragraph"><a href = "contact.php">Contact</a> us if you have a question that you would like answered here. <br/><br/></p>

<?php

echo "<ul>";
  	foreach($questions as $questiontemp){
  		echo '<p id="heading">'.$questiontemp->question.'</p><br/>';
  		echo '<p id="paragraph">'.$questiontemp->answer.'</p><br/>';
  	}
  	echo "</ul>";

/*
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

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	echo "<p id=\"heading\">".$row["question"]."</p><br/>";
    	echo "<p id=\"paragraph\">".$row["answer"]."</p><br/>";

        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo "</ul>";

*/
?>



<!-- <p id="heading">Our dog, Sparky, likes to eat whatever the kids are snacking on. Is it OK for the dog to eat chocolate?</p> <br/>
<p id="paragraph">Chocolate is toxic to dogs. Please do not feed your dog chocolate. Try playing a game with your children - when you feed them people treats, they can feed Sparky Dog treats.</p>
<br/> -->

<footer>
<small><i>Copyright © 2016 Fish Creek Animal Hospital</i> <br/>
<a href="mailto:yourfirstname@yourlastname.com" target="_top">yourfirstname@yourlastname.com</a> </small>
</footer>

</div>

</div>

</body>
</html>