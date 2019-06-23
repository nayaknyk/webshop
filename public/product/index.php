<?php
    include '../../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products WHERE slug = :slug';

    $db = new DB;
    $product = $db->find($query, ['slug' => $_GET['slug']]);
    $title = $product['title'];
    include "../../partials/head.php";

    include "../../partials/cart.php";

    include "../../partials/menu.php"; ?>

    <div class="container product">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?= Http::asset('img/'.$product['image']); ?>">
            </div>
            <div class="col-sm-6">
                <h1><?= $product['title']; ?></h1>
                <br>
                <?= $product['description']; ?>
                <br>
                <a class="btn btn-success order add-btn">Toevoegen aan winkelmand</a>
            </div>
        </div>
    </div>

    <script>
        /** Perform an http request on click of the add-btn
         * @see https://api.jquery.com/jQuery.Ajax/#jQuery-ajax-url-settings
         */
        document.querySelector(".add-btn").addEventListener('click', function() {
            var productId = <?= $product['id']; ?>;
            var url = '../api/cart.php?id='+productId+'&action=add';
            console.log(url);// back end call
            $.ajax({
                url: url,
            })
            .done(function(data) { // response aan roepen, dev tools (moeten responden) zo niet dan faalt het
                    alert("your product was added"); 
                    window.location.reload(); // reload de pagina een keer
                    // als het faalt (xampp uit) dan failt het en dan krijg je dit.
                })
                .catch(function() {
                    alert("failed to add product");
                });
        });
    </script>

<?php include "../../partials/footer.php"; ?>
