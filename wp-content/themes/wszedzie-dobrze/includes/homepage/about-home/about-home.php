<div class="about__home about__bg">

        <?php $aboutTxt = get_field('about__home__txt'); ?>
        <?php $name = get_field('about__home__name'); ?>
        <?php $link = get_field('about__home__link'); ?>
    <div class="about__home__images container">
        <?php while (have_rows('home__about__images')):
            the_row(); ?>

                <?php $imageAbout = get_sub_field('home__about__image'); ?>

                <img class="about__home__image" src="<?php echo $imageAbout['sizes']['thumbnails--full']; ?>">

        <?php endwhile; ?>
    </div>

        <div class="about__home-wrapper">
            <p class="about__home-text"><?php echo $aboutTxt; ?></p>
            <a class="btn about-btn" href="<?php echo $link; ?>"><?php echo $name; ?></a>
        </div>



</div>




