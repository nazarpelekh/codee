<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title><?php wpa_title(); ?></title>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="theme-color" content="#6aa35b"><!--add color-->
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  data-hash="<?php wpa_fontbase64(true); ?>" data-a="<?php echo admin_url('admin-ajax.php'); ?>">
<main>
    <header>
        <div class="wrap">
            <a id="logo" class="codee" href="<?php echo get_option('home') ?>">
                <span>[</span>codee<span>]</span>
            </a>
	        <?php echo qtranxf_generateLanguageSelectCode('text'); ?>
        </div>
    </header>
