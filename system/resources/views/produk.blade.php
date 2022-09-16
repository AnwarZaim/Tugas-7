<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Spike shoes Website Template | Home :: w3layouts</title>
    <link href="{{ url('/public') }}/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <!----start-alert-scroller---->
    <script src="{{ url('/public') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/public') }}/js/jquery.easy-ticker.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo').hide();
            $('.vticker').easyTicker();
        });
    </script>
    <!----start-alert-scroller---->
    <!-- start menu -->
    <link href="{{ url('/public') }}/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ url('/public') }}/js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    <script src="{{ url('/public') }}/js/menu_jquery.js"></script>
    <!-- //End menu -->
    <!---slider---->
    <link rel="stylesheet" href="{{ url('/public') }}/css/slippry.css">
    <script src="{{ url('/public') }}/js/jquery-ui.js" type="text/javascript"></script>
    <script src="{{ url('/public') }}/js/scripts-f0e4e0c2.js" type="text/javascript"></script>
    <script>
        jQuery('#jquery-demo').slippry({
            // general elements & wrapper
            slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
            // options
            adaptiveHeight: false, // height of the sliders adapts to current slide
            useCSS: false, // true, false -> fallback to js if no browser support
            autoHover: false,
            transition: 'fade'
        });
    </script>
    <!----start-pricerage-seletion---->
    <script type="text/javascript" src="{{ url('/public') }}/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/css/jquery-ui.css">
    <script type='text/javascript'>
        //<![CDATA[
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [100, 400],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
                "values", 1));

        }); //]]>
    </script>
    <!----//End-pricerage-seletion---->
    <!---move-top-top---->
    <script type="text/javascript" src="{{ url('/public') }}/js/move-top.js"></script>
    <script type="text/javascript" src="{{ url('/public') }}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1200);
            });
        });
    </script>
    <!---//move-top-top---->
</head>

<body>
    <!---start-wrap---->
    <!---start-header---->
    <div class="header">
        <div class="top-header">
            <div class="wrap">
                <div class="top-header-left">
                    <ul>
                        <!---cart-tonggle-script---->
                        <script type="text/javascript">
                            $(function() {
                                var $cart = $('#cart');
                                $('#clickme').click(function(e) {
                                    e.stopPropagation();
                                    if ($cart.is(":hidden")) {
                                        $cart.slideDown("slow");
                                    } else {
                                        $cart.slideUp("slow");
                                    }
                                });
                                $(document.body).click(function() {
                                    if ($cart.not(":hidden")) {
                                        $cart.slideUp("slow");
                                    }
                                });
                            });
                        </script>
                        <!---//cart-tonggle-script---->
                        <li><a class="cart" href="#"><span id="clickme"> </span></a></li>
                        <!---start-cart-bag---->
                        <div id="cart">Your Cart is Empty <span>(0)</span></div>
                        <!---start-cart-bag---->
                        <li><a class="info" href="#"><span> </span></a></li>
                    </ul>
                </div>
                <div class="top-header-center">
                    <div class="top-header-center-alert-left">
                        <h3>FREE DELIVERY</h3>
                    </div>
                    <div class="top-header-center-alert-right">
                        <div class="vticker">
                            <ul>
                                <li>Applies to orders of $50 or more. <label>Returns are always free.</label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="top-header-right">
                    <ul>
                        <li><a href="{{ url('login') }}">Login</a><span> </span></li>
                        <li><a href="register.html">Join</a></li>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----start-mid-head---->
        <div class="mid-header">
            <div class="wrap">
                <div class="mid-grid-left">
                    <form>
                        <input type="text" placeholder="What Are You Looking for?" />
                    </form>
                </div>
                <div class="mid-grid-right">
                    <a class="logo" href="{{ url('index') }}"><span> </span></a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//End-mid-head---->
        <!----start-bottom-header---->
        <div class="header-bottom">
            <div class="wrap">
                <!-- start header menu -->
                <ul class="megamenu skyblue">
                    <li class="active grid"><a class="color4" href="{{ url('index') }}">Home</a><span> </span>
                    </li>
                    <li class="active grid"><a class="color4" href="{{ url('produk') }}">Produk</a><span> </span>
                    </li>
                    <li class="active grid"><a class="color4" href="#">Kategori</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Men</h4>
                                        <ul>
                                            <li><a href="products.html">new arrivals</a></li>
                                            <li><a href="products.html">men</a></li>
                                            <li><a href="products.html">women</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">brands</a></li>
                                        </ul>
                                    </div>
                                    <div class="h_nav">
                                        <h4>help</h4>
                                        <ul>
                                            <li><a href="products.html">trends</a></li>
                                            <li><a href="products.html">sale</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="products.html">trends</a></li>
                                            <li><a href="products.html">sale</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>account</h4>
                                        <ul>
                                            <li><a href="products.html">login</a></li>
                                            <li><a href="products.html">create an account</a></li>
                                            <li><a href="products.html">create wishlist</a></li>
                                            <li><a href="products.html">my shopping bag</a></li>
                                            <li><a href="products.html">brands</a></li>
                                            <li><a href="products.html">create wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="products.html">trends</a></li>
                                            <li><a href="products.html">sale</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="products.html">new arrivals</a></li>
                                            <li><a href="products.html">men</a></li>
                                            <li><a href="products.html">women</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1 women">
                                    <div class="women-pic">
                                        <img src="{{ url('/public') }}/images/women.png" title="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col2"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                            </div>
                        </div>
                    </li>


                </ul>

            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="price-rage">
            <h3>Weekly selection:</h3>
            <div id="slider-range">
            </div>
        </div>
    </div>
    <!----//End-price-rage--->
    <!--- start-content---->
    <div class="content">
        <div class="wrap">
            <div class="content-left">
                <div class="content-left-top-grid">
                    <div class="content-left-price-selection">
                        <h4>Select Price:</h4>
                        <div class="price-selection-tree">
                            <span class="col_checkbox">
                                <input id="10" class="css-checkbox10" type="checkbox">
                                <label class="normal"><i for="10" name="demo_lbl_10" class="css-label10"> </i>
                                    400</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="11" class="css-checkbox11" type="checkbox">
                                <label class="active1"><i for="11" name="demo_lbl_11" class="css-label11">
                                    </i>350</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="12" class="css-checkbox12" type="checkbox">
                                <label class="normal"><i for="12" name="demo_lbl_12" class="css-label12"> </i>
                                    300</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="13" class="css-checkbox13" type="checkbox">
                                <label class="normal"><i for="13" name="demo_lbl_13" class="css-label13">
                                    </i>250</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="14" class="css-checkbox14" type="checkbox">
                                <label class="normal"><i for="14" name="demo_lbl_14" class="css-label14"> </i>
                                    200</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="15" class="css-checkbox15" type="checkbox">
                                <label class="normal"><i for="15" name="demo_lbl_15" class="css-label15">
                                    </i>150</label>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="content-left-bottom-grid">
                    <h4>Boys Football:</h4>
                    <div class="content-left-bottom-grids">
                        <div class="content-left-bottom-grid1">
                            <img src="{{ url('/public') }}/images/foot-ball.jpg" title="football" />
                            <h5><a href="{{ url('detailproduk') }}">Nike Strike PL Hi-Vis</a></h5>
                            <span> Football</span>
                            <label>&#163; 375</label>
                        </div>
                        <div class="content-left-bottom-grid1">
                            <img src="{{ url('/public') }}/images/jarse.jpg" title="jarse" />
                            <h5><a href="{{ url('detailproduk') }}">Nike Strike PL Hi-Vis</a></h5>
                            <span> Football</span>
                            <label>&#163; 375</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="product-grids">
                    <!--- start-rate---->
                    <script src="js/jstarbox.js"></script>
                    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen"
                        charset="utf-8" />
                    <script type="text/javascript">
                        jQuery(function() {
                            jQuery('.starbox').each(function() {
                                var starbox = jQuery(this);
                                starbox.starbox({
                                    average: starbox.attr('data-start-value'),
                                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                                        'clickonce') ? 'once' : true,
                                    ghosting: starbox.hasClass('ghosting'),
                                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                                    buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                                        'data-button-count') || 5,
                                    stars: starbox.attr('data-star-count') || 5
                                }).bind('starbox-value-changed', function(event, value) {
                                    if (starbox.hasClass('random')) {
                                        var val = Math.random();
                                        starbox.next().text(' ' + val);
                                        return val;
                                    }
                                })
                            });
                        });
                    </script>
                    <!---//End-rate---->
                    <!---caption-script---->
                    <!---//caption-script---->
                    <div onclick="location.href='{{ url('detailproduk') }}';" class="product-grid fade">
                        <div class="product-grid-head">
                            <ul class="grid-social">
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="googlep" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="block">
                                <div class="starbox small ghosting"> </div> <span> (46)</span>
                            </div>
                        </div>
                        <div class="product-pic">
                            <a href="#"><img src="{{ url('/public') }}/images/product2.jpg"
                                    title="product-name" /></a>
                            <p>
                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
                                <span>Men's Firm-Ground Football Boot</span>
                            </p>
                        </div>
                        <div class="product-info">
                            <div class="product-info-cust">
                                <a href="{{ url('detailproduk') }}">Details</a>
                            </div>
                            <div class="product-info-price">
                                <a href="{{ url('detailproduk') }}">&#163; 380</a>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="more-product-info">
                            <span> </span>
                        </div>
                    </div>
                    <div onclick="location.href='{{ url('detailproduk') }}';" class="product-grid fade">
                        <div class="product-grid-head">
                            <ul class="grid-social">
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="googlep" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="block">
                                <div class="starbox small ghosting"> </div> <span> (46)</span>
                            </div>
                        </div>
                        <div class="product-pic">
                            <a href="#"><img src="{{ url('/public') }}/images/product1.jpg"
                                    title="product-name" /></a>
                            <p>
                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
                                <span>Men's Firm-Ground Football Boot</span>
                            </p>
                        </div>
                        <div class="product-info">
                            <div class="product-info-cust">
                                <a href="{{ url('detailproduk') }}">Details</a>
                            </div>
                            <div class="product-info-price">
                                <a href="{{ url('detailproduk') }}">&#163; 375</a>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="more-product-info">
                            <span> </span>
                        </div>
                    </div>
                    <div onclick="location.href='{{ url('detailproduk') }}';" class="product-grid fade last-grid">
                        <div class="product-grid-head">
                            <ul class="grid-social">
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="googlep" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="block">
                                <div class="starbox small ghosting"> </div> <span> (46)</span>
                            </div>
                        </div>
                        <div class="product-pic">
                            <a href="#"><img src="{{ url('/public') }}/images/product3.jpg"
                                    title="product-name" /></a>
                            <p>
                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
                                <span>Men's Firm-Ground Football Boot</span>
                            </p>
                        </div>
                        <div class="product-info">
                            <div class="product-info-cust">
                                <a href="{{ url('detailproduk') }}">Details</a>
                            </div>
                            <div class="product-info-price">
                                <a href="{{ url('detailproduk') }}">&#163; 350</a>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="more-product-info">
                            <span> </span>
                        </div>
                    </div>
                    <div onclick="location.href='{{ url('detailproduk') }}';" class="product-grid fade">
                        <div class="product-grid-head">
                            <ul class="grid-social">
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="googlep" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="block">
                                <div class="starbox small ghosting"> </div> <span> (46)</span>
                            </div>
                        </div>
                        <div class="product-pic">
                            <a href="#"><img src="{{ url('/public') }}/images/product4.jpg"
                                    title="product-name" /></a>
                            <p>
                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
                                <span>Men's Firm-Ground Football Boot</span>
                            </p>
                        </div>
                        <div class="product-info">
                            <div class="product-info-cust">
                                <a href="{{ url('detailproduk') }}">Details</a>
                            </div>
                            <div class="product-info-price">
                                <a href="{{ url('detailproduk') }}">&#163; 370</a>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="more-product-info">
                            <span> </span>
                        </div>
                    </div>
                    <div onclick="location.href='{{ url('detailproduk') }}';" class="product-grid fade">
                        <div class="product-grid-head">
                            <ul class="grid-social">
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="googlep" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="block">
                                <div class="starbox small ghosting"> </div> <span> (46)</span>
                            </div>
                        </div>
                        <div class="product-pic">
                            <a href="#"><img src="{{ url('/public') }}/images/product5.jpg"
                                    title="product-name" /></a>
                            <p>
                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
                                <span>Men's Firm-Ground Football Boot</span>
                            </p>
                        </div>
                        <div class="product-info">
                            <div class="product-info-cust">
                                <a href="{{ url('detailproduk') }}">Details</a>
                            </div>
                            <div class="product-info-price">
                                <a href="{{ url('detailproduk') }}">&#163; 355</a>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="more-product-info">
                            <span> </span>
                        </div>
                    </div>
                    <div onclick="location.href='{{ url('detailproduk') }}';" class="product-grid fade last-grid">
                        <div class="product-grid-head">
                            <ul class="grid-social">
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="googlep" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="block">
                                <div class="starbox small ghosting"> </div> <span> (46)</span>
                            </div>
                        </div>
                        <div class="product-pic">
                            <a href="#"><img src="{{ url('/public') }}/images/product6.jpg"
                                    title="product-name" /></a>
                            <p>
                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
                                <span>Men's Firm-Ground Football Boot</span>
                            </p>
                        </div>
                        <div class="product-info">
                            <div class="product-info-cust">
                                <a href="{{ url('detailproduk') }}">Details</a>
                            </div>
                            <div class="product-info-price">
                                <a href="{{ url('detailproduk') }}">&#163; 390</a>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="more-product-info">
                            <span> </span>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <!---- start-bottom-grids---->
    <div class="bottom-grids">
        <div class="bottom-top-grids">
            <div class="wrap">
                <div class="bottom-top-grid">
                    <h4>GET HELP</h4>
                    <ul>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="#">Shopping</a></li>
                        <li><a href="#">NIKEiD</a></li>
                        <li><a href="#">Nike+</a></li>
                    </ul>
                </div>
                <div class="bottom-top-grid">
                    <h4>ORDERS</h4>
                    <ul>
                        <li><a href="#">Payment options</a></li>
                        <li><a href="#">Shipping and delivery</a></li>
                        <li><a href="#">Returns</a></li>
                    </ul>
                </div>
                <div class="bottom-top-grid last-bottom-top-grid">
                    <h4>REGISTER</h4>
                    <p>Create one account to manage everything you do with Nike, from your shopping preferences to your
                        Nike+ activity.</p>
                    <a class="learn-more" href="#">Learn more</a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="bottom-bottom-grids">
            <div class="wrap">
                <div class="bottom-bottom-grid">
                    <h6>EMAIL SIGN UP</h6>
                    <p>Be the first to know about new products and special offers.</p>
                    <a class="learn-more" href="#">Sign up now</a>
                </div>
                <div class="bottom-bottom-grid">
                    <h6>GIFT CARDS</h6>
                    <p>Give the gift that always fits.</p>
                    <a class="learn-more" href="#">View cards</a>
                </div>
                <div class="bottom-bottom-grid last-bottom-bottom-grid">
                    <h6>STORES NEAR YOU</h6>
                    <p>Locate a Nike retail store or authorized retailer.</p>
                    <a class="learn-more" href="#">Search</a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <!---- //End-bottom-grids---->
    <!--- //End-content---->
    <!---start-footer---->
    <div class="footer">
        <div class="wrap">
            <div class="footer-left">
                <ul>
                    <li><a href="#">United Kingdom</a> <span> </span></li>
                    <li><a href="#">Terms of Use</a> <span> </span></li>
                    <li><a href="#">Nike Inc.</a> <span> </span></li>
                    <li><a href="#">Launch Calendar</a> <span> </span></li>
                    <li><a href="#">Privacy & Cookie Policy</a> <span> </span></li>
                    <li><a href="#">Cookie Settings</a></li>
                    <div class="clear"> </div>
                </ul>
            </div>
            <div class="footer-right">
                <p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
                <script type="text/javascript">
                    $(document).ready(function() {
                        /*
                                							var defaults = {
                                					  			containerID: 'toTop', // fading element id
                                								containerHoverID: 'toTopHover', // fading element hover id
                                								scrollSpeed: 1200,
                                								easingType: 'linear'
                                					 		};
                                							*/

                        $().UItoTop({
                            easingType: 'easeOutQuart'
                        });

                    });
                </script>
                <a href="#" id="toTop" style="display: block;"><span id="toTopHover"
                        style="opacity: 1;"></span></a>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <!---//End-footer---->
    <!---//End-wrap---->
</body>

</html>
