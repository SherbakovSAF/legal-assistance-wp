<?php
add_action('wp_enqueue_scripts', 'linking_style');
add_action('init', 'register_post_types');
add_action('init', 'register_social_media');

add_action('wp_ajax_handle_form_submission', 'handle_form_submission'); // Для авторизованных пользователей
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission'); // Для неавторизованных пользователей

add_filter( 'upload_mimes', 'extra_mime_types' );

add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-logo');
add_theme_support( 'title-tag');

add_shortcode( 'art_feedback', 'art_feedback' );


function art_feedback() {
	ob_start();
	?>
	<form>
          <div class="popup-bg_form-content-wrap">
               <button class="popup-bg_form-content_close-popup">Закрыть</button>
               <input type="text" id="popUpName" name="name" placeholder="Ваше имя" required pattern="^[a-zA-ZА-Яа-я\s]+$" >
               <input type="tel" id="popUpTel" name="phone" placeholder="Ваш номер телефона" pattern="^.{17,}$" required >
               <textarea id="popUpMessage" id="popUpMsg" placeholder="Ваше сообщение"></textarea> 
			<button class="popup-bg_form-content_form-submit" type="submit">Отправить</button>
          </div>
     </form>
	<?php
	return ob_get_clean();
}

function register_post_types(){
	register_post_type( 'tariffs', [
		'label'  => null,
		'labels' => [
			'name'               => 'Тарифы', // основное название для типа записи
			'singular_name'      => 'Тариф', // название для одной записи этого типа
			'add_new'            => 'Добавить тариф', // для добавления новой записи
			'add_new_item'       => 'Добавление тарифа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование тарифа', // для редактирования типа записи
			'new_item'           => 'Новый тариф', // текст новой записи
			'view_item'          => 'Смотреть тариф', // для просмотра записи этого типа.
			'search_items'       => 'Искать тариф', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Тарифы', // название меню
		],
		'description'            => 'Тарифы оказания услуг',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-cart',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function register_social_media(){
	register_post_type( 'social_media', [
		'label'  => null,
		'labels' => [
			'name'               => 'Социальные сети', // основное название для типа записи
			'singular_name'      => 'Соц.сеть', // название для одной записи этого типа
			'add_new'            => 'Добавить соц.сеть', // для добавления новой записи
			'add_new_item'       => 'Добавление соц.сети', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование соц.сети', // для редактирования типа записи
			'new_item'           => 'Новая соц.сеть', // текст новой записи
			'view_item'          => 'Смотреть соц.сеть', // для просмотра записи этого типа.
			'search_items'       => 'Искать соц.сеть', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Соц.сети', // название меню
		],
		'description'            => 'Иконки соц.сетей',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-site',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title','custom-fields'],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function extra_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

function linking_style(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('roboto', get_template_directory_uri().'/assets/fonts/Roboto/stylesheet.css');
	wp_enqueue_style('gotham', get_template_directory_uri().'/assets/fonts/GothamPro/stylesheet.css');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
	wp_enqueue_script('mainJS', get_template_directory_uri().'/assets/script.bundle.js', [], null, true);
}