<div class="contact">
    <div class="contact__wrapper">
        <h2 class="contact__header"><?php the_field('contact__header'); ?></h2>
        <div class="contact__info"><?php the_field('contact__info'); ?></div>
        <div class="contact__form">
            <?php echo apply_shortcodes( '[wpforms id="216" title="Contact form 1"]' ); ?></div>
    </div>
</div>