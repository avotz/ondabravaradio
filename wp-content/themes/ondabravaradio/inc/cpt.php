<?php

add_filter( 'rwmb_meta_boxes', 'ondabravaradio_register_meta_boxes' );

function ondabravaradio_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';


     // 2st meta box
    $meta_boxes[] = array(
        'id'       => 'ads_content',
        'title'    => 'Anuncios',
        'pages'    => array( 'anuncio','post' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
              array(
                'name'  => 'Url',
                'desc'  => 'Format: Url',
                'id'    => $prefix . 'ad_url',
                'type'  => 'url',
                'std'   => '',
                'class' => 'custom-class'
                
            )

        )
    );

  
    


    return $meta_boxes;
}

