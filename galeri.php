<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <?php include 'layouts/head.php'; ?>

</head>

<body class="home page-template-default page page-id-3102 woocommerce-no-js ppb_enable">

    <?php include 'layouts/hidden.php'; ?>

    <!-- Begin mobile menu -->
    <a id="close_mobile_menu" href="javascript:;"></a>
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
    <div id="wrapper" class=" ">

    <?php include 'layouts/header.php'; ?>

        <div id="page_caption" style="background: url(images/wonderland/rainbowslide2.jpg);">

            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <h1>Gallery</h1>
                    <div class="page_tagline">
                        Berisi beberapa foto di Wonderland, menampilkan berbagai pemandangan dan momen menarik yang ada di sana. </div>
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
        <!-- Begin content -->

        <div id="page_content_wrapper" class="">
            <div class="inner">
                <div class="inner_wrapper nopadding">
                    <div id="page_main_content" class="sidebar_content full_width nopadding fixed_column">
                        <div id="portfolio_filter_wrapper" class="gallery four_cols portfolio-content section content clearfix" data-columns="4">
                        <?php
                            require_once "config/koneksi.php";

                            // Lakukan query untuk mengambil gambar berdasarkan nomor indeks
                            $query = "SELECT * FROM galeri ORDER BY id DESC"; // Query untuk mengambil semua gambar dari tabel galeri dan mengurutkannya berdasarkan id
                            $result = mysqli_query($conn, $query);

                            // Periksa apakah query berhasil
                            if ($result) {
                                // Loop melalui hasil query dan tampilkan setiap gambar
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $gambar = $row['judul_gambar']; // Ambil nama file gambar dari kolom 'judul_gambar'
                                    $id = $row['id']; // Ambil nomor indeks dari kolom 'id'

                                    // Tampilkan gambar menggunakan tag <img>
                                    echo "
                                    <div class='element grid classic4_cols'>
                                        <div class='one_fourth gallery4 static filterable gallery_type animated2' data-id='post-2'>
                                            <a data-caption='' class='fancy-gallery' href='images/wonderland/$gambar'>
                                                <img src='images/wonderland/$gambar' alt='$gambar' />
                                            </a>
                                        </div>
                                    </div>";
                                }

                                // Bebaskan hasil query
                                mysqli_free_result($result);
                            } else {
                                echo "Gagal menjalankan query: " . mysqli_error($conn);
                            }

                            // Tutup koneksi ke database
                            mysqli_close($conn);
                            ?>

                            <div class="element grid classic4_cols">
                                <div class="one_fourth gallery4 static filterable gallery_type animated2" data-id="post-2">
                                    <a data-caption="Jamur" class="fancy-gallery" href="images/wonderland/tokoh.jpg">
                                        <img src="images/wonderland/tokoh.jpg" alt="tokoh" />
                                    </a>
                                </div>
                            </div>

                            <div class="element grid classic4_cols">
                                <div class="one_fourth gallery4 static filterable gallery_type animated2" data-id="post-2">
                                    <a data-caption="Jamur" class="fancy-gallery" href="images/wonderland/kantin2.jpg">
                                        <img src="images/wonderland/kantin2.jpg" alt="kantin" />
                                    </a>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
            <br class="clear" />
        </div>
        



    </div>




    <?php include 'layouts/footer.php'; ?>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>

    </div>


    <script type='text/javascript' src='js/jquery.js'></script>
    
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/core.min.js'></script>
    <script type='text/javascript' src='js/plugins/datepicker.min.js'></script>
    <script type='text/javascript' src='js/plugins/spin.min.js'></script>
    <script type='text/javascript' src='js/plugins/spin.jquery.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src='js/plugins/functions.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.requestAnimationFrame.js'></script>
    <script type='text/javascript' src='js/plugins/ilightbox.packed.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='js/plugins/waypoints.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.isotope.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.masory.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.sticky-kit.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.stellar.min.js'></script>
    <script type='text/javascript' src='js/plugins/custom_plugins.js'></script>
    <script type='text/javascript' src='js/plugins/custom.js'></script>
    <script type='text/javascript' src='js/plugins/custom_onepage.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax-video.js'></script>
    <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>

    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var booked_js_vars = {
            "ajax_url": "#",
            "profilePage": "",
            "publicAppointments": "",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_please_wait": "Please wait ...",
            "i18n_wrong_username_pass": "Wrong username\/password combination.",
            "i18n_fill_out_required_fields": "Please fill out all required fields.",
            "i18n_guest_appt_required_fields": "Please enter your name to book an appointment.",
            "i18n_appt_required_fields": "Please enter your name, your email address and choose a password to book an appointment.",
            "i18n_appt_required_fields_guest": "Please fill in all \"Information\" fields.",
            "i18n_password_reset": "Please check your email for instructions on resetting your password.",
            "i18n_password_reset_error": "That username or email is not recognized."
        };
        /* ]]> */
    </script>
</body>
</html>
