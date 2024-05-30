<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <?php include 'layouts/head.php'; ?>
    <style>
        .video-wrapper {
            position: relative;
            width: 80%;
            margin: 0 auto;
        }
        .video-wrapper video {
            width: 100%;
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .play-button::before {
            content: '';
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 20px solid white;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
        }
        .video-wrapper video.playing + .play-button {
            display: none;
        }
    </style>

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

    <div id="wrapper" class="hasbg transparent">

        <?php
        include 'layouts/header.php';
        ?>


        <div class="ppb_wrapper  ">
            <div class="one fullwidth ">
                <link href="http://fonts.googleapis.com/css?family=Poppins:600%2C700%2C400%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                <div  class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:transparent;padding:0px;">
                 
                    <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.4">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/pexels-photo-197657-100x50.jpeg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/wonderland/depan5.jpg" alt="" title="pexels-photo-197657" width="1440" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
          
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="10" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 600; color: rgba(255,255,255,1); font-family:Poppins;">
                                    Samarinda </div>
                                

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="-80" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 110px; line-height: 22px; font-weight: 700; color: rgba(255,255,255,1); font-family:Poppins;">Wonderland Park</div>
                                
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="60" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(201,201,201,1); font-family:Poppins;">
                                    Destinasi wisata terbaru di Samarinda </div>
                                
                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption rev-btn rev-withicon " href="galeri.php" target="_self" id="slide-1-layer-5" data-x="center" data-hoffset="" data-y="center" data-voffset="140" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(30,198,182,1);bc:rgba(30,198,182,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); font-family:Poppins;background-color:rgba(255,74,82,1);border-color:rgba(255,74,82,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Lihat Galeri<i class="fa-icon-chevron-right"></i> </a>

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/Tokyo_Dollarphotoclub_72848283-copy-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/wonderland/gate3.jpg" alt="" title="Tokyo_Dollarphotoclub_72848283-copy" width="1440" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption tp-resizeme" id="slide-2-layer-1" data-x="60" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 46px; line-height: 48px; font-weight: 600; color: rgba(255,255,255,1);font-family:Poppins;">
                                    Yuk Jelajahi Wonderland
                                    <br/>Destinasi Wisata Samarinda </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption tp-resizeme" id="slide-2-layer-3" data-x="60" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);font-family:Poppins;">
                                    Berbagai macam wahana dapat anda nikmati
                                    <br/>Wisata Permainan dalam kebun Sawit🌴 </div>

                                <!-- LAYER NR. 7 -->
                                <a class="tp-caption rev-btn rev-withicon " href="galeri.php" target="_self" id="slide-2-layer-5" data-x="60" data-y="center" data-voffset="170" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(30,198,182,1);bc:rgba(30,198,182,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1);font-family:Poppins;background-color:rgba(255,74,82,1);border-color:rgba(255,74,82,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Lihat Galeri<i class="fa-icon-chevron-right"></i> </a>
                            </li>
                        </ul>

                       
                    </div>

                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
        <div class="one withsmallpadding ppb_header" style="text-align:center;padding:0px 0 0px 0;margin-top:70px;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <div>
                                <div class="social_wrapper shortcode dark ">
                                    <h5>Sosial Media :</h5><br>
                                    <ul>
                                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/wonderlandsamarinda?mibextid=ZbWKwL"><i class="fa fa-facebook-official"></i></a></li>
                                        <li class="whatsapp"><a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6282324049772"><i class="fa fa-whatsapp"></i></a></li>
                                        <li class="instagram"><a target="_blank" title="Instagram" href="https://www.instagram.com/wonderlandsamarinda"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div><br>
                            <h2 class="ppb_title">Spot Foto Unggulan</h2>
                            <div class="page_tagline" >Berbagai macam spot foto di Wonderland</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ppb_destination_grid one nopadding " style="margin-top:50px;margin-bottom:50px;">
            <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
                <div class="standard_wrapper">
                    <div id="1568019739508161166" class="portfolio_filter_wrapper gallery grid portrait four_cols" data-columns="4">
                        <div class="element grid baseline classic4_cols animated1">
                            <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" style="background-image:url(upload/Tokyo_Dollarphotoclub_72848283-copy-700x466.jpg);">
                                <img src="images/wonderland/spot18.jpg" alt="">
                                <div class="portfolio_info_wrapper">
                                    <div class="portfolio_info_content">
                                        <h3>Spot Unggulan</h3></div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid baseline classic4_cols animated2">
                            <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" style="background-image:url(upload/bf1202aedf2c5b6a57d379575619a488-700x466.jpg);">
                                <img src="images/wonderland/depan6.jpg" alt="">
                                <div class="portfolio_info_wrapper">
                                    <div class="portfolio_info_content">
                                        <h3>Spot Unggulan</h3></div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid baseline classic4_cols animated3">
                            <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" style="background-image:url(upload/1600x1200-4-700x466.jpg);">
                                <img src="images/wonderland/sakura6.jpg" alt="">
                                <div class="portfolio_info_wrapper">
                                    <div class="portfolio_info_content">
                                        <h3>Spot Unggulan</h3></div>
                                </div>
                            </div>
                        </div>
                        <div class="element grid baseline classic4_cols animated4">
                            <div class="one_fourth gallery4 grid static filterable portfolio_type themeborder" style="background-image:url(upload/pexels-photo-1-700x466.jpg);">
                                <img src="images/wonderland/salju3.jpg" alt="">
                                <div class="portfolio_info_wrapper">
                                    <div class="portfolio_info_content">
                                        <h3>Spot Unggulan</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax " style="background-image: url(images/wonderland/kincir4.jpg);height:60vh; "></div>

        <div class="one withsmallpadding ppb_header " style="text-align:center;padding:0px 0 0px 0;margin-top:50px;margin-bottom:50px;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <h2 class="ppb_title">Wahana Permainan</h2>
                            <div class="page_tagline">Anda dapat menikmati berbagai wahana permainan yang ada di Wonderland</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ppb_tour_classic one nopadding">
            <div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
                <div class="standard_wrapper">
                    <div id="1568019739482243752" class="portfolio_filter_wrapper gallery classic three_cols" data-columns="3">
                        <div class="element grid classic4_cols animated1">
                            <div class="one_third gallery3 classic static filterable portfolio_type themeborder">
                                <a class="tour_image" href="fasilitas.php">
                                    <img src="images/wonderland/bomcar3.jpg" alt="Bom - Bom Car" />
                                    <div class="tour_label">Bom - Bom Car</div>
                                    <div class="tour_price ">Rp 25.000/Tiket</div>
                                </a>
                                <div class="portfolio_info_wrapper">
                                    <a class="tour_link" href="fasilitas.php"><h4>Bom - Bom Car</h4></a>
                                    <div class="tour_excerpt">
                                        <p>Bom-Bom Car dimainkan di arena khusus yang dilengkapi dengan lantai konduktif atau jaringan listrik yang menggerakkan mobil.</p>
                                    </div>
                                    <div class="tour_attribute_wrapper">
                                        <div class="tour_attribute_days">
                                            <span></span>wonderland</div>
                                    </div>
                                    <br class="clear" />
                                </div>
                            </div>
                        </div>
                        <div class="element grid classic4_cols animated2">
                            <div class="one_third gallery3 classic static filterable portfolio_type themeborder">
                                <a class="tour_image" href="fasilitas.php">
                                    <img src="images/wonderland/kereta3.jpg" alt="Kereta Monorel" />
                                    <div class="tour_label">Kereta Monorel</div>
                                    <div class="tour_price ">Rp 25.000/Tiket</div>
                                </a>
                                <div class="portfolio_info_wrapper">
                                    <a class="tour_link" href="fasilitas.php"><h4>Kereta Monorel</h4></a>
                                    <div class="tour_excerpt">
                                        <p>Pengunjung mengelilingi wonderland dan dapat melihat keindahan pemandangan di wonderland saat menaiki kereta</p>
                                    </div>
                                    <div class="tour_attribute_wrapper">
                                        <div class="tour_attribute_rating">
                                        </div>
                                        <div class="tour_attribute_days">
                                            <span></span>wonderland</div>
                                    </div>
                                    <br class="clear" />
                                </div>
                            </div>
                        </div>
                        <div class="element grid classic3_cols animated3">
                            <div class="one_third gallery3 classic static filterable portfolio_type themeborder">
                                <a class="tour_image" href="fasilitas.php">
                                    <img src="images/wonderland/rainbowslide1.jpg" alt="Rainbow Slide" />
                                    <div class="tour_label">Rainbow Slide</div>
                                    <div class="tour_price ">Rp 25.000/Tiket</div>
                                </a>
                                <div class="portfolio_info_wrapper">
                                    <a class="tour_link" href="fasilitas.php"><h4>Rainbow Slide</h4></a>
                                    <div class="tour_excerpt">
                                        <p>Wahana ini tidak hanya memberikan sensasi kecepatan, tetapi juga memiliki keindahan dengan desain yang penuh warna-warni.</p>
                                    </div>
                                    <div class="tour_attribute_wrapper">
                                        <div class="tour_attribute_rating">
                                        </div>
                                        <div class="tour_attribute_days">
                                            <span></span>wonderland</div>
                                    </div>
                                    <br class="clear" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="one withsmallpadding ppb_header " style="text-align:center;padding:0px 0 0px 0;margin-top:70px;margin-bottom:50px;">
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <h2 class="ppb_title">Konten Video</h2>
                            <div class="page_tagline">Jelajahi berbagai spot foto dan nikmati wahana di WONDERLAND yang sangat menyenangkan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="standard_wrapper" style="padding:5vh; margin:0;">
            <div class="ppb_blog_grid one nopadding" style="padding:0; margin:0;">
                <div class="page_content_wrapper" style="padding:0; margin:0;">
                    <div class="inner" style="padding:0; margin:0;">
                        <div class="inner_wrapper" style="padding:0; margin:0;">
                            <div class="blog_grid_wrapper sidebar_content full_width ppb_blog_posts" style="padding:0; margin:0;">
                                <!-- Video Post -->
                                <div class="video-wrapper" style="position:relative; padding-bottom:45%; height:0; overflow:hidden; max-width:100%; background:#000; margin: 0 auto;">
                                    <iframe id="video" style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/s1nvxiBV1jI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="post_header_wrapper" style="margin-top:5px; text-align:center;">
                                    <div class="post_detail single_post" style="margin-bottom:5px;">
                                        <span class="post_info_date" style="font-size:0.8em;">
                                            <a href="#" title="Video Title">21 Mei, 2024</a>
                                        </span>
                                    </div>
                                    <h6 style="margin:0; font-size:1em;">DESTINASI WISATA WONDERLAND</h6>
                                </div>
                                <!-- End of Video Post -->
                            </div>       
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>


     </div>

        <?php
        include 'layouts/footer.php';
        ?>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>

    </div>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    
    <script src='js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script src='js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>  
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script> 
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

    <?php include 'layouts/script.php'; ?>


    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>    
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        if (setREVStartSize !== undefined) setREVStartSize({
            c: '#rev_slider_1_1',
            gridwidth: [1240],
            gridheight: [868],
            sliderLayout: 'fullscreen',
            fullScreenAutoWidth: 'off',
            fullScreenAlignForce: 'off',
            fullScreenOffsetContainer: '',
            fullScreenOffset: ''
        });

        var revapi1,
            tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
            else onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_1_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                } else {
                    revapi1 = tpj("#rev_slider_1_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            arrows: {
                                style: "uranus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            }
                        },
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: 1240,
                        gridheight: 868,
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner3",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }; /* END OF revapi call */

            }; /* END OF ON LOAD FUNCTION */
        }()); /* END OF WRAPPING FUNCTION */
    </script>
    <script>
        var htmlDivCss = '  #rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #ff4a52 !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script>
        const video = document.getElementById('video');
        const playButton = document.getElementById('playButton');

        playButton.addEventListener('click', () => {
            video.play();
            playButton.style.display = 'none';
        });

        video.addEventListener('play', () => {
            playButton.style.display = 'none';
        });

        video.addEventListener('pause', () => {
            playButton.style.display = 'flex';
        });
    </script>
</body>
</html>
