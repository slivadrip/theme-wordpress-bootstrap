<?php 

// Incluindo nosso arquivo customizer
require get_template_directory() . '/inc/customizer.php';

remove_action('wp_head','wp_generator');

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '', 'all');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);	

	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/assets/js/template.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé'
	)
);

// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));
add_theme_support('custom-logo', array(
	'height'	=> 52,
	'width'		=> 324
));

// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Redes Sociais',
			'id'		=> 'redes-sociais',
			'description'	=> 'Widgets para redes sociais',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
}

// Alterar o número de itens por página no blog

function num_itens_blog( $query ){
	if( is_admin() || ! $query->is_main_query() )
	return;

	// Página blog
	if ( is_home() ){
		$query->set( 'posts_per_page', 2 );
		return;
	}
}

add_action( 'pre_get_posts', 'num_itens_blog', 1 );



function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


