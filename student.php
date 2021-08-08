<?php 
    require_once("db.php"); 
  ?>


<html>

<title>ytmeet</title>


<style>

</style>

<?php
if(isset($_POST["code"])){
$name = $_POST["name"];
$code = $_POST["code"];
$file = fopen("youtubelink.txt", "r") or die("Unable to open file!");
$embedcode = fgets($file);


$query = "SELECT * FROM student WHERE name = '$name' AND code='$code'";
$result = mysqli_query($con, $query);
if ($result) {
  if (mysqli_num_rows($result) > 0) {
    echo '
	
	<div>
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
<font face="Arial">
<form method="post">
<input type="hidden" name="name" value='.$name.'>
<input type="hidden" name="code" value='.$code.'>
<button style="height:40px;width:200px;background-color:blue;border:none;color:white;border-radius:10px;" name="attendance">Submit Your Attendance</button><P><P> <b>Screenshot of your whole Screen will be taken.</b>
</form>
</font>
</center>




</td>


<td>


<center>
<body>
  <font face="Arial"><h2>Hello <font color="#552AFF">'.$name.'</font></h2></font>
  </body>
 </center> 

  <video style="border: 3px solid #EEE;" width="100%" height="315" src="" ></video>
 
      <br>
	  <center>
<button id="flipCamera" style="height:40px;width:150px;background-color:blue;border:none;color:white;border-radius:10px;" >Refresh Webcam</button>
</center>
<br>


	
</td>


</table>
</div>
</center>
</div>
	
	';
	fclose($file);
	
	
	
	
	
	
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
} else {
  echo 'Error: '.mysqli_error();
}
}








else{}
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

<script>

var front = false;
var video = document.querySelector('video');
  document.getElementById('flipCamera').onclick = function() { front = !front; };
  var constraints = { video: { facingMode: (front? "user" : "environment"), width: 640, height: 480  } };
  navigator.mediaDevices.getUserMedia(constraints)
  .then(function(mediaStream) {
    video.srcObject = mediaStream;
    video.onloadedmetadata = function(e) {
    video.play();
};
})
.catch(function(err) { console.log(err.name + ": " + err.message); })

</script>


</html>