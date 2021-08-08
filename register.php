<?php 
    require_once("db.php"); 
  ?>


<html>
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ytmeet</title>
<link href="bootstrap.css" rel="stylesheet">



    <style>
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
	  
	  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form .checkbox {
  font-weight: 400;
}
.form .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form .form-control:focus {
  z-index: 2;
}

	  
    </style>



  <body class="text-center">
    <form class="form" method="POST" action="success.php">
  <img style="width:150px;" src="logo.jpeg" alt="" width="82" height="72">
  <h1 class="h4 mb-3 font-weight-normal">Register your Students</h1>
  <label for="inputtext" class="sr-only">Student Name</label>
  <input type="text" id="inputtext" class="form-control" name="name" placeholder="Student Name" required autofocus>
  <label for="inputtext" class="sr-only">Student Class</label>
  <input type="text" id="inputtext" class="form-control" name="class" placeholder="Student Class" required autofocus>
    <label for="inputtext" class="sr-only">Student Section</label>
  <input type="text" id="inputtext" class="form-control" name="section" placeholder="Student Section" required autofocus>
      <label for="inputtext" class="sr-only">Student Roll no.</label>
  <input type="text" id="inputtext" class="form-control" name="rollno" placeholder="Student Roll no" required autofocus>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  <p class="mt-5 mb-3 text-muted">&copy; Team Hierarchy</p>
</form>
</body>








</html>