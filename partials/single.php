<?php
/*
    @package Skeletos
*/
?>

<article <?php post_class(); ?>>

    <header>

        <h1 class="page-title"><?php the_title(); ?></h1>

        <p class="date">
            posted by: <?php the_author_link(); ?><br />
            <time datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time><br />
            <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?>
        </p>

    </header>

    <?php

    the_content();

    get_template_part('partials/meta', get_post_format());

    comments_template();

    ?>

</article>