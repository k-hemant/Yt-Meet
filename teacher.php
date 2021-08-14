<?php 
    require_once("db.php"); 
  ?>


<html>

<title>ytmeet</title>


<style>

</style>

<?php
if(isset($_POST["url"])){
$url = $_POST["url"];


$step1=explode('v=', $url);
$step2 =explode('&',$step1[1]);
$vedio_id = $step2[0];

$file = fopen("youtubelink.txt", "w") or die("Unable to open file!");
$txt = "$vedio_id";
fwrite($file, $txt);
fclose($file);


$file = fopen("youtubelink.txt", "r") or die("Unable to open file!");
$embedcode = fgets($file);
	
echo '	<div>
<center>
<div style="width:80%">
<table>

<td>
  <img style="width:150px;" src="logo.jpeg" alt="" width="72" height="72">
  <br>
  <div style="  position: relative;
  border: 5px solid black;
  overflow: hidden;">
<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/'.$embedcode.'?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<p>
<center>

</center>




</td>


<td>

<font face="Arial">
<center>
<h2>Attendance</h2>

<body style="margin:0px;padding:0px;overflow:hidden">
    <iframe src="attendance.php" frameborder="0" style="overflow:hidden;height:500px;width:100%;scroll:none;" height="100%" width="100%"></iframe>
</body>

</center>
<br>
</font>

	
</td>


</table>
</div>
</center>
</div>
	';
	
	
	
	
  } else {
    echo '
	<center>
	<p>
	  <img style="width:130px;" src="logo.jpeg" alt="" width="72" height="72">
	<P>
	<font face="Arial">
	<h2>Incorrect Details</h2>
	<br>
	
	</font>
	
	</center>
	';
  }









?>

<?php
if(isset($_POST["attendance"])){

$name=$_POST["name"];
$code=$_POST["code"];
$date=date_default_timezone_set("Asia/Calcutta");
$date=date('l jS \of F Y h:i:s A');
$rand=rand(1,999999);
$image=md5('$name$code$rand$date');
$attendanceproof="$image$rand.png";
	
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$im = imagegrabscreen();
imagepng($im, "attendance/$attendanceproof");
imagedestroy($im);

 $query = "INSERT INTO attendance (name,code,attendancetime,attendanceproof)
      	    	  VALUES ('$name','$code','$date','$attendanceproof')";
           $results = mysqli_query($con, $query);


echo '<script>alert("Attendance has been Submitted.")</script>';

$con->close();	
}
else{}
?>




</html>
