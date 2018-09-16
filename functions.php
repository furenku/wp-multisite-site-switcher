<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



add_shortcode('site-switcher','site_switcher');
function site_switcher() {

$sites = get_sites();
?>

    <form action="<?php echo get_stylesheet_directory_uri(); ?>/site-navigation.php" method="post">

        <select name="site_url">

            <?php

            foreach( $sites as $site ) :
                $site = get_blog_details( array( 'blog_id' => $site->blog_id ) );
                ?>

                <option value="<?php echo $site->siteurl; ?>">
                    <?php echo $site->blogname; ?>        
                </option>

                <?php
            endforeach;

            ?>

        <input type="submit" value="Go">

        </select>

    </form>

<?php



}
?>