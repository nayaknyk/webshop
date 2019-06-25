// Get the cart from the server when the page is loaded
$(document).ready(function() {
    $.ajax({
        url: asset('api/cart.php'),
    })
    .done(function(data) {
        $('#cart').html(data);
    });
});