<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gsk
 */

get_header();

if ( have_posts() ) :
	if ( is_category('projects') ) :

		get_template_part( 'templates/category/projects' );

	endif;

	if ( is_category('publications') ) :

		get_template_part( 'templates/category/publications' );

	endif;
endif;
get_footer();
