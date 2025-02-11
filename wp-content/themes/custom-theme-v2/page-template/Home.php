<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>
<div class="mainBanner" style="background-image: url('<?php echo $banner_section['image'];?>');">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">

                <div class="col-md-6 offset-6 wow fadeInRight">
                    <div class="banner1">
                        <h3 class="small-sec-heading"><?php echo $banner_section['heading'];?></h3>
                        <h1><?php echo $banner_section['sub_heading'];?></h1>
                        <p><?php echo $banner_section['content'];?></p>
                        <a href="<?php echo $banner_section['b_link'];?>"
                            class="theme-btn1"><?php echo $banner_section['b_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="spad sec-1 text-center">
    <div class="container">
        <h3 class="sec-small-heading wow fadeInDown"><?php echo $first_section['heading'];?></h3>
        <h2 class="sec-heading wow fadeInUp"><?php echo $first_section['sub_heading'];?></h2>
        <p class="wow zoomIn"><?php echo $first_section['content'];?></p>
        <?php echo $first_section['list'];?>
    </div>
</section>

<?php get_template_part("includes/team"); ?>
<?php get_template_part("includes/testi"); ?>
<?php get_footer(); ?>