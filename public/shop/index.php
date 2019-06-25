<?php
    include '../../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products ORDER By title';
    $db = new DB;
    $products = $db->get($query);
    $title = 'Home';
    include "../../partials/head.php";
?>

<?php include "../../partials/menu.php"; ?>
<div class="container">
    <h2>Items on sale</h2>

    <div class="row">
        <?php foreach($products as $product) { ?>
            <div class="col-sm-4">
                <a href="<?= Http::asset('product/index.php?slug='.$product['slug']); ?>">
                    <?= $product['title']; ?>
                <br>
                <img src="<?= Http::asset('img/'.$product['image']); ?>" style="width: 200px; height: 200px; margin-bottom: 15px">&nbsp
                <span>Price: €<?= $product['price']; ?></span>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<style>
    .col-sm-4{
        border-style: solid;
        border-width: thin;
        margin: 10px;
        border-radius: 10px;
    }
    .navbar-dark{
        background-color: #007bff;
    }
    .navbar-brand{
        color:white;
    }
    a{
        color:black;
    }
</style>
<?php include "../../partials/footer.php"; ?>