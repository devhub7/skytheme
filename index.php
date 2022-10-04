
<!DOCTYPE html>
<html lang="<?php language_attributes( );?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( );?>
</head>
<body <?php body_class(); ?>>
    
<div id="header_area">
    <div class="container">
        <div class="row">
        <div class="col-lg-3">
            <div class="logo">
                <!-- Method: 1 -->
                <!-- <a href="#"><img src="<?php //echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a> -->
                <!-- Use Method 1 Or 2 Not twice in together -->
                <!-- Method: 2 -->
                <a href="#"><img src="<?php echo get_theme_mod('skytheme_logo');?>" alt="logo"></a>
            </div>
        </div>
        <div class="col-lg-9">
            <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav' ) );?>
        </div>
        </div>
    </div>
</div>

<?php wp_footer( );?>
</body>
</html>