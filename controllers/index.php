<?php
    include ('../views/header.php');

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'cart':
                include ('../views/cart.php');
            break;
            case 'products':
                include ('../views/template/products.php');
            break;
            case 'login':
                include ('../views/template/login.php');
            break;
            default:
                include ('../views/template/banner-area.php');
                include ('../views/template/top-sale.php');
                include ('../views/template/special-price.php');
                include ('../views/template/banner-ads.php');
                include ('../views/template/new-products.php');
                include ('../views/template/blogs.php');
            break;
        }
    } else {
        include ('../views/template/banner-area.php');
        include ('../views/template/top-sale.php');
        include ('../views/template/special-price.php');
        include ('../views/template/banner-ads.php');
        include ('../views/template/new-products.php');
        include ('../views/template/blogs.php');
    }
    
    include ('../views/footer.php');

?>

