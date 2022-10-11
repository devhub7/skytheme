
<!DOCTYPE html>
<html lang="<?php language_attributes( );?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( );?>
</head>
<body <?php body_class(); ?>>
    
<header id="header_area" class="<?php echo get_theme_mod('skytheme_menu_position');?>">
    <div class="container">
        <div class="row">
        <div class="col-lg-3">
            <div class="logo">
                <!-- Method: 1 -->
                <!-- <a href="#"><img src="<?php //echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a> -->
                <!-- Use Method 1 Or 2 Not twice in together -->
                <!-- Method: 2 -->
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('skytheme_logo');?>" alt="logo"></a>
            </div>
        </div>
        <div class="col-lg-9">
            <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav' ) );?>
        </div>
        </div>
    </div>
</header>
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
            <p class="blog-author">by <?php the_author(); ?></p>
            <h2><?php the_title();?></h2>
            <div>
                <?php the_content();?>
            </div>
        <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<div id="content" class="site-content">
    <div class ="single-blog-content">
        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
            <p class="blog-author">by <?php the_author(); ?></p>
            <h2><?php the_title();?></h2>
            <div>
                <?php the_content();?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php wp_footer( );?>
</body>
</html>