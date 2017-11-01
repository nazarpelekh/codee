<?php get_header(); ?>
    <section class="top-block" style="background-image: url(<?php the_field('background-top') ?>);">
        <div class="wrap">
            <h1 class="codee">We <span>[</span>code<b class="element" data-words="<?php echo get_field('appears_text') ?>"></b><span>]</span></h1>
        </div>
    </section>
    <section class="contact-us">
        <div class="wrap">
            <h2><?php _e("[:en]Get in touch[:ua]Зв'яжіться з нами[:]"); ?></h2>
	        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
        </div>
    </section>
<?php get_footer(); ?>