<?php /** * Template Name: real-estate-managment Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="spad">
    <div class="container">
        <div class="row">
        <?php $box_list = $first_section['box_list'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>
            <div class="col-md-4 wow <?php if ($x>3 && $x<7) {echo 'bounceIn';}else{echo 'fadeIn';}?>">
                <div class="real-estate">
                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                    <h3 class="sec-small-heading"><?php echo $boxlist['heading']; ?></h3>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php $x++;}?>
        </div>
    </div>
</section>
<?php get_footer(); ?>