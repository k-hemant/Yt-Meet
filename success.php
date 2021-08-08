<?php 
    require_once("db.php"); 
  ?>
<html>

<title>ytmeet</title>

<link href="bootstrap.css" rel="stylesheet">

<style>

.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}

.footer {
  background-color: #f5f5f5;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

</style>





<?php
if(isset($_POST["rollno"])){

$name=$_POST["name"];
$class=$_POST["class"];
$section=$_POST["section"];
$rollno=$_POST["rollno"];
$date=date_default_timezone_set("Asia/Calcutta");
$date=date('l jS \of F Y h:i:s A');
$rand=rand(1,999999);
$code=md5('$class$section$rollno$rand');

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $query = "INSERT INTO student (name,class,section,rollno,code)
      	    	  VALUES ('$name','$class','$section','$rollno','$code')";
           $results = mysqli_query($con, $query);

echo "



<body class='d-flex flex-column h-100'>
<main role='main' class='flex-shrink-0'>
  <div class='container'>
    <h1 class='mt-5'>Student has been Registered Successfully.</h1>
    <p class='lead'>Student code : <font color='#2A55FF'>$code</font> </p>
    
  </div>
</main>
</body>


";

$con->close();	
	
	
	
	

	
}

else{}
?>

</html>