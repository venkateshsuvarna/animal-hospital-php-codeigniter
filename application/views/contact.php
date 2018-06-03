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

<p id="heading1">Contact Fish Creek</p>

<p id="paragraph">Required fields are marked with an asterisk(*).<p>
<table id ="nonboxtable">

<!-- <form action="index.php" method="get" >-->
<!-- <form action="" method=""> -->
<?php echo form_open('proj5controller/getDetailsFromContactPHP');?>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Name: </p></td><td id ="nonboxtable"><input type="text" name="contactname"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* E-mail: </p></td><td id ="nonboxtable"><input type="text" name="contactemail"></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"><p id="paragraph">* Comments: </p></td><td id ="nonboxtable"><textarea rows="3" type="text" name="contactcomments"></textarea></td></tr>
<tr id ="nonboxtable"><td id ="nonboxtable"></td><td id ="nonboxtable"><input type="submit" value="Send Now"></td></tr>
<input type ="hidden" name ="status" value="contact">
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