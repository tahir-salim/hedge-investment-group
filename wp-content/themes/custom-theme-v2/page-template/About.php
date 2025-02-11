<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>
<section class="spad abt-sec">
    <div class="container">
        <div class="company">
            <h3 class="sec-small-heading wow fadeInDown">
                <?php echo $first_section['heading'];?>
            </h3>
            <h2 class="sec-heading wow fadeInUp"><?php echo $first_section['sub_heading'];?></h2>
            <div class="row">
                <div class="col-md-5 wow fadeInLeft">
                    <p><?php echo $first_section['c_1'];?></p>
                    <?php echo $first_section['list'];?>
                    <p class="para"><?php echo $first_section['c_2'];?></p>
                    <p><?php echo $first_section['c_3'];?></p>
                </div>
                <div class="col-md-7 wow zoomIn">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/team"); ?>
<?php get_footer(); ?>