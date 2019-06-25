<?php

include '../../boot.php'; // laadt alle benodigdheden in

// Check if an action is needed
if(@$_GET['id']) {
    if(@$_GET['action'] == 'add') {
        Cart::addToCart($_GET['id']);
    }
    if(@$_GET['action'] == 'remove') {
        Cart::removeFromCart($_GET['id']);
    }
}

// Get the contents of the cart
$cart = Cart::get();

// Loop through the contents of the cart to print all the products
foreach($cart['products'] as $product) { ?>
    <tr>
        <td class=""><?= $product['title']; ?></td>
        <td><button onclick="add()">+</button>
        <?= $product['quantity']; ?>
        <button onclick="sub()">-</button></td>
        <td class="price">&euro; <?= number_format((float)$product['price'], 2, ',', '.'); ?></td>
    </tr>
<?php } 
?>
<tr>
    <td colspan="2">Totaal</td>
    <td class="price"><b>&euro; <?= $cart['total']; ?></b></td>
</tr>

<script>
function add(){
    var productId = <?= $product['id']; ?>;
            var url = '../api/cart.php?id='+productId+'&action=add';
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
}
    
function sub(){
    var productId = <?= $product['id']; ?>;
            var url = '../api/cart.php?id='+productId+'&action=remove';
            $.ajax({
                url: url,
            })
            .done(function(data) { // response aan roepen, dev tools (moeten responden) zo niet dan faalt het
                    alert("your product was removed"); 
                    window.location.reload(); // reload de pagina een keer
                    // als het faalt (xampp uit) dan failt het en dan krijg je dit.
                })
                .catch(function() {
                    alert("failed to add product");
                });
}
</script>