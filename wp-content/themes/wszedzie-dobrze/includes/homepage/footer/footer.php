
<div class="footer ">
    <div class="footer__container">
        <div class="footer__left">
            <div class="footer__logo">
		        <?php $bgc = get_field('footer__logo', 6); ?>
                <img src="<?php echo $bgc['sizes']['large']; ?>" alt="">
            </div>
            <div class="footer__contact">
                <div class="footer__contact-email"><?php the_field('footer__contact', 6); ?></div>
            </div>

        </div>
        <div class="footer__right">

            <?php if (have_rows('footer__socials', 6)): ?>
                <?php while (have_rows('footer__socials', 6)): the_row(); ?>
                    <div class="footer__socials">
                        <a href="<?php the_sub_field('facebook'); ?>"><i class="fa-brands fa-facebook"></i></a>
                        <a href="<?php the_sub_field('instagram'); ?>"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="footer__copy"><?php the_field('footer__copy', 6); ?></div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
