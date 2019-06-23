<?php
    include '../../boot.php'; // load all functions

    // If form has posted, check login data with database and login if correct
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // dd($_POST);
        Auth::attempt($_POST['email'], $_POST['password']);
    }

    // If loggend in, redirect to url
    if(Auth::check()) {
        header("Location: ../index.php");
    }

    $title = 'Inloggen';
    include "../../partials/head.php";
?>
<link href="../css/login.css" rel="stylesheet" type="text/css">
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
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

  <body class="text-center bg">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://firebasestorage.googleapis.com/v0/b/blackbox-243206.appspot.com/o/img.png?alt=media&token=d3548eea-511f-420e-8276-29dc84667134");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

form{
    border-style:solid;
    border-radius: 15px;
    border-color:dimgray;
        
}
</style>  <form class="form-signin" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
  <label for="loginEmail" class="sr-only">Email address</label>
  <input type="email" id="loginEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="loginPassword" class="sr-only">Password</label>
  <input type="password" id="loginPassword" name="password" class="form-control" placeholder="Password" required style="margin-top: 10px;">
  <button class="btn btn-lg btn-secondary btn-block" type="submit">Inloggen</button><br>
</form>

<?php include "../../partials/footer.php"; ?>
