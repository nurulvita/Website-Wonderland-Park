<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
    <?php include 'layouts/head.php'; ?>

</head>

<body class="home page-template-default page page-id-3102 woocommerce-no-js ppb_enable">

    <?php include 'layouts/hidden.php'; ?>

    <!-- Begin mobile menu -->
    <a href="javascript:;"></a>

    <div class="mobile_menu_wrapper">
        <a id="mobile_menu_close" href="javascript:;" class="button"><span class="ti-close"></span></a>

        <div class="mobile_menu_content">

            <div class="menu-main-menu-container">
                <ul id="mobile_main_menu" class="mobile_main_nav">
                    <li class="menu-item current-menu-item menu-item-has-children"><a href="beranda.php">Beranda</a></li>
                    <li class="menu-item menu-item-has-children"><a href="fasilitas.php">Fasilitas</a></li>
                    <li class="menu-item menu-item-has-children"><a href="tiket.php">Tiket</a></li>
                    <li class="menu-item menu-item-has-children"><a href="lokasi.php">Lokasi</a></li>
                    <li class="menu-item menu-item-has-children"><a href="galeri.php">Galeri</a></li>
                    <li class="menu-item menu-item-has-children"><a href="FAQs.php">FAQs</a></li>
                </ul>
            </div>

            <div class="social_wrapper">
                <ul>
                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/wonderlandsamarinda?mibextid=ZbWKwL"><i class="fa fa-facebook-official"></i></a></li>
                    <li class="whatsapp"><a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6282324049772"><i class="fa fa-whatsapp"></i></a></li>
                    <li class="instagram"><a target="_blank" title="Instagram" href="https://www.instagram.com/wonderlandsamarinda"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End mobile menu -->

    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg transparent">

        <?php include 'layouts/header.php'; ?>

    </div>


    <div id="page_caption" class="hasbg parallax" style="background-image:url(images/wonderland/sakura5.jpg);">

        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <div class="page_title_content">
                    <h1>Lokasi Peta</h1>
                    <div class="page_tagline">
                        Wonderland Samarinda, Handil Bakti, Kec. Palaran, Kota Samarinda, Kalimantan Timur</div>
                </div>
                <div style="margin-top:20px;">
                    <div class="social_wrapper shortcode dark ">
                        <ul>
                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/wonderlandsamarinda?mibextid=ZbWKwL"><i class="fa fa-facebook-official"></i></a></li>
                            <li class="whatsapp"><a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6282324049772"><i class="fa fa-whatsapp"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="https://www.instagram.com/wonderlandsamarinda"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="ppb_wrapper">
        <div class="one withsmallpadding ppb_text">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div>
                            <h5 class="space">Google Map Satellite</h5>
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6166.9465584264535!2d117.15676290823778!3d-0.5605222880171075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df681d9fd73cf07%3A0xb4a03523c3fe4a74!2sWonderland%20Samarinda!5e1!3m2!1sid!2sid!4v1716538712425!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .map-responsive {
            position: relative;
        
            height: 0;
            overflow: hidden;
            max-width: 100%;
            height: 50vh;
        }
    
        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50vh;
            border: 0;
        }
    </style>
    

    <?php include 'layouts/footer.php'; ?>
    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>

    </div>


        <?php include 'layouts/script.php'; ?>


</body>
</html>
