<?php $second_section = get_field('second_section',10);?>
<section class="pad-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow zoomIn">
                    <img src="<?php echo $second_section['image'];?>" alt="">
                    <div class="our-team">
                    <h5 class="show"><?php echo $second_section['h_1'];?></h5>
                        <p><?php echo $second_section['c_1'];?></p>
                    </div>
                </div>
                <div class="col-md-5 wow fadeInRight">
                    <div class="our-team">
                        <h3 class="sec-small-heading"><?php echo $second_section['h_2'];?></h3>
                        <h2 class="sec-heading"><?php echo $second_section['h_3'];?></h2>
                        <p><?php echo $second_section['c_2'];?></p>
                        <h5><?php echo $second_section['h_4'];?></h5>
                        <p><?php echo $second_section['c_3'];?></p>
                        <h5><?php echo $second_section['h_5'];?></h5>
                        <p><?php echo $second_section['c_4'];?></p>
                    </div>
                </div>
            </div>
    </section>