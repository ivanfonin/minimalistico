<?php
/**
 * Template for displaying search forms in Minimalistico
 *
 */ ?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" id="<?php echo $unique_id; ?>" class="uk-input uk-form-width-medium" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'minimalistico' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="uk-button uk-button-default uk-padding-small">
        <span uk-icon="icon: search"></span>
    </button>
</form>
