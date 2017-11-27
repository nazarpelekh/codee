<?php get_header(); ?>
    <section class="top-block" style="background-image: url(<?php the_field('background-top') ?>);">
        <div class="wrap">
            <h1 class="codee"><span>[</span>code<b class="element" data-words="<?php echo get_field('appears_text') ?>"></b><span>]</span></h1>
        </div>
    </section>
	<section class="about_us">
		<div class="wrap">
			<h2><?php _e("[:en]About us[:ua]Про нас[:]"); ?></h2>
			<div class="about_cols flex_center">
				<div class="about_col">
					<figure class="i-wp"></figure>
					<div><?php the_field( 'wp_desc' ); ?></div>
				</div>
				<div class="about_col">
					<figure class="i-ui"></figure>
					<div><?php the_field( 'ui_desc' ); ?></div>
				</div>
				<div class="about_col">
					<figure class="i-skills"></figure>
					<div><?php the_field( 'skills_desc' ); ?></div>
				</div>
			</div>
			<div class="about_info"></div>
			<div class="about_general_info"><?php the_content(); ?></div>
		</div>
	</section>
    <section class="contact-us">
        <div class="wrap">
            <h2><?php _e("[:en]Get in touch[:ua]Зв'яжіться з нами[:]"); ?></h2>
	        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
        </div>
    </section>
<?php get_footer(); ?>