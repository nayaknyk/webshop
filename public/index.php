<?php
    include '../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products ORDER By title';
    $db = new DB;
    $products = $db->get($query);
    $title = 'Home';
    include "../partials/head.php";
?>

<?php include "../partials/menu.php"; ?>
<div class="container">
    <h2>Items on sale</h2>

    <div class="row">
        <?php foreach($products as $product) { ?>
            <div class="col-sm-4">
                <a href="<?= Http::asset('shop/'.$product['slug']); ?>">
                    <?= $product['title']; ?>
                </a><br>
                <img src="<?= Http::asset('img/'.$product['image']); ?>" style="width: 200px; height: 200px">
            </div>
        <?php } ?>
    </div>
</div>

<?php include "../partials/footer.php"; ?>

