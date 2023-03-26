<div class="photoproducts albums">
    <div class="photoproducts__wrapper container">
		<?php
		$albumsTitle = get_field( 'albums__title__image' );
		?>
        <div class="photoproducts__title__image" style="background-image:url(<?php echo $albumsTitle['url']; ?>)">

            <div class="image-title"><?php the_field( 'albums__title' ); ?></div>
        </div>
        <div class="photoproducts__description ">
			<?php the_field( 'albums__text' ); ?>

        </div>
        <div class="albums__description ">
            <div class="albums__description__content"><?php the_field( 'albums__description' ); ?></div>
        </div>
        <div class="photoproducts__underPrice">
			<?php
			$underPrice = get_field( 'albums__under__image' );
			?>
            <div class="photoproducts__underPrice__image"><img src="<?= $underPrice['sizes']['large']; ?>" alt=""></div>


        <div class="photoproducts__underPrice__text"><?php the_field( 'albums__under__text' );
			?></div>
    </div>
        <div class="albums__price">
            <div class="albums__price__title"><?php the_field( 'albums__price__title' ); ?></div>

			<?php if ( have_rows( 'albums__price__repeater' ) ): ?>

            <div class="albums__price__table">

                <div class="albums__price__table__left">   <?php while ( have_rows( 'albums__price__repeater' ) ):
	                the_row(); ?><p><?php the_sub_field('albums__price__repeater__size');
                ?></p> <?php endwhile; ?></div>
                <div class="albums__price__table__center"><?php while ( have_rows( 'albums__price__repeater' ) ):
		                the_row(); ?><p><?php the_sub_field('albums__price__repeater__price');
		                ?></p> <?php endwhile; ?></div>
                <div class="albums__price__table__right"><?php while ( have_rows( 'albums__price__repeater' ) ):
		                the_row(); ?><p><?php the_sub_field('albums__price__repeater__sites');
		                ?></p> <?php endwhile; ?></div>
            </div>

        </div>
    <?php endif; ?>

</div>
</div>