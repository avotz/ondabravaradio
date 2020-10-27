<?php 
$slides = [];
$args = array(
  'post_type' => 'anuncio',
  'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
  'posts_per_page' => 10,

);
$items = new WP_Query($args);

if ($items->have_posts()) {


    while ($items->have_posts()) {
        $items->the_post();
      
        
      
          
    
              $id = get_post_thumbnail_id($post->ID);
              $thumb_url = wp_get_attachment_image_src($id, 'large', true);
            
                
              $slide = [
                'img' => esc_url($thumb_url[0]),
                'title' => $post->post_title,
                'url' => rwmb_meta('rw_anuncio_url') ? rwmb_meta('rw_anuncio_url') : '',
              ];
                
              
              $slides[] = $slide;
            
              
            
        
          
            

            } 
      
    
      


}	

?>

<div class="glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
    <?php foreach($slides as $slide) : ?>
        <li class="glide__slide h-full flex flex-col items-center justify-center text-center px-4">
        <?php if($slide['url']) : ?>
          <a href="<?= $slide['url'] ?>" target="_blanck" rel="noopener noreferrer">
            <img src="<?= $slide['img'] ?>" alt="<?= $slide['title'] ?>" class="object-cover">
          </a>
        <?php else: ?>
          <img src="<?= $slide['img'] ?>" alt="<?= $slide['title'] ?>" class="object-cover">
        <?php endif ?>
         
      </li>
      <?php endforeach ?>
	</ul>
  </div>
 
</div>