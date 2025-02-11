<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <a href="<?php echo site_url();?>" class="logo1">
                        Hedge Investment Group
                    </a>
                    <p><?php echo $options['footer_about'];?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h4>Useful Links</h4>
                    <!-- <ul>
                        <li class="active"><a href="./">Home</a></li>
                        <li><a href="real-estate-acquisitions.php">Real Estate Acquisitions </a></li>
                        <li><a href="real-estate-development.php">Real Estate Development </a></li>
                        <li><a href="real-estate-managment.php">Real Estate Management</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> '' ) ); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h4>Contact</h4>
                    <ul>
                        <li>
                            <div class="socialIcons">
                                <ul>
                                    <li><a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li><a href="<?php echo $options['twitter'];?>"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="<?php echo $options['youtube'];?>"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li><a href="<?php echo $options['instagram'];?>"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </li>
                        <li><i class="fas fa-envelope icon"></i> <a
                                href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></li>
                        <li><i class="fas fa-phone icon"></i> <a
                                href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright text-center">
    <div class="container">
        <!-- <p>All Rights Reserved</p> -->
    </div>
</div>
<!-- <div class="overlay"></div>
<div class="popup">
    <div class="closePop">
        <i class="fas fa-times"></i>
    </div>
    <div class="container">
        <div class="pop-inner">
        </div>
    </div>
</div> -->

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->

</main>

<?php wp_footer(); ?>
<script>
new WOW().init();
</script>
</body>

</html>