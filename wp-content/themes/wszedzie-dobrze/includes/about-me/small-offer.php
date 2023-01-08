<div class="about__offer">
    <div class="about__offer__image">
        <?php $photo = get_field('about__offer__image'); ?>
        <img src="<?php echo $photo['sizes']['large']; ?>" alt=""></div>

    <div class="about__offer__text">
        <h2 class="about__offer__text__header"><?php the_field('about__offer__text__header'); ?></h2>

        <ul class="about__offer__text__info">
            <?php while (have_rows('about__offer__list')):the_row(); ?>
            <li><?php the_sub_field('about__offer__list__details'); ?></li>
            <?php endwhile;?>
        </ul>
    </div>
</div>

