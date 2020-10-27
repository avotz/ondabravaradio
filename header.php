<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ondabravaradio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	


	<header class="site-header bg-black text-white flex flex-wrap justify-between items-center py-4 px-2">
		<div class="site-branding text-2xl align-middle hidden md:block">
		    Escuchenos tambien en <a href="http://tunein.com/station/?StationId=110194" class="text-white" rel="noopener noreferrer" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="56 56 200 88" class="w-24 fill-current inline-block"><style>.st0{display:none}</style><g id="Logos"><g id="Logo__x2013__Horizontal_1A_12_"><path d="M95 96.8v4c0 .4-.4.8-.8.8h-5c-.2 0-.4.2-.4.4v21.2c0 .4-.4.8-.8.8h-4c-.4 0-.8-.4-.8-.8V102c0-.2-.2-.4-.4-.4h-5c-.4 0-.8-.4-.8-.8v-4c0-.4.4-.8.8-.8h16.4c.4 0 .8.4.8.8zm22-.8h-4c-.4 0-.8.4-.8.8v18.8c0 1.8-1.4 3.2-3.9 3.2-2.4 0-3.8-1.4-3.8-3.2V96.8c0-.4-.4-.8-.8-.8h-4c-.4 0-.8.4-.8.8v18.8c0 4.8 4 8.8 9.4 8.8 5.5 0 9.5-4 9.5-8.8V96.8c0-.4-.4-.8-.8-.8zm22.6 0h-4c-.4 0-.8.4-.8.8v15c0 .2-.3.3-.4.1l-5.5-15.2c-.1-.4-.4-.7-1-.7h-4.8c-.4 0-.8.4-.8.8v26.4c0 .4.4.8.8.8h4c.4 0 .8-.4.8-.8v-13.8c0-.2.3-.3.4-.1l5.4 14c.1.3.4.7 1.1.7h4.7c.4 0 .8-.4.8-.8V96.8c.1-.4-.3-.8-.7-.8zm20.7 22.4h-9.5c-.2 0-.4-.2-.4-.4v-4.8c0-.2.2-.4.4-.4h9c.4 0 .8-.4.8-.8v-4c0-.4-.4-.8-.8-.8h-9c-.2 0-.4-.2-.4-.4V102c0-.2.2-.4.4-.4h9.3c.4 0 .8-.4.8-.8v-4c0-.4-.4-.8-.8-.8h-14.5c-.4 0-.8.4-.8.8v26.4c0 .4.4.8.8.8h14.7c.4 0 .8-.4.8-.8v-4c0-.4-.4-.8-.8-.8zM256 59v62c0 1.7-1.3 3-3 3h-69v17c0 1.7-1.3 3-3 3H59c-1.7 0-3-1.3-3-3V79c0-1.7 1.3-3 3-3h119V59c0-1.7 1.3-3 3-3h72c1.7 0 3 1.3 3 3zm-78 23H62.5c-.3 0-.5.2-.5.5v55c0 .3.2.5.5.5h115c.3 0 .5-.2.5-.5V82zm35.8 17.4c0-.4-.4-.8-.8-.8h-3.4c-.2 0-.4-.2-.4-.4V81.8c0-.2.2-.4.4-.4h3c.4 0 .8-.4.8-.8v-3.8c0-.4-.4-.8-.8-.8h-12.4c-.4 0-.8.4-.8.8v3.8c0 .4.4.8.8.8h3c.2 0 .4.2.4.4v16.4c0 .2-.2.4-.4.4h-3.4c-.4 0-.8.4-.8.8v3.8c0 .4.4.8.8.8H213c.4 0 .8-.4.8-.8v-3.8zm22.4-22.6c0-.4-.4-.8-.8-.8h-4c-.4 0-.8.4-.8.8v15c0 .2-.3.3-.4.1l-5.5-15.2c-.1-.4-.4-.7-1-.7H219c-.4 0-.8.4-.8.8v26.4c0 .4.4.8.8.8h4c.4 0 .8-.4.8-.8V89.4c0-.2.3-.3.4-.1l5.4 14c.1.3.4.7 1.1.7h4.7c.4 0 .8-.4.8-.8V76.8z"  id="Logo_2_"/></g></g></svg></a>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation w-full md:w-auto">
			<div class="flex space-x-4 sm:space-x-6 items-center justify-center">
				<a href="http://romanticaestereo.com/" class="icon-romantica w-4 md:w-6" title="Romantica Estereo"><img src="<?php echo get_template_directory_uri(); ?>/img/romantica-icon-white.png" alt="Romantica Estereo"></a>

				<a href="https://www.facebook.com/radioondabrava" class="text-white hover:text-red-500" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-6 sm:w-6 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"/></svg></a>
			
				<a href="https://twitter.com/ondabravaradio" class="text-white hover:text-red-500" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-6 sm:w-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-3.594-1.555c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 3.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 4.557z"/></svg></a>
		
				<a href="https://www.instagram.com/ondabrava/" class="text-white hover:text-red-500" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-6 sm:w-6 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
				<a href="https://www.youtube.com/user/OndaBravaRadio" class="text-white hover:text-red-500" target="_blank" rel="noopener noreferrer"><svg class="h-6 w-6 sm:h-8 sm:w-8 fill-current" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M.522 17.874c.49 1.738 1.989 2.056 2.089 2.117 2.467.672 16.295.674 18.799 0 1.715-.496 2.03-2.017 2.089-2.117.653-3.474.696-8.003-.03-11.945l.03.196c-.49-1.738-1.989-2.056-2.089-2.117-2.434-.661-16.298-.686-18.799 0C.896 4.505.581 6.025.522 6.125c-.699 3.651-.734 7.84 0 11.749zm9.086-2.223V8.358l6.266 3.652z" /></svg></a>

				<a href="http://tunein.com/station/?StationId=110194" class="text-white hover:text-red-500" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="56 56 200 88" class="w-12 sm:w-16 fill-current"><style>.st0{display:none}</style><g id="Logos"><g id="Logo__x2013__Horizontal_1A_12_"><path d="M95 96.8v4c0 .4-.4.8-.8.8h-5c-.2 0-.4.2-.4.4v21.2c0 .4-.4.8-.8.8h-4c-.4 0-.8-.4-.8-.8V102c0-.2-.2-.4-.4-.4h-5c-.4 0-.8-.4-.8-.8v-4c0-.4.4-.8.8-.8h16.4c.4 0 .8.4.8.8zm22-.8h-4c-.4 0-.8.4-.8.8v18.8c0 1.8-1.4 3.2-3.9 3.2-2.4 0-3.8-1.4-3.8-3.2V96.8c0-.4-.4-.8-.8-.8h-4c-.4 0-.8.4-.8.8v18.8c0 4.8 4 8.8 9.4 8.8 5.5 0 9.5-4 9.5-8.8V96.8c0-.4-.4-.8-.8-.8zm22.6 0h-4c-.4 0-.8.4-.8.8v15c0 .2-.3.3-.4.1l-5.5-15.2c-.1-.4-.4-.7-1-.7h-4.8c-.4 0-.8.4-.8.8v26.4c0 .4.4.8.8.8h4c.4 0 .8-.4.8-.8v-13.8c0-.2.3-.3.4-.1l5.4 14c.1.3.4.7 1.1.7h4.7c.4 0 .8-.4.8-.8V96.8c.1-.4-.3-.8-.7-.8zm20.7 22.4h-9.5c-.2 0-.4-.2-.4-.4v-4.8c0-.2.2-.4.4-.4h9c.4 0 .8-.4.8-.8v-4c0-.4-.4-.8-.8-.8h-9c-.2 0-.4-.2-.4-.4V102c0-.2.2-.4.4-.4h9.3c.4 0 .8-.4.8-.8v-4c0-.4-.4-.8-.8-.8h-14.5c-.4 0-.8.4-.8.8v26.4c0 .4.4.8.8.8h14.7c.4 0 .8-.4.8-.8v-4c0-.4-.4-.8-.8-.8zM256 59v62c0 1.7-1.3 3-3 3h-69v17c0 1.7-1.3 3-3 3H59c-1.7 0-3-1.3-3-3V79c0-1.7 1.3-3 3-3h119V59c0-1.7 1.3-3 3-3h72c1.7 0 3 1.3 3 3zm-78 23H62.5c-.3 0-.5.2-.5.5v55c0 .3.2.5.5.5h115c.3 0 .5-.2.5-.5V82zm35.8 17.4c0-.4-.4-.8-.8-.8h-3.4c-.2 0-.4-.2-.4-.4V81.8c0-.2.2-.4.4-.4h3c.4 0 .8-.4.8-.8v-3.8c0-.4-.4-.8-.8-.8h-12.4c-.4 0-.8.4-.8.8v3.8c0 .4.4.8.8.8h3c.2 0 .4.2.4.4v16.4c0 .2-.2.4-.4.4h-3.4c-.4 0-.8.4-.8.8v3.8c0 .4.4.8.8.8H213c.4 0 .8-.4.8-.8v-3.8zm22.4-22.6c0-.4-.4-.8-.8-.8h-4c-.4 0-.8.4-.8.8v15c0 .2-.3.3-.4.1l-5.5-15.2c-.1-.4-.4-.7-1-.7H219c-.4 0-.8.4-.8.8v26.4c0 .4.4.8.8.8h4c.4 0 .8-.4.8-.8V89.4c0-.2.3-.3.4-.1l5.4 14c.1.3.4.7 1.1.7h4.7c.4 0 .8-.4.8-.8V76.8z"  id="Logo_2_"/></g></g></svg></a>

				<a href="https://api.whatsapp.com/send?phone=50660531041" class="text-white hover:text-red-500" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-6 sm:w-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg></a>

				<a href="#contact" class="js-open text-white hover:text-red-500" rel="noopener noreferrer"><svg class="w-6 h-6 sm:w-8 sm:h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg></a>
					
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
