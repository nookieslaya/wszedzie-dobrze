<div class="photoproducts">
    <div class="photoproducts__wrapper container">
		<?php
		$imageTitle = get_field( 'photoproducts__title__image' );
		?>
        <div class="photoproducts__title__image" style="background-image:url(<?php echo $imageTitle['url']; ?>)">

            <div class="image-title"><?php the_field( 'photoproducts__title' ); ?></div>
        </div>
        <div class="photoproducts__description">
			<?php the_field( 'photoproducts__description' ); ?>
        </div>
        <div class="photoproducts__price">
			<?php
			$imagePrice = get_field( 'photoproducts__price__image' );
			?>
            <div class="photoproducts__price__content"><?php the_field( 'photoproducts__price' ); ?></div>
            <div class="photoproducts__price__image"><img src="<?= $imagePrice['sizes']['large']; ?>" alt=""></div>
        </div>
        <div class="photoproducts__underPrice">
			<?php
			$underPrice = get_field( 'photoproducts__under__price__image' );
			?>
            <div class="photoproducts__underPrice__image"><img src="<?= $underPrice['sizes']['large']; ?>" alt=""></div>
            <div class="photoproducts__underPrice__text"><?php the_field( 'photoproducts__under__price__text' );
				?></div>
        </div>
        <div class="photoproducts__packing">
            <div class="photoproducts__packing__wrapper">
				<?php
				$packingImg = get_field( 'photoproducts__packing__image' );
				?>
                <div class="photoproducts__packing__wrapper__image"><img src="<?= $packingImg['sizes']['large']; ?>"
                                                                         alt="">
                </div>
                <div class="photoproducts__packing__wrapper__description">
                    <div class="photoproducts__packing__wrapper__description__title"><?php the_field( 'photoproducts__packing__title' );
						?></div>
                    <div class="photoproducts__packing__wrapper__description__text"><?php the_field( 'photoproducts__packing__text' );
						?></div>
                </div>
            </div>
        </div>
        <div class="photoproducts__packing__secondTxt"><?php the_field( 'photoproducts__packing__text__2' ); ?></div>
		<?php
		$packingImg2 = get_field( 'photoproducts__packing__image__2' );
		?>
        <div class="photoproducts__packing__image2"><img src="<?= $packingImg2['sizes']['large']; ?>" alt="">
        </div>
    </div>
</div>
</div>