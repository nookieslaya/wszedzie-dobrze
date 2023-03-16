<div class="about__header">

</div>
<div class="about__me__wrapper">
<div class="about__me container">

    <div class="about__me__image">
        <?php $photo2 = get_field('about__me__image'); ?>
        <img src="<?php echo $photo2['sizes']['large']; ?>" alt=""></div>

    <div class="about__me__text">
        <h2 class="about__me__text__header"><?php the_field('about__me__text__header'); ?></h2>
        <div class="about__me__text__info"><?php the_field('about__me__text__info'); ?></div>
    </div>
    </div>
</div>

