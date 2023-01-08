<div class="offer">
    <?php $bg = get_field('offer__container__image'); ?>
    <div class="offer__wrapper" >
        <h2 class="offer__section__title"><?php the_field('offer__section__title'); ?></h2>
        <div class="offer__section__description"><?php the_field('offer__section__description'); ?></div>

        <?php if (have_rows('offer__single')): ?>
        <?php while (have_rows('offer__single')):the_row(); ?>
                <?php $bg = get_sub_field('offer__container__image'); ?>
        <div class="offer__single"style="background-image: url('<?php echo $bg; ?>');">

                <div class="offer__single__description">
                    <div class="offer__single__title"><?php the_sub_field('offer__single__title'); ?></div>
                    <div class="offer__single__info"><?php the_sub_field('offer__single__info'); ?></div>
                </div>
                <?php $bg2 = get_sub_field('offer__single__image'); ?>
                <div class="offer__single__image"><img src="<?php echo $bg2['sizes']['large']; ?>"></div>
            </div>

            <?php endwhile;?>
        <?php endif; ?>

    </div>
</div>