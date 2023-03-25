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
            <div class="photoproducts__price__image"><img src="<?= $imagePrice['sizes']['large'];?>" alt=""></div>
        </div>
        <div class="photoproducts__underPrice">
	        <?php
	        $underPrice = get_field( 'photoproducts__under__price__image' );
	        ?>
            <div class="photoproducts__underPrice__image"><img src="<?= $underPrice['sizes']['large'];?>" alt=""></div>
            <div class="photoproducts__underPrice__text"><?php the_field( 'photoproducts__under__price__text' );
            ?></div>
        </div>
    </div>
</div>