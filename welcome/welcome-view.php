<?php
/**
 * Welcome Page View
 *
 * @since 1.0.0
 * @package WPW
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}
?>

<div class="wrap about-wrap">

    <h1><?php printf( __( 'WordPress Product &nbsp; %s', 'WPW' ), WPW_VERSION ); ?></h1>

    <div class="about-text">
        <?php printf( __( "WordPress Product's welcome page boilerplate for WordPress plugins.", 'WPW' ), WPW_VERSION ); ?>
    </div>

    <div class="wp-badge welcome__logo"></div>

    <div class="feature-section one-col">
        <h3><?php _e( 'Get Started', 'WPW' ); ?></h3>
        <ul>
            <li><strong><?php _e( 'Step #1:', 'WPW' ); ?></strong> <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'WPW' ); ?></li>
            <li><strong><?php _e( 'Step #2:', 'WPW' ); ?></strong> <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'WPW' ); ?></li>
            <li><strong><?php _e( 'Step #3:', 'WPW' ); ?></strong> <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'WPW' ); ?></li>
        </ul>
     </div>

    <div class="feature-section one-col">
        <h3><?php _e( 'What is Inside?', 'WPW' ); ?></h3>
        <div class="headline-feature feature-video">
            <div class='embed-container'>
                <iframe src='https://www.youtube.com/embed/3RLE_vWJ73c' frameborder='0' allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="feature-section two-col">
        <div class="col">
            <img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
            <h3><?php _e( 'Some Feature', 'WPW' ); ?></h3>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.', 'WPW' ); ?></p>
        </div>
        <div class="col">
            <img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
            <h3><?php _e( 'Some Feature', 'WPW' ); ?></h3>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.', 'WPW' ); ?></p>
        </div>
    </div>

    <div class="feature-section two-col">
        <div class="col">
            <img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
            <h3><?php _e( 'Some Feature', 'WPW' ); ?></h3>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.', 'WPW' ); ?></p>
        </div>

        <div class="col">
            <img src="http://placehold.it/600x180/0092F9/fff?text=WELCOME" />
            <h3><?php _e( 'Some Feature', 'WPW' ); ?></h3>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed sapien quam. Sed dapibus est id enim facilisis, at posuere turpis adipiscing. Quisque sit amet dui dui.', 'WPW' ); ?></p>
        </div>
    </div>

</div>
