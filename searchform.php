<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package spurs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label class="assistive-text screen-reader-text" for="s"><?php esc_html_e( 'Search', 'spurs' ); ?></label>
    <div class="input-group">
        <input class="field form-control" id="s" name="s" type="text"
               placeholder="<?php esc_attr_e( 'Search &hellip;', 'spurs' ); ?>" value="<?php the_search_query(); ?>">
        <span class="input-group-btn">
			<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
                   value="<?php esc_attr_e( 'Search', 'spurs' ); ?>">
	    </span>
    </div>
</form>
