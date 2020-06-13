<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.php">Turbo</a></li>
  <li><a href="Tables.php">Tables</a></li>
  <li><a href="#contact">Delete All</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
<?php
	$server = "localhost";
	$username = "user name";
	$password = "passwrd";
	$database="databse name";

	$con=mysqli_connect($server,$username,$password,$database);

	$select_db=mysqli_select_db($con,"turbolog");
	$query="DELETE FROM `MyLog`";
	$results=mysqli_query($con,$query);
	echo "<h1><center> Delete Sucessfuly.. </center></h1>";
?>
</body>
</html>