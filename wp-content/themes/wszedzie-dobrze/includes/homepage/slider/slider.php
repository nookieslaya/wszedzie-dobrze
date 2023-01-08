<?php if (have_rows('home__slider')): ?>


<div class="swiper__container">


    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php while (have_rows('home__slider')):
            the_row(); ?>

            <?php $bg = get_sub_field('slide__image'); ?>
            <div class="swiper-slide">
                <?php $icon1 = get_sub_field('animated__img1'); ?>
                <?php $icon2 = get_sub_field('animated__img2'); ?>
                <?php $icon3 = get_sub_field('animated__img3'); ?>

                <img class="animated-ico1 animated-ico" src="<?php echo $icon1 ['sizes']['thumbnails--full']; ?>">
                <img class="animated-ico2 animated-ico" src="<?php echo $icon2 ['sizes']['thumbnails--full']; ?>">
                <img class="animated-ico3 animated-ico" src="<?php echo $icon3['sizes']['thumbnails--full']; ?>">
                <div class="slider__wrapper">
                <img class="slider-image" src="<?php echo $bg['sizes']['thumbnails--full']; ?>">
                </div>


            <div class="slider__copy">
                <h1 class="slider__copy-wrapper">
                    <?php the_sub_field('slide__text'); ?>
                    <br><br>
                   <p class="fancyfont slider-fancy"><?php the_sub_field('slide__text2'); ?></p>


                </h1>
            </div>
            </div>
            <?php endwhile; ?>
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>



</div>
<?php endif; ?>

