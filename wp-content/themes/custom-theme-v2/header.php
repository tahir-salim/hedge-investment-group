<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>
    <header>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3 text-start">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-9 text-end">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="real-estate-acquisitions.php">Acquisitions </a></li>
                            <li><a href="real-estate-development.php">Development </a></li>
                            <li><a href="real-estate-managment.php">Management</a></li>
                            <li><a href="about.php">contracting</a></li>
                            <li><a href="contact.php">Investment & Captial</a></li>
                            <li><a href="#" class="theme-btn1">Send Inqury</a></li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>

        <div class="innerBanner text-center" style="background-image: url('<?php echo $banner_section['image'];?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="sec-heading text-white wow fadeInUp"><?php echo $banner_section['heading'];?></h1>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>