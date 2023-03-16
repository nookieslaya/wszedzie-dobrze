<div class="offer">


    <div class="offer__wrapper">
		<?php $icon = get_field( 'offer__section__icon' ); ?>
        <div class="offer__section__icon"><img src="<?php echo $icon['sizes']['thumbnails--full']; ?>"></div>

        <h2 class="offer__section__title"><?php the_field( 'offer__section__title' ); ?></h2>
    </div>
</div>
<?php $headerImage = get_field( 'offer__section__header__image' ); ?>
<div class="offer__section__header"><img src="<?php echo $headerImage['sizes']['large']; ?>"></div>
<div class="offer">
    <div class="offer__wrapper">
        <div class="offer__section__title__two"><?php the_field( 'offer__section__title__two' ); ?></div>
		<?php
		$imageTitle = get_field( 'offer__section__img__title' );
		?>
        <div class="offer__section__title__image" style="background-image:url(<?php echo $imageTitle['url']; ?>)">

            <div class="image-title"><?php the_field( 'offer__section__image__title' ); ?></div>
        </div>

		<?php if ( have_rows( 'offer__single' ) ): ?>
			<?php while ( have_rows( 'offer__single' ) ):the_row(); ?>
                <a class="offer-link" href="<?php the_sub_field( 'offer__single__link' ); ?>">
					<?php $reverse = get_sub_field( 'image__on__right' ); ?>
                    <div class="offer__single <?= $reverse ?> ">
						<?php $bg2 = get_sub_field( 'offer__single__image' ); ?>
                        <div class="offer__single__image"><img src="<?php echo $bg2['sizes']['large']; ?>"></div>
                        <div class="offer__single__description">
                            <div class="offer__single__title"><?php the_sub_field( 'offer__single__title' ); ?></div>
                        </div>
                    </div>
                </a>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php $icon = get_field( 'offer__section__icon_price' ); ?>
        <div class="offer__section__icon2"><img src="<?php echo $icon['sizes']['thumbnails--full']; ?>"></div>
        <h2 class="offer__section__title"><?php the_field( 'offer__section__title_price' ); ?></h2>
        <div class="offer__section__priceText"><?php the_field( 'offer__section__price__text' ); ?></div>
        <div class="offer__section__more">
            <h2 class="offer__section__title"><?php the_field( 'offer__section__title_more' ); ?></h2>
            <div class="offer__section__priceText"><?php the_field( 'offer__section__text__more' ); ?></div>
        </div>
        <div class="offer__products">
            <div class="offer__products__right">
				<?php
				$imageTitle2 = get_field( 'offer__section__product__img' );
				?>
                <div class="offer__products__title" style="background-image:url(<?php echo $imageTitle2['url']; ?>)">
                    <div class="image-title"><?php the_field( 'offer__section__product__title' ); ?></div>
                    <div class="offer__products__wrapper">
                    <div class="offer__products__wrapper__link"><a href="<?php the_field( 'offer__section__product__link1' );
						?>"><?php the_field( 'offer__section__product__link__title1' ); ?></a></div>
                    <div class="offer__products__wrapper__link"><a href="<?php the_field( 'offer__section__product__link2' );
						?>"><?php the_field( 'offer__section__product__link__title2' ); ?></a></div><?php
	                $imageCover = get_field( 'offer__section__product__cover' );
	                ?>
                    </div>
                    <img class="right-img" src="<?php echo $imageCover['sizes']['thumbnails--full']; ?>">
                </div>
            </div>


        </div>
    </div>
</div>