<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<div class="main-section" id="front-page-main-section">
    <header class="single-post-header">
        <div class="container">
            <div class="logo-container">
                <!-- <img src="<?php echo get_template_directory_uri() ?>/dist/images/logo.svg" alt="Andrei Brindas Logo" class="logo"> -->
                <a href="/">Andrei <br> Brindas</a>
            </div>

            <nav class="nav">
                <?php wp_nav_menu(['primary_menu']) ?>
            </nav>
        </div>
    </header>
