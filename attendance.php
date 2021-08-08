<?php 
    require_once("db.php"); 
  ?>


<style>



.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}   

</style>

<?php

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM attendance order by id desc ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	$name=$row["name"];
	$image=$row["attendanceproof"];
	$time=$row["attendancetime"];
	echo "
	<font face='Arial'>
	<font color='#2A00FF'><b>$name</b></font> - <font size='1'>$time</font>
	<br>
	<img src='attendance/$image' width='300px'><p>
	
	
	</font>
	<P>
	";
	
  }
} else {
  echo "0 results";
}
$con->close();


?>

<div style="bottom:1;position:fixed;">
<center>
<a href="" class="btn">Refresh</a>
</center>
</div>
