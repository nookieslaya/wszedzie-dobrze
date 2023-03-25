<?php if ( have_rows( 'gallery__section' ) ): ?>
    <div class="gallery-container container">
		<?php while ( have_rows( 'gallery__section' ) ): the_row(); ?>

			<?php get_template_part( 'includes/gallery-page/gallery-header' ); ?>
            <div class="shortcode"><?php the_sub_field("gallery__shortcode") ;?></div>
			<?php if ( have_rows( 'gallery' ) ): ?>
                <div class="gallery-page">
                    <div class="wrapper">
                        <div class="gallery">
							<?php while ( have_rows( 'gallery' ) ): the_row(); ?>

									<?php $photo = get_sub_field( 'gallery-image' ); ?>
                                <div class="image"><span><img class="glightbox"
                                                              src="<?php echo $photo['sizes']['large']; ?>"
                                                              alt=""></span>
                                </div>
							<?php endwhile; ?>
                        </div>
                    </div>
                    <div class="preview-box">
                        <div class="details">
                            <span class="title"><p class="current-img"></p> <p class="total-img"></p></span>
                            <span class="icon fas fa-times"></span>
                        </div>
                        <div class="image-box">
                            <div class="slide prev"><i class="fas fa-angle-left"></i></div>
                            <div class="slide next"><i class="fas fa-angle-right"></i></div>
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="shadow"></div>
                </div>
			<?php endif; ?>
		<?php endwhile; ?>
    </div>
<?php endif; ?>

