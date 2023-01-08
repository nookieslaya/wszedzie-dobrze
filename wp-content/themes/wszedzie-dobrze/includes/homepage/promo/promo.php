<div class="promo">
    <div class="promo__container">
        <div class="promo__image">
            <?php $imagePromo = get_field('home__promo__image'); ?>
            <?php $promoHeder = get_field('home__promo__header'); ?>
            <?php $promoText = get_field('home__promo__text'); ?>

            <img class="promo__image__img" src="<?php echo $imagePromo['sizes']['thumbnails--full']; ?>">
        </div>
        <div class="promo__description">
            <h3 class="promo__description__header"><?php echo $promoHeder; ?></h3>
            <p class="promo__description__text"><?php echo $promoText; ?></p>
        </div>
    </div>
</div>