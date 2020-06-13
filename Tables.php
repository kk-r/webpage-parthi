<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content = "30" />
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 40%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}

#customers th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

#customers tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

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

<center>
<?php
	$server = "localhost";
	$username = "user name";
	$password = "passwrd";
	$database="databse name";

//$con=mysqli_connect("localhost","root","","power");
$con=mysqli_connect($server,$username,$password,$database);

$select_db=mysqli_select_db($con,"turbolog");
$query="select * from MyLog";
$results=mysqli_query($con,$query);
$rows=mysqli_num_rows($results);
$rowcount=mysqli_num_rows($results);
?>
</head>
<body>
<ul>
  <li><a href="index.php">Turbo</a></li>
  <li><a href="Tables.php">Tables</a></li>
  <li><a href="delete.php">Delete All</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
<table id="customers">
  <tr>
	<th>Sl.No</th>
    <th>Date</th>
	<th>Time</th>
	<th>IMIE</th>
    <th>DATA</th>
  </tr>
  <?php
  $i=0;
  	if($rowcount < 10)
	 	$srow = 0;
	else
		$srow = $rowcount - 10;
	echo "<h1><br> Total Row count is ... " . $rowcount . "</h1>";
	$query= "select * from MyLog LIMIT ". $srow . "," . 10;
	$LastVal = $rowcount-10;
	$results=mysqli_query($con,$query);
	$rows=mysqli_num_rows($results);
	$rowcount=mysqli_num_rows($results);
	//echo "<br> qurery is ... " . $query;
	//echo "<br> Total Row count is ... " . $rowcount;
	
while($rows=mysqli_fetch_array($results))
{
$f1=date_create($rows['log_time']);
$f2=$rows['log_imie'];
$f3=$rows['log_data'];
if($i % 2 == 0)
{
	echo '<tr class="alt">';
}
else
{
	echo '<tr>'; 
}
$crow = $i + $srow+ 1 ;
?>

<td><?php echo $crow ?></td>
<td><?php echo date_format($f1,"d/m/Y"); ?></td>
<td><?php echo date_format($f1,"H:i:s"); ?></td>
<td><?php echo $f2; ?></td>
<td><?php echo number_format($f3, 3, '.', ''); ?></td>
</tr>
<?php
 $i++;
}
?>
</table>
</center>
</body>
</html>
