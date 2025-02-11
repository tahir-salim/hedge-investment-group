<?php $third_section = get_field('third_section',10);?>

<section class="spad bgColor text-center">
    <div class="container">
        <h3 class="sec-small-heading wow fadeInDown"><?php echo $third_section['heading'];?></h3>
        <h2 class="sec-heading wow fadeInUp"><?php echo $third_section['sub_heading'];?></h2>
        <div class="row">
            <div class="col-md-6">
                <div class="slider-nav wow fadeInLeft">
                    <?php $box_list = $third_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div>
                        <div class="indexSlider text-start">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <p><?php echo $boxlist['content']; ?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-5 wow fadeInRight ">
                <div class="indexForSlider">
                    <div class="slider-for">
                        <?php $box_list = $third_section['box_list_2'];?>
                        <?php foreach ($box_list as $boxlist) {?>
                        <div>
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <h4><?php echo $boxlist['heading']; ?></h4>
                            <p><?php echo $boxlist['content']; ?></p>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>