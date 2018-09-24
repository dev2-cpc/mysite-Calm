<?php 
function wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;
  
  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = ''; //текст ссылки "Предыдущая страница"
  $a['next_text'] = ''; //текст ссылки "Следующая страница"
  
  if ($max > 1) echo '<nav class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</nav>';
}

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Website settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  //acf_add_options_sub_page(array(
  //  'page_title'  => 'Subpage',
  //  'menu_title'  => 'Subpage',
  //  'parent_slug' => 'theme-general-settings',
  //));
  
  
} 

add_filter('mce_buttons', 'mce_page_break');
function mce_page_break( $mce_buttons ){
	$pos = array_search('wp_more', $mce_buttons, true);

	if( $pos !== false ) {
		$buttons = array_slice( $mce_buttons, 0, $pos );
		$buttons[] = 'wp_page';
		$mce_buttons = array_merge( $buttons, array_slice($mce_buttons, $pos) );
	}

	return $mce_buttons;
}

/*
 * Добавление колонки
 */
function true_user_id_column( $columns ) {
	$columns['user_id'] = 'ID';
	return $columns;
}
add_filter('manage_users_columns', 'true_user_id_column');
 
/*
 * Заполнение колонки
 */
function true_user_id_column_content($value, $column_name, $user_id) {
	if ( 'user_id' == $column_name )
		return $user_id;
	return $value;
}
add_action('manage_users_custom_column',  'true_user_id_column_content', 10, 3);
 
/*
 * Оформление колонки (необязательно)
 */
function true_user_id_column_style(){
	echo '<style>.column-user_id{width: 5%}</style>';
}
add_action('admin_head-users.php',  'true_user_id_column_style');
?>