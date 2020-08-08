<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Viet Nam</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom css -->
    <link rel="stylesheet" href="../views/css/style.css">

    <?php
    // require functions.php file
    require ('../views/functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
    <!-- !Primary Navigation -->
    <nav class="header">
        <a href="index.php">
            <img class="header_logo" src="http://pngimg.com/uploads/amazon/amazon_PNG11.png" alt="logo">
        </a>
        <div class="header_search">
            <input type="text" class="header_searchInput">
            <i class="fas fa-search"></i>
        </div>
        <div class="header_nav">
            <a class="header_link" href="?act=login">
                <div class="header_option">
                    <span class="header_optionLineOne">Hello, Sign in</span>
                    <span class="header_optionLineTwo">Account & List</span>
                </div>
            </a>

            <a class="header_link" href="#">
                <div class="header_option">
                    <span class="header_optionLineOne">Returns</span>
                    <span class="header_optionLineTwo">& Orders</span>
                </div>
            </a>

            <a class="header_link" href="#">
                <div class="header_option">
                    <span class="header_optionLineOne">Your</span>
                    <span class="header_optionLineTwo">Prime</span>
                </div>
            </a>
            <a class="header_link" href="?act=cart">
                <div class="header_optionBasket" >
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class=""><?php echo count($product->getData('cart')); ?></span>
                </div>
            </a>
        </div>
    </nav>

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">