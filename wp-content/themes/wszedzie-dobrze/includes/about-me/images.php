<div class="about__images">
    <div class="about__images-container">
        <div class="about__img">
            <?php $photo1 = get_field('about__me__image__1'); ?>
            <img src="<?php echo $photo1['sizes']['large']; ?>" alt=""></div>

        <div class="about__img">
            <?php $photo2 = get_field('about__me__image__2'); ?>
            <img src="<?php echo $photo2['sizes']['large']; ?>" alt=""></div>

        <div class="about__img">
            <?php $photo3 = get_field('about__me__image__3'); ?>
            <img src="<?php echo $photo3['sizes']['large']; ?>" alt=""></div>
        </div>
    </div>
</div>