<?php
    include '../boot.php'; // laadt alle benodigdheden in
    $title = 'Home';
    include "../partials/head.php";
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="<?= Http::asset('index.php'); ?>">WebShop</a>
</nav>

<body class="bg">
<div class="container" >
    <h2>Fresh Belts</h2>
    <p>We sell the trendiest belts in the business.</p>
    <a class="button btn-secondary a" href="<?= Http::asset('shop'); ?>">Shop Now</a>
    <a class="button btn-secondary a" href="<?= Http::asset('about'); ?>">Read More</a>
    <div class="row">
    </div>
</div>
</body>
<style>
    .a{
        padding: 10px;
        border-radius: 10px;
    }
    .a:hover{
        text-decoration: none; 
    }
    .bg {
  background-image: url("img/banner.jpg");
  /* Full height */
  height: 100%; 
  /* Center and scale the image nicely */
  background-position: fill;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<?php include "../partials/footer.php"; ?>