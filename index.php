<?php
/**
 * The main template file
 *
 * @package Neon_Digital
 */

get_header();
?>

<main class="container section-padding">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'neon-digital' ); ?></p>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
?>
