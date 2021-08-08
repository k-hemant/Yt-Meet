<html>

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
    <form class="form" method="POST" action="teacher.php">
  <img style="width:150px;" src="logo.jpeg" alt="" width="82" height="72">
  <h1 class="h4 mb-3 font-weight-normal">Start Online Class</h1>
  <label for="inputtext"  class="sr-only">Enter Live Youtube Url</label>
  <input type="url" id="inputtext" class="form-control" name="url" placeholder="Enter Live Youtube Url" required autofocus>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Start Class</button>
  <p class="mt-5 mb-3 text-muted">&copy; Team Hierarchy</p>
</form>
</body>




</html>