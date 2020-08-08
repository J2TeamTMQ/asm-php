<?php

    /*  include cart items if it is not empty */
       
        count($product->getData('cart')) !== 0 ? include_once '../views/template/cart-template.php' :  include '../views/template/notFound/cart-notFound.php';
    /*  include cart items if it is not empty */

        /*  include top sale section */
     
        count($product->getData('wishlist')) !== 0 ? include_once '../views/template/wishilist-template.php' :  include '../views/template/notFound/wishlist-notFound.php';
        /*  include top sale section */


    /*  include top sale section */
    include_once '../views/template/new-products.php';
    /*  include top sale section */

?>

