<?php
/**
 * The template for displaying search forms
 */
?>
      <form method="get" id="searchform" class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" id="search" name="s" value="<?php echo get_search_query(); ?>">
        <label for="search" class="text">Search <?php bloginfo( 'name' ); ?></label>
        <a href="#" class="icon icon-search" title="Submit Search">Submit Search</a>
      </form>
