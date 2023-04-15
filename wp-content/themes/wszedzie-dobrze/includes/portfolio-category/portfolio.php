
<div class="portfolio">

    <h1 class="portfolio__title"><?php the_field('portfolio__category__header'); ?></h1>
    <p class="portfolio__text"><?php the_field('portfolio__category__text'); ?></p>


    <div class="portfolio__container">
        <?php if (have_rows('portfolio__category__image')): ?>
            <?php while (have_rows('portfolio__category__image')):the_row(); ?>

                <div class="portfolio__single">

                    <?php $bg = get_sub_field('portfolio__category__img'); ?>
                    <div class="portfolio__description"> <?php the_sub_field('portfolio__category__description'); ?></div>
                    <a href="<?php the_sub_field('portfolio__category__button'); ?>">
                        <div class="portfolio__image"><img src="<?php echo $bg['sizes']['large']; ?>" alt=""></div>
                    </a>
                    <a class="btn portfolio__btn"  href="<?php the_sub_field('portfolio__category__button'); ?>"><?php the_sub_field('portfolio__category__button__name'); ?></a>


                </div>

            <?php endwhile;?>
        <?php endif; ?>
    </div>
</div>
</div>
















<!---->
<!---->
<?php
//$portfolioCategory = new Wp_query(array(
//    'post_type' => 'sesje-rodzinne'
//));
//
//while($portfolioCategory -> have_posts()){
//    $portfolioCategory -> the_post(); ?>
<!---->
<!---->
<!---->
<!---->
<!--    <div class="portfolio">-->
<!--        <h1 class="portfolio__title">--><?php //the_field('portfolio__category__header'); ?><!--</h1>-->
<!--        <p class="portfolio__text">--><?php //the_field('portfolio__category__text'); ?><!--</p>-->
<!---->
<!---->
<!--        <div class="portfolio__container">-->
<!--            --><?php //if (have_rows('portfolio__category__image')): ?>
<!--                --><?php //while (have_rows('portfolio__category__image')):the_row(); ?>
<!---->
<!--                    <div class="portfolio__single">-->
<!---->
<!--                        --><?php //$bg = get_sub_field('portfolio__category__image'); ?>
<!--                        <a href="--><?php //the_sub_field('portfolio__category__button'); ?><!--">-->
<!--                            <div class="portfolio__image"><img src="--><?php //echo $bg['sizes']['large']; ?><!--" alt=""></div>-->
<!--                        </a>-->
<!--                        <div class="portfolio__description"> --><?php //the_sub_field('portfolio__category__description'); ?><!--</div>-->
<!--                        <a class="btn portfolio__btn"  href="--><?php //the_sub_field('portfolio__category__button'); ?><!--">--><?php //the_sub_field('portfolio__category__button__name'); ?><!--</a>-->
<!--                    </div>-->
<!---->
<!--                --><?php //endwhile;?>
<!--            --><?php //endif; ?>
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    --><?php
//}
//
//?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->


