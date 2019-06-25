<?php

include '../../boot.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart = Cart::get(); //get cart data
    //only allow if cart is non empty
    if($cart['total']!=0){
        //update payment table and get p_id
        $query = 'INSERT INTO payment
        (name, ccnum, expmonth, expyear, cvv)
        VALUES
        (:name, :ccnum, :expmonth, :expyear, :cvv)';

        $db = new DB;
        $p_id = $db->insert($query, [
        'name' => $_POST['cardname'],
        'ccnum' => $_POST['cardnumber'],
        'expmonth' => $_POST['expmonth'],
        'expyear' => $_POST['expyear'],
        'cvv' => $_POST['cvv'],
        ]);
        //get user id
        if(isset($_SESSION['user']['id']))
            $uid = $_SESSION['user']['id'];
        else $uid=0;
        
        //update orders table and get order id
        $amount = $cart['total'];
        $query = 'insert into orders(amount,payment_id,user_id) values (:amount, :payment_id, :user_id)';
        $o_id = $db->insert($query,[
            'amount' => $amount,
            'payment_id' => $p_id,
            'user_id' => $uid,
        ]);
        
        //update order_product table
        foreach($cart['products'] as $prod)
        {
            $query = 'insert into order_product(order_id,product_id,price,quantity) values (:order_id, :product_id, :price, :quantity)';
            $pid = $prod['id'];
            $prod_price =  $_SESSION['cart']['products'][$pid]['price'];
            $prod_quantity = $_SESSION['cart']['products'][$pid]['quantity'];
            $db->insert($query, [
                'order_id' => $o_id,
                'product_id' => $pid,
                'price' => $prod_price,
                'quantity' => $prod_quantity, 
            ]); 
        }
        //after updating all tables, reset cart and redirect to shop page
        unset($_SESSION['cart']);
        header('Location: ../shop/index.php');
    }else{
        echo '<script type="text/javascript">window.alert("Error:Unable to place empty order")</script>';
    }
}
?>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/font-awesome.css">
<link rel="stylesheet" href="../css/checkout.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/bootstrap.css">

<h2 class="text-center">Checkout Form</h2>
<div class="row">
  <div class="col-75">
      <div class="container">
        <h3>Cart</h3>
        <table class="table">
            <thead>
                <tr>
                    <th class="product">Product</th>
                    <th>X</th>
                    <th>Prijs</th>
                </tr>
            </thead>
            <tbody id="cart">
                <!-- jquery data -->
            </tbody>
        </table>
      </div>
      <br>
      
    <div class="container">
      <form action="" method="post">
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter full name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="example@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter city">

            <div class="row">
              <div class="col-50">
                <label for="state">Country</label>
                <input type="text" id="state" name="state" placeholder="Enter country">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Enter zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Confirm Order" class="btn">
      </form>
    </div>
  </div>
</div>
<?php include "../../partials/footer.php"; ?>

