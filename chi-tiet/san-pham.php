<?php
require_once "../helpers/common.php";
require_once "../helpers/db.php";
$proId = $_GET['id'];
// chi tiết sản phẩm
$productQuery = "   select 
                            p.*,
                            c.name as cate_name 
                    from products p
                    join categories c
                    on p.cate_id = c.id 
                    where p.id = $proId";
$product = executeQuery($productQuery, false);
// galleries của sản phẩm
$galleryQuery = "select * from product_galleries where pro_id =  $proId";
$galleries    = executeQuery($galleryQuery, true);

// comment cua san pham
$commentQuery = "select * from comments where pro_id = $proId";
$comments = executeQuery($commentQuery, true);

// relate products
$relateQuery = "select * from products where cate_id = " . $product['cate_id'] 
                    . " and id <> $proId limit 4";
$relates = executeQuery($relateQuery, true);
// var_dump($relates);die;

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/airi-v6/airi/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 12:18:21 GMT -->
<head>
    <?php include_once '../layouts/head-styles.php'; ?>
</head>

<body>


    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>
  
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <header class="header header-fullwidth header-style-1">
            <div class="header-inner fixed-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <!-- Main Navigation Start Here -->
                            <nav class="main-navigation">
                                <ul class="mainmenu">
                                    <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                        <a href="index.html" class="mainmenu__link">
                                            <span class="mm-text">Home</span>
                                        </a>
                                        <ul class="megamenu four-column">
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Demo Group 01</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">
                                                            <span class="mm-text">Demo 01</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-02.html">
                                                            <span class="mm-text">Demo 02</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-03.html">
                                                            <span class="mm-text">Demo 03</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-04.html">
                                                            <span class="mm-text">Demo 04</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-05.html">
                                                            <span class="mm-text">Demo 05</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Demo Group 02</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="index-06.html">
                                                            <span class="mm-text">Demo 06</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-07.html">
                                                            <span class="mm-text">Demo 07</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-08.html">
                                                            <span class="mm-text">Demo 08</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-09.html">
                                                            <span class="mm-text">Demo 09</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-10.html">
                                                            <span class="mm-text">Demo 10</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Demo Group 03</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="index-11.html">
                                                            <span class="mm-text">Demo 11</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-12.html">
                                                            <span class="mm-text">Demo 12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-13.html">
                                                            <span class="mm-text">Demo 13</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-14.html">
                                                            <span class="mm-text">Demo 14</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-15.html">
                                                            <span class="mm-text">Demo 15</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Demo Group 04</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="index-16.html">
                                                            <span class="mm-text">Demo 16</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-17.html">
                                                            <span class="mm-text">Demo 17</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-18.html">
                                                            <span class="mm-text">Demo 18</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-19.html">
                                                            <span class="mm-text">Demo 19</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-20.html">
                                                            <span class="mm-text">Demo 20</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="shop-sidebar.html" class="mainmenu__link">
                                            <span class="mm-text">Shop</span>
                                            <span class="tip">Hot</span>
                                        </a>
                                        <ul class="megamenu four-column">
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Shop Layout</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="shop-fullwidth.html">
                                                            <span class="mm-text">FullWidth</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="mm-text">with Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-two-column.html">
                                                            <span class="mm-text">Two columns</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-three-column.html">
                                                            <span class="mm-text">Three columns</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="shop-no-gutter.html">
                                                            <span class="mm-text">Shop No Gutter</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Single Product</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="product-details.html">
                                                            <span class="mm-text">Simple 01</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-02.html">
                                                            <span class="mm-text">Simple 02</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-sticky.html">
                                                            <span class="mm-text">Sticky Info</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-gallery.html">
                                                            <span class="mm-text">Thumbnail Gallery</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-sidebar.html">
                                                            <span class="mm-text">Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-grouped.html">
                                                            <span class="mm-text">Grouped</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-affiliate.html">
                                                            <span class="mm-text">Affiliate</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details-configurable.html">
                                                            <span class="mm-text">Configurable</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="#">
                                                    <span class="mm-text">Shop Pages</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="my-account.html">
                                                            <span class="mm-text">My Account</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html">
                                                            <span class="mm-text">Shopping Cart</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">
                                                            <span class="mm-text">Check Out</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span class="mm-text">Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="order-tracking.html">
                                                            <span class="mm-text">Order tracking</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">
                                                            <span class="mm-text">compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="d-none d-lg-block banner-holder">
                                                <div class="megamenu-banner">
                                                    <div class="megamenu-banner-image"></div>
                                                    <div class="megamenu-banner-info">
                                                        <span>
                                                            <a href="shop-sidebar.html">woman</a>
                                                            <a href="shop-sidebar.html">shoes</a>
                                                        </span>
                                                        <h3>new <strong>season</strong></h3>
                                                    </div>
                                                    <a href="shop-sidebar.html" class="megamenu-banner-link"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="shop-collections.html" class="mainmenu__link">
                                            <span class="mm-text">Collections</span>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children has-children">
                                        <a href="#" class="mainmenu__link">
                                            <span class="mm-text">Pages</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="about-us.html">
                                                    <span class="mm-text">About Us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="team.html">
                                                    <span class="mm-text">Our teams</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">
                                                    <span class="mm-text">Contact us 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us-02.html">
                                                    <span class="mm-text">Contact us 2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="404.html">
                                                    <span class="mm-text">404 page</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="faqs-page.html">
                                                    <span class="mm-text">FAQs page</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="coming-soon.html">
                                                    <span class="mm-text">Coming Soon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children has-children">
                                        <a href="blog.html" class="mainmenu__link">
                                            <span class="mm-text">Blog</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">
                                                    <span class="mm-text">Blog Grid</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="blog-02-columns.html">
                                                            <span class="mm-text">Blog 02 Columns</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-03-columns.html">
                                                            <span class="mm-text">Blog 03 Columns</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">
                                                    <span class="mm-text">Blog List</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="blog.html">
                                                            <span class="mm-text">Blog Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-standard.html">
                                                            <span class="mm-text">Blog Standard</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-no-sidebar.html">
                                                            <span class="mm-text">Blog No Sidebar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-masonary.html">
                                                    <span class="mm-text">Blog Masonary</span>
                                                </a>
                                            </li>
                                            <li class="menu-item-has-children has-children">
                                                <a href="#">
                                                    <span class="mm-text">Blog Details</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="single-post.html">
                                                            <span class="mm-text">Single Post</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="single-post-sidebar.html">
                                                            <span class="mm-text">Single Post Sidebar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="shop-instagram.html" class="mainmenu__link">
                                            <span class="mm-text">New Look</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Main Navigation End Here -->
                        </div>
                        <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                            <!-- Logo Start Here -->
                            <a href="index.html" class="logo-box">
                                <figure class="logo--normal"> 
                                    <img src="assets/img/logo/logo.svg" alt="Logo"/>   
                                </figure>
                                <figure class="logo--transparency">
                                    <img src="assets/img/logo/logo-white.png" alt="Logo"/>  
                                </figure>
                            </a>
                            <!-- Logo End Here -->
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                            <ul class="header-toolbar text-right">
                                <li class="header-toolbar__item d-none d-lg-block">
                                    <a href="#sideNav" class="toolbar-btn">
                                        <i class="dl-icon-menu2"></i>
                                    </a>                                    
                                </li>
                                <li class="header-toolbar__item user-info-menu-btn">
                                    <a href="#">
                                        <i class="fa fa-user-circle-o"></i>
                                    </a>
                                    <ul class="user-info-menu">
                                        <li>
                                            <a href="my-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Check Out</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="order-tracking.html">Order tracking</a>
                                        </li>
                                        <li>
                                            <a href="compare.html">compare</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-toolbar__item">
                                    <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                        <i class="dl-icon-cart4"></i>
                                        <sup class="mini-cart-count">2</sup>
                                    </a>
                                </li>
                                <li class="header-toolbar__item">
                                    <a href="#searchForm" class="search-btn toolbar-btn">
                                        <i class="dl-icon-search1"></i>
                                    </a>
                                </li>
                                <li class="header-toolbar__item d-lg-none">
                                    <a href="#" class="menu-btn"></a>                 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Mobile Header area Start -->
        <header class="header-mobile">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-4">
                        <a href="index.html" class="logo-box">
                            <figure class="logo--normal">
                                <img src="assets/img/logo/logo.svg" alt="Logo">
                            </figure>
                        </a>
                    </div>
                    <div class="col-8">
                        <ul class="header-toolbar text-right">
                            <li class="header-toolbar__item user-info-menu-btn">
                                <a href="#">
                                    <i class="fa fa-user-circle-o"></i>
                                </a>
                                <ul class="user-info-menu">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">Check Out</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html">Order tracking</a>
                                    </li>
                                    <li>
                                        <a href="compare.html">compare</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                    <i class="dl-icon-cart4"></i>
                                    <sup class="mini-cart-count">2</sup>
                                </a>
                            </li>
                            <li class="header-toolbar__item">
                                <a href="#searchForm" class="search-btn toolbar-btn">
                                    <i class="dl-icon-search1"></i>
                                </a>
                            </li>
                            <li class="header-toolbar__item d-lg-none">
                                <a href="#" class="menu-btn"></a>                 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Mobile Navigation Start Here -->
                        <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a href="index.html">
                                        Home
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 01
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index.html">
                                                        Demo 01
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-02.html">
                                                        Demo 02
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-03.html">
                                                        Demo 03
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-04.html">
                                                        Demo 04
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-05.html">
                                                        Demo 05
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 02
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index-06.html">
                                                        Demo 06
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-07.html">
                                                        Demo 07
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-08.html">
                                                        Demo 08
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-09.html">
                                                        Demo 09
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-10.html">
                                                        Demo 10
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 03
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index-11.html">
                                                        Demo 11
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-12.html">
                                                        Demo 12
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-13.html">
                                                        Demo 13
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-14.html">
                                                        Demo 14
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-15.html">
                                                        Demo 15
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Demo Group 04
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="index-16.html">
                                                        Demo 16
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-17.html">
                                                        Demo 17
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-18.html">
                                                        Demo 18
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-19.html">
                                                        Demo 19
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-20.html">
                                                        Demo 20
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-sidebar.html">
                                        Shop
                                        <span class="tip">Hot</span>
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Shop Layout
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="shop-fullwidth.html">
                                                        <span class="mm-text">FullWidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-sidebar.html">
                                                        <span class="mm-text">with Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-two-column.html">
                                                        <span class="mm-text">Two columns</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-three-column.html">
                                                        <span class="mm-text">Three columns</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="shop-no-gutter.html">
                                                        <span class="mm-text">Shop No Gutter</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Single Product
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="product-details.html">
                                                        <span class="mm-text">Simple 01</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-02.html">
                                                        <span class="mm-text">Simple 02</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-sticky.html">
                                                        <span class="mm-text">Sticky Info</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-gallery.html">
                                                        <span class="mm-text">Thumbnail Gallery</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-sidebar.html">
                                                        <span class="mm-text">Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-grouped.html">
                                                        <span class="mm-text">Grouped</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-affiliate.html">
                                                        <span class="mm-text">Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-details-configurable.html">
                                                        <span class="mm-text">Configurable</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="megamenu-title" href="#">
                                                Shop Pages
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="my-account.html">
                                                        My Account
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        Shopping Cart
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        Check Out
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        Wishlist
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="order-tracking.html">
                                                        Order tracking
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        compare
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="d-none d-lg-block banner-holder">
                                            <div class="megamenu-banner">
                                                <div class="megamenu-banner-image"></div>
                                                <div class="megamenu-banner-info">
                                                    <span>
                                                        <a href="shop-sidebar.html">woman</a>
                                                        <a href="shop-sidebar.html">shoes</a>
                                                    </span>
                                                    <h3>new <strong>season</strong></h3>
                                                </div>
                                                <a href="shop-sidebar.html" class="megamenu-banner-link"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-sidebar.html">
                                        Collections
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Pages
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="about-us.html">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="team.html">
                                                Our teams
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">
                                                Contact us 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-us-02.html">
                                                Contact us 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                404 page
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faqs-page.html">
                                                FAQs page
                                            </a>
                                        </li>
                                        <li>
                                            <a href="coming-soon.html">
                                                Coming Soon
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Blog
                                    </a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="#">
                                                Blog Grid
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="blog-02-columns.html">
                                                        <span class="mm-text">Blog 02 Column</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-03-columns.html">
                                                        <span class="mm-text">Blog 02 Column</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog List
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="blog.html">
                                                        <span class="mm-text">Blog Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-standard.html">
                                                        <span class="mm-text">Blog Standard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-no-sidebar.html">
                                                        <span class="mm-text">Blog No Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog-masonary.html">
                                                Blog Masonary
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog Details
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="single-post.html">
                                                        <span class="mm-text">Single Post</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-post-sidebar.html">
                                                        <span class="mm-text">Single Post Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-instagram.html">
                                        New Look
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Navigation End Here -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Header area End -->

        <!-- Breadcrumb area Start -->

        <div class="breadcrumb-area pt--70 pt-md--25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="<?= BASE_URL ?>">Home</a></li>
                            <li><a href="<?= BASE_URL . "danh-muc/danh-sach-sp.php?id=".$product['cate_id'] ?>"><?= $product['cate_name'] ?></a></li>
                            <li class="current"><span><?= $product['name'] ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-full-width">
                <div class="container-fluid">
                    <div class="row pt--40">
                        <div class="col-md-6 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery vertical-slide-nav">
                                    <div class="product-gallery__thumb">
                                        <div class="product-gallery__thumb--image">
                                            <div class="nav-slider slick-vertical" 
                                            data-options='{
                                            "vertical": true, 
                                            "vertical_md": false, 
                                            "infinite_md": false, 
                                            "slideToShow_sm": 4,
                                            "slideToShow_xs": 3,
                                            "arrows": true,
                                            "arrowPrev": "fa fa-angle-up",
                                            "arrowNext": "fa fa-angle-down",
                                            "arrowPrev_md": "dl-icon-left",
                                            "arrowNext_md": "dl-icon-right"
                                            }'>
                                                <?php foreach ($galleries as $gl): ?>
                                                <figure class="product-gallery__thumb--single">
                                                    <img src="<?= BASE_URL . "public/" .$gl['img_url']?>" alt="Products">
                                                </figure>

                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__large-image">
                                        <div class="gallery-with-thumbs">
                                            <div class="product-gallery__wrapper">
                                                <div class="main-slider product-gallery__full-image image-popup">
                                                    <?php foreach ($galleries as $gl): ?>
                                                        <figure class="product-gallery__image zoom">
                                                            <img src="<?= $gl['img_url']?>" alt="Product">
                                                        </figure>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                            <div class="product-summary">
                                <div class="product-rating float-left">
                                    <span>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                    </span>
                                    <a href="#" class="review-link">(1 customer review)</a>
                                </div>
                                <div class="product-navigation">
                                    <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                    <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <h3 class="product-title"><?= $product['name']?></h3>
                                <span class="product-stock in-stock float-right">
                                    <i class="dl-icon-check-circle1"></i>
                                    in stock
                                </span>
                                <div class="product-price-wrapper mb--40 mb-md--10">
                                    <span class="money">$<?= $product['sell_price']?></span>
                                    <span class="old-price">
                                        <span class="money">$<?= $product['ori_price']?></span>
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                                <p class="product-short-description mb--45 mb-sm--20">
                                    <?php echo $product['short_desc']?>
                                </p>
                                <form action="#" class="form--action mb--30 mb-sm--20">
                                    <div class="product-action flex-row align-items-center">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>  
                                </form>
                                <div class="product-extra mb--40 mb-sm--20">
                                    <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                                    <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                                </div>
                                <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="product-meta">
                                        <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF. LA-887</span></span>
                                        <span class="posted_in font-size-12">Categories: 
                                            <a href="shop-sidebar.html">Fashions</a>
                                        </span>
                                        <span class="posted_in font-size-12">Tags: 
                                            <a href="shop-sidebar.html">dress,</a>
                                            <a href="shop-sidebar.html">fashions,</a>
                                            <a href="shop-sidebar.html">women</a>
                                        </span>
                                    </div>
                                    <div class="product-share-box">
                                        <span class="font-size-12">Share With</span>
                                        <!-- Social Icons Start Here -->
                                        <ul class="social social-small">
                                            <li class="social__item">
                                                <a href="facebook.com" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="twitter.com" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="plus.google.com" class="social__link">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="plus.google.com" class="social__link">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Social Icons End Here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                        <div class="col-12">
                            <div class="product-data-tab tab-style-1">
                                <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab" role="tablist">
                                    <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                                        <span>Description</span>
                                    </a>
                                    <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                        <span>Reviews(<?= count($comments)?>)</span>
                                    </a>
                                </div>
                                <div class="tab-content product-data-tab__content" id="product-tabContent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                        <div class="product-description">
                                            <?= $product['short_desc']?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                        <div class="product-reviews">
                                            <h3 class="review__title">1 review for Waxed-effect pleated skirt</h3>
                                            <ul class="review__list">
                                                <?php foreach($comments as $co):?>
                                                <li class="review__item">
                                                    <div class="review__container">
                                                        <div class="review__text">
                                                            <div class="product-rating float-right">
                                                                <span>
                                                                    <?php for($i = 0; $i < $co['star']; $i++):?>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <?php endfor?>
                                                                </span>
                                                            </div>
                                                            <div class="review__meta">
                                                                <strong class="review__author"><?= $co['name']?> </strong>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="review__description">
                                                            <?= htmlentities($co['content'])?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php endforeach?>
                                            </ul>
                                            <div class="review-form-wrapper">
                                                <span class="reply-title"><strong>Add a review</strong></span>
                                                <form action="<?= BASE_URL . "binh-luan"?>" class="form">
                                                    <input type="hidden" name="pro_id" value="<?= $product['id']?>">
                                                    <input type="hidden" name="star" value="1" id="starselect">
                                                    <div class="form-notes mb--20">
                                                        <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="revew__rating">
                                                            <p class="stars selected">
                                                                <a val="1" class="star-select star-1 active" href="#">1</a>
                                                                <a val="2" class="star-select star-2" href="#">2</a>
                                                                <a val="3" class="star-select star-3" href="#">3</a>
                                                                <a val="4" class="star-select star-4" href="#">4</a>
                                                                <a val="5" class="star-select star-5" href="#">5</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-sm-6 mb-sm--20">
                                                                <label class="form__label" for="name">Name<span class="required">*</span></label>
                                                                <input type="text" name="name" id="name" class="form__input">
                                                            </div>  
                                                            <div class="col-sm-6">
                                                                <label class="form__label" for="email">email<span class="required">*</span></label>
                                                                <input type="email" name="email" id="email" class="form__input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label class="form__label" for="email">Your Review<span class="required">*</span></label>
                                                                <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <input type="submit" value="Submit" class="btn btn-style-1 btn-submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
                        <div class="col-12">
                            <div class="row mb--40 mb-md--30">
                                <div class="col-12 text-center">
                                    <h2 class="heading-secondary">Related Products</h2>
                                    <hr class="separator center mt--25 mt-md--15">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="airi-element-carousel product-carousel nav-vertical-center" 
                                    data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true, 
                                    "prevArrow": "dl-icon-left", 
                                    "nextArrow": "dl-icon-right" 
                                    }'
                                    data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'
                                    >
                                        <?php foreach($relates as $p):?>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="<?= BASE_URL . "chi-tiet/san-pham.php?id=" . $p['id'] ?>">
                                                            <img src="<?= $p['image']?>" alt="Product Image" class="primary-image">
                                                            <img src="<?= $p['image']?>" alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            
                                                            <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                        <span class="product-price-old">
                                                            <span class="money">$60.00</span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Footer Start -->
        <footer class="footer footer-3 bg--white border-top">
            <div class="container">
                <div class="row pt--40 pt-md--30 mb--40 mb-sm--30">
                    <div class="col-12 text-md-center">
                        <div class="footer-widget">
                            <div class="textwidget">
                                <a href="index.html" class="footer-logo">
                                    <img src="assets/img/logo/logo.svg" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb--15 mb-sm--20">
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">Company</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Work for Airi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">USEFUL LINKS</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="shop-collections.html">The Collections</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Return Policiy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">SHOPPING</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="shop-instagram.html">Look Book</a></li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                <li><a href="shop-no-gutter.html">Man & Woman</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2 widget-title--icon">Subscribe now and get 10% off new collection</h3>
                            <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" class="newsletter-form newsletter-form--3 mc-form" method="post" target="_blank">
                                <input type="email" name="newsletter-email" id="newsletter-email" class="newsletter-form__input" placeholder="Enter Your Email Address..">
                                <button type="submit" class="newsletter-form__submit">
                                    <i class="dl-icon-right"></i>
                                </button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pt--10 pb--30">
                    <div class="col-md-4">
                        <!-- Social Icons Start Here -->
                        <ul class="social social-small">
                            <li class="social__item">
                                <a href="twitter.com" class="social__link">
                                <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="plus.google.com" class="social__link">
                                <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="facebook.com" class="social__link">
                                <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="youtube.com" class="social__link">
                                <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="instagram.com" class="social__link">
                                <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Social Icons End Here -->
                    </div>
                    <div class="col-md-4 text-md-center">
                        <p class="copyright-text">&copy;2018 AIRI. Designed by HasTech</p>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <img src="assets/img/others/payments-2.png" alt="Payment">
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <!-- Search from Start --> 
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End --> 
        
        <!-- Side Navigation Start -->
        <aside class="side-navigation" id="sideNav">
            <div class="side-navigation-wrapper">
                <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="side-navigation-inner">
                    <div class="widget">
                        <ul class="sidenav-menu">
                            <li><a href="about-us.html">About Airi Shop</a></li>
                            <li><a href="about-us.html">Help Center</a></li>
                            <li><a href="shop-collections.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shop-instagram.html">New Look</a></li>
                        </ul>
                    </div>
                    <div class="widget pt--30 pr--20">
                        <div class="text-widget">
                            <p>
                                <img src="assets/img/others/payments.png" alt="payment">
                            </p>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo dapibus.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p>
                                <a href="#">(+612) 2531 5600</a>
                                <a href="mailto:info@la-studioweb.com">info@la-studioweb.com</a>
                                PO Box 1622 Colins Street West
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget google-map-link">
                            <p>
                                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="youtube.com" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="instagram.com" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p class="copyright-text">&copy; 2018 Airi All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Side Navigation End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="mini-cart-inner">
                    <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-17-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda shorts  </a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-18-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-19-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-2-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

    </div>
    <!-- Main Wrapper End -->


    <?php include_once "../layouts/script.php"; ?>
    <script>
    $('.star-select').on('click', function(){
        var starPoint = $(this).attr('val');
        $('#starselect').val(starPoint);
    })
    </script>
    
</body>


<!-- Mirrored from demo.hasthemes.com/airi-v6/airi/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 12:18:34 GMT -->
</html>