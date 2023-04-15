<div class="single-offer">
    <div class="single-offer__wrapper container">
		<?php
		$singleOfferTitle = get_field( 'single-offer__title__image' );
		?>
        <div class="photoproducts__title__image" style="background-image:url(<?php echo $singleOfferTitle['url']; ?>)">
            <div class="image-title"><?php the_field( 'single-offer__title' ); ?></div>
            <div class="fancy-title"><?php the_field( 'single-offer__fancy__title' ); ?></div>
        </div>
        <div class="photoproducts__description ">
			<?php the_field( 'single-offer__description' ); ?>
        </div>
		<?php if ( have_rows( 'single-offer' ) ): ?>
			<?php while ( have_rows( 'single-offer' ) ): the_row(); ?>
                <div class="single-offer__wrapper__session">
					<?php $titleImage = get_sub_field( 'single-offer__session__image' ); ?>
					<?php if ( $titleImage ) : ?>
                        <div class="single-offer__wrapper__session__image"><img
                                    src="<?php echo $titleImage['sizes']['large']; ?>" alt=""></div>
					<?php endif; ?>
					<?php
					$singleSession = get_sub_field( 'single-offer__session__title__image' );
					?>
                    <div class="single-offer__wrapper__session__title"
                         style="background-image:url(<?php echo $singleSession['url']; ?>)">
                        <div class="session-title"><?php the_sub_field( 'single-offer__session__title' ); ?></div>
                    </div>

                    <div class="session--fancy-title"><?php the_sub_field( 'single-offer__session__fancy__title' ); ?></div>
                    <div class="single-offer__wrapper__session__description">
                        <div class="single-offer__wrapper__session__description__text"><?php the_sub_field( 'single-offer__session__description' ); ?></div>
						<?php
						$descriptionImage = get_sub_field( 'single-offer__session__description__image' );
						?>
	                    <?php if ( $descriptionImage ) : ?>
                        <div class="single-offer__wrapper__session__description__image"><img
                                    src="<?php echo $descriptionImage['sizes']['large']; ?>" alt=""></div>
	                    <?php endif; ?>
                    </div>
                    <div class="single-offer-additional"><?php the_sub_field( 'single-offer__session__additional' );
                    ?></div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</div>