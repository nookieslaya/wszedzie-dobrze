<?php if (have_rows('home__projects')): ?>

<div class="projects">
    <h2 class="projects__header"><?php the_field('home__project__header'); ?></h2>
    <div class="projects__container">

    <?php while (have_rows('home__projects')):the_row(); ?>

        <div class="projects__single">
            <?php $bg = get_sub_field('home__project__image'); ?>
            <a href="<?php the_sub_field('home__project__button'); ?>">
            <div class="projects__image"><img src="<?php echo $bg['sizes']['large']; ?>" alt=""></div>
            </a>
            <div class="projects__description"> <?php the_sub_field('home__project__description'); ?></div>
            <a class="btn about-btn about-home-btn project-btn"  href="<?php the_sub_field('home__project__button'); ?>"><?php the_sub_field('home__project__button__name'); ?></a>
        </div>

    <?php endwhile;?>
    </div>
</div>

<?php endif; ?>