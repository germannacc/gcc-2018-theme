<?php function get_the_archive_title() {
    if ( is_category() ) {
        /* translators: Category archive title. 1: Category name */
        $title = sprintf( __( 'Category: %s', 'gcc-wp-2018' ), single_cat_title( '', false ) );
    } elseif ( is_tag() ) {
        /* translators: Tag archive title. 1: Tag name */
        $title = sprintf( __( 'Tag: %s', 'gcc-wp-2018' ), single_tag_title( '', false ) );
    } elseif ( is_author() ) {
        /* translators: Author archive title. 1: Author name */
        $title = sprintf( __( 'Author: %s', 'gcc-wp-2018' ), '<span class="vcard">' . get_the_author() . '</span>' );
    } elseif ( is_year() ) {
        /* translators: Yearly archive title. 1: Year */
        $title = sprintf( __( 'Year: %s', 'gcc-wp-2018' ), get_the_date( _x( 'Y', 'yearly archives date format', 'gcc-wp-2018' ) ) );
    } elseif ( is_month() ) {
        /* translators: Monthly archive title. 1: Month name and year */
        $title = sprintf( __( 'Month: %s', 'gcc-wp-2018' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'gcc-wp-2018' ) ) );
    } elseif ( is_day() ) {
        /* translators: Daily archive title. 1: Date */
        $title = sprintf( __( 'Day: %s', 'gcc-wp-2018' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'gcc-wp-2018' ) ) );
    } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside', 'gcc-wp-2018' ) ) {
            $title = _x( 'Asides', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery', 'gcc-wp-2018' ) ) {
            $title = _x( 'Galleries', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-image', 'gcc-wp-2018' ) ) {
            $title = _x( 'Images', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-video', 'gcc-wp-2018' ) ) {
            $title = _x( 'Videos', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-quote', 'gcc-wp-2018' ) ) {
            $title = _x( 'Quotes', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-link', 'gcc-wp-2018' ) ) {
            $title = _x( 'Links', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-status', 'gcc-wp-2018' ) ) {
            $title = _x( 'Statuses', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-audio', 'gcc-wp-2018' ) ) {
            $title = _x( 'Audio', 'post format archive title', 'gcc-wp-2018' );
        } elseif ( is_tax( 'post_format', 'post-format-chat', 'gcc-wp-2018' ) ) {
            $title = _x( 'Chats', 'post format archive title', 'gcc-wp-2018' );
        }
    } elseif ( is_post_type_archive() ) {
        /* translators: Post type archive title. 1: Post type name */
        $title = sprintf( __( 'Archives: %s', 'gcc-wp-2018' ), post_type_archive_title( '', false ) );
    } elseif ( is_tax() ) {
        $tax = get_taxonomy( get_queried_object()->taxonomy );
        /* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
        $title = sprintf( __( '%1$s: %2$s', 'gcc-wp-2018' ), $tax->labels->singular_name, single_term_title( '', false ) );
    } else {
        $title = __( 'Archives', 'gcc-wp-2018' );
    }
    /**
     * Filters the archive title.
     *
     * @since 4.1.0
     *
     * @param string $title Archive title to be displayed.
     */
    return apply_filters( 'get_the_archive_title', $title );
}
 ?>
