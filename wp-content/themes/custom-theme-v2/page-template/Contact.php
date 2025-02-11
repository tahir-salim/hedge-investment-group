<?php /** * Template Name: Contact Template */ ?>
<?php global $options; ?>
<?php get_header(); ?>

<section class="spad">
    <div class="container">
        <div class="contactMe">
            <div class="row">
                <div class="col-md-5 wow fadeInLeft">
                    <div class="contactDiv">
                        <h2>Contact Information</h2>
                        <p>Say something to start a live chat!</p>
                        <ul>
                            <li><i class="fas fa-phone-volume icon"></i> <a
                                    href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                            </li>
                            <li><i class="fas fa-envelope icon"></i> <a
                                    href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                            </li>
                            <li>
                                <div class="flex">
                                    <div>
                                        <i class="fas fa-map-marker-alt icon"></i>
                                    </div>
                                    <div>
                                        <?php echo $options['address'];?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="socialIcons">
                            <ul>
                                <li><a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="<?php echo $options['youtube'];?>"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="<?php echo $options['linkedin'];?>"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wow fadeInRight">
                    <div class="contactForm">
                        <?php echo do_shortcode('[contact-form-7 id="20b16cf" title="Contact form 1"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>