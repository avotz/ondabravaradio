<?php

function ondabravaradio_register_meta_boxes( $meta_boxes ) {
	$prefix = 'rw_';

	$meta_boxes[] = array(
		'id' => 'anuncio_content',
		'title' => esc_html__( 'Anuncios', 'ondabravaradio' ),
		'post_types' => array('anuncio', 'post' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'anuncio_url',
				'type' => 'url',
				'name' => esc_html__( 'URL', 'ondabravaradio' ),
			),
		),
	);

	$meta_boxes[] = array(
		'id' => 'equipo_content',
		'title' => esc_html__( 'Información', 'ondabravaradio' ),
		'post_types' => array('equipo'),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'redes_list',
				'name'    => 'Redes Sociales',
				'type'    => 'text_list',

				'clone' => true,

				// Options: array of Placeholder => Label for text boxes
				// Number of options are not limited
				'options' => array(
					'Facebook'      => 'Red Social',
					'https://' => 'Url',
				),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'ondabravaradio_register_meta_boxes' );
