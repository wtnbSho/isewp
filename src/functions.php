<?php

//使用するJSファイルの読み込み
function add_my_scripts() {
	// ▼最低限必要な処理

	if ( is_admin() ) return; // 管理画面の場合は以下を読み込まない

	//WordPress同梱のjQueryの読み込み（ここにこれを書かなくても、他のJS読み込み時に「jQuery」ハンドルに依存、と書いた時点で、JQとマイグレートが勝手に読み込まれる）
	//「jQuery」というハンドル名を使用するとjqueryとmigrateがセットになるのでmigrate不要の場合は「jquery-core」と書く
	wp_enqueue_script( 'jquery-core' );

	// 1.9 以上のjQueryで廃止されたAPIを使ったコードが動くようになる…必要に応じて有効化する必要があるかも
	wp_dequeue_script( 'jquery-migrate' );

	// inview
	// wp_enqueue_script('inview', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js',array('jquery'),false,true);

	// splide-js
	wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',array(),false,true);
  //splide-ex
	wp_enqueue_script('splide-ex', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js',array('splide-js'),false,true);
  // gsap-js
	wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js',array('jquery'),false,true);
  // gsap-st
	wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js',array('gsap-js'),false,true);
  // script
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js',array('jquery','gsap-js'),false,true);

	// if(is_front_page()){// トップページ
	// 	wp_enqueue_script('slick',get_template_directory_uri().'/js/slick.min.js',array('jquery'),false,true);
	// 	wp_enqueue_script('simplebar',get_template_directory_uri().'/js/simplebar.js',array('jquery'),false,true);
	// }

}
add_action( 'wp_print_scripts', 'add_my_scripts', 9998 );

// wp_footer末尾で出力するスクリプトの指定
// ※外部JSファイルをインクルードする方法ではなく、インラインで記述することで、スクリプト内でPHPを使用出来る。
function my_js() {
	get_template_part('js/script');

}
add_action('wp_footer', 'my_js', 9999);

/* エディタにもサイトと同じCSSを適用させる */
add_editor_style('css/reset.css'); //リセット
add_editor_style('css/common.css'); //common
add_editor_style('css/base.css'); //commonの上書き、共通
add_editor_style('css/page-index.css'); //投稿オリジナル

/* var_dump関数のラッパー */
function my_dump( $a ) {
  if ( is_user_logged_in() ) {
    echo '<pre style="background:yellow;padding: 10px;">' . "\n";
    var_dump( $a );
    echo '</pre>' . "\n";
  }
}

// 自作のモバイル判別関数(組み込み関数「wp_id_mobile()」はiPadもモバイルと判定してしまうため)
function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/* 直近の親ページスラッグ */
function is_parent_slug() {
  global $post;
  if ( $post->post_parent ) {
    $post_data = get_post( $post->post_parent );
    return $post_data->post_name;
  }
}

/* 祖先の親ページスラッグ */
//function is_ancestors_slug() {
//  global $post;
//  $parent_id = $post->ancestors[ count( $post->ancestors ) - 1 ];
//  $parent_slug = get_post( $parent_id )->post_name;
//  return $parent_slug;
//}
function get_most_parent_page($current_id = ''){
	global $post;
	if($current_id == '') $current_id ==$post->ID;
	$current_post = get_post($current_id);
	$par_id = $current_post->post_parent;
	while($par_id!= 0) :
		$par_post = get_post($par_id);
		$current_post = $par_post;
		$par_id = $par_post->post_parent;
	endwhile;
	return $current_post;
}
function is_ancestors_slug() {
  global $post;
  $parent_id = get_most_parent_page();
  $parent_slug = $parent_id->post_name;
  return $parent_slug;
}

/* 管理画面 > 固定ページ一覧にスラッグの列を追加 */
function add_posts_columns_slug( $columns ) {
  $columns[ 'slug' ] = 'スラッグ';
  echo '';
  return $columns;
}
add_filter( 'manage_pages_columns', 'add_posts_columns_slug' );

/* 管理画面 > 固定ページスラッグを表示 */
function custom_posts_columns_slug( $column_name, $post_id ) {
  if ( $column_name == 'slug' ) {
    $post = get_post( $post_id );
    $slug = $post->post_name;
    echo esc_attr( $slug );
  }
}
add_action( 'manage_pages_custom_column', 'custom_posts_columns_slug', 10, 2 );

/* MW WP Form > ビジュアルエディター非表示 */
function visual_editor_off() {
  global $typenow;
  if ( $typenow == 'mw-wp-form' ) {
    add_filter( 'user_can_richedit', 'off_visual_editor' );
  }
}

function off_visual_editor() {
  return false;
}
add_action( 'load-post.php', 'visual_editor_off' );
add_action( 'load-post-new.php', 'visual_editor_off' );

/* ダッシュボードの不要なブロック削除 */
function remove_dashboard_widget() {
  //remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); // サイトヘルスステータス
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress イベントとニュース
  remove_action( 'welcome_panel', 'wp_welcome_panel' ); // ウェルカムパネル
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widget' );

// ビジュアルエディタに備わっている余計なフィルターを無効化する（投稿タイプが「投稿」以外の場合のみ）
function custom_tiny_mce_before_init( $init_array ) {
  global $post_type;
  global $allowedposttags;
  $init_array[ 'valid_elements' ] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array[ 'extended_valid_elements' ] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array[ 'valid_children' ] = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']'; //aタグ内にすべてのタグを入れられるように
  $init_array[ 'indent' ] = true; //インデントを有効に
  if ( $post_type != 'post' ) { // ※ここで「== page」と書いた場合、ウィジェットやカスタムフィールド内のエディタをフォロー出来なくなるので注意
    $init_array[ 'wpautop' ] = false; //テキストやインライン要素を自動的にpタグで囲む機能を無効に
    $init_array[ 'force_p_newlines' ] = false; //改行したらpタグを挿入する機能を無効に
  }
  return $init_array;
}
if ( is_admin() ) {
  add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_before_init' );
}

/* MW WP Form > フォーム > 選択項目によって必須を操作 */
function my_validation_rule( $Validation, $data ) {
  if ( $data[ 'items' ] === '1' ) {
    $Validation->set_rule( 'お問い合わせ内容', 'noEmpty', array(
      'message' => '未入力です。'
    ) );
  }
  if ( $data[ 'items' ] === '2' ) {
    $Validation->set_rule( '希望職種', 'noEmpty', array(
      'message' => '未入力です。'
    ) );
    $Validation->set_rule( '備考', 'noEmpty', array(
      'message' => '未入力です。'
    ) );
  }
  if ( $data[ 'items' ] === '3' ) {
    $Validation->set_rule( 'お問い合わせ内容', 'noEmpty', array(
      'message' => '未入力です。'
    ) );
  }
  return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-71', 'my_validation_rule', 10, 2 );

/* MW WP Form > フォーム > 選択項目によって自動返信メールを操作 */
function my_mail( $Mail, $values, $Data ) {
  if ( $Data->get( 'items' ) == '採用について' ) {
    $name = $Data->get( 'お名前' );
    $items = $Data->get( 'items' );
    $kana = $Data->get( 'フリガナ' );
    $zip = $Data->get( '郵便番号' );
    $pref = $Data->get( '都道府県' );
    $addr = $Data->get( '市区町村' );
    $addr2 = $Data->get( '番地' );
    $addr3 = $Data->get( '住所4' );
    $tel = $Data->get( '電話番号' );
    $mail = $Data->get( 'メールアドレス' );
    $keitai = $Data->get( '採用形態' );
    $shokushu = $Data->get( '希望職種' );
    $biko = $Data->get( '備考' );
    $Mail->body = <<<CONTACT
{$name}　様
------------------------------
【岐阜ベルト】からのご案内
本メールはサイトからお問い合わせされた方に送信する自動配信メールです。
------------------------------

この度は、お問い合わせをいただき、ありがとうございます。
※ご返信までに３～４営業日いただく場合もございます。あらかじめご了承ください。

------------------------------
●お問い合わせ項目：{$items}
●お名前：{$name}　様
●フリガナ：{$kana}　様
●ご住所：
　〒{$zip}
　{$pref} {$addr} {$addr2} {$addr3}
●電話番号：{$tel}
●メールアドレス：{$mail}
●採用形態：{$keitai}
●希望職種：{$shokushu}
●備考：
{$biko}

------------------------------
株式会社 岐阜ベルト
〒500-8848
岐阜県岐阜市神明町2丁目14番地
https://xxx
TEL 058-265-2381
FAX 058-266-9684
------------------------------
CONTACT;
  }
  return $Mail;
}
add_filter( 'mwform_auto_mail_mw-wp-form-71', 'my_mail', 10, 3 );

/* MW WP Form > 選択項目によって管理者返信メールを操作 */
function my_mail2( $Mail, $values, $Data ) {
  if ( $Data->get( 'items' ) == '採用について' ) {
    $name = $Data->get( 'お名前' );
    $items = $Data->get( 'items' );
    $kana = $Data->get( 'フリガナ' );
    $zip = $Data->get( '郵便番号' );
    $pref = $Data->get( '都道府県' );
    $addr = $Data->get( '市区町村' );
    $addr2 = $Data->get( '番地' );
    $addr3 = $Data->get( '住所4' );
    $tel = $Data->get( '電話番号' );
    $mail = $Data->get( 'メールアドレス' );
    $keitai = $Data->get( '採用形態' );
    $shokushu = $Data->get( '希望職種' );
    $naiyo = $Data->get( '備考' );
    $Mail->body = <<<CONTACT
管理者　様
サイトからお問い合わせがありました。

------------------------------
●お問い合わせ項目：{$items}
●お名前：{$name}　様
●フリガナ：{$kana}　様
●ご住所：
　〒{$zip}
　{$pref} {$addr} {$addr2} {$addr3}
●電話番号：{$tel}
●メールアドレス：{$mail}
●採用形態：{$keitai}
●希望職種：{$shokushu}
●備考：
{$biko}

------------------------------
株式会社 岐阜ベルト
〒500-8848
岐阜県岐阜市神明町2丁目14番地
https://xxx
TEL 058-265-2381
FAX 058-266-9684
------------------------------
CONTACT;
  }
  return $Mail;
}
add_filter( 'mwform_admin_mail_mw-wp-form-71', 'my_mail2', 10, 3 );

/* All-in-One WP Migration 除外ファイル設定 */
$_theme_name = 'isewp';
add_filter(
  'ai1wm_exclude_themes_from_export',
  function ($exclude_filters) {
    global $_theme_name;
    $exclude_filters = array(
      "{$_theme_name}/node_modules",
      "{$_theme_name}/.git",
      "{$_theme_name}/.gitignore",
      "{$_theme_name}/.vscode",
      "{$_theme_name}/.prettierignore",
      "{$_theme_name}/.prettierrc",
      "{$_theme_name}/README.md",
      "{$_theme_name}/icomoon",
      "{$_theme_name}/src",
      "{$_theme_name}/package.json",
    );
    return $exclude_filters;
  }
);



/* -------------------------------------------------------------------
 * スマホ用ページナビの出力
 * ------------------------------------------------------------------- */
function sp_pagenavi() {
  global $wp_query, $wp_rewrite;

  $pagenum_link = html_entity_decode( get_pagenum_link() );
  $url_parts = explode( '?', $pagenum_link );

  $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
  $current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  //$pagenum_link = trailingslashit($url_parts[0]) . '%_%';

  $format = $wp_rewrite->using_index_permalinks() && !strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
  $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

  $link = $pagenum_link . $format;
  $before = ( $current > 1 ) ? $current - 1 : 1;
  $after = ( $current < $total ) ? $current + 1 : $total;
  ?>
<div class="page_number"><?php echo $current; ?>ページ（全<?php echo $total; ?>ページ）</div>
<ul class="pager_nav">
  <li><a href="<?php echo str_replace('%#%', 1, $link); ?>">|＜</a></li>
  <li><a href="<?php echo str_replace('%#%', $before, $link); ?>">＜前のページ</a></li>
  <li><a href="<?php echo str_replace('%#%', $after, $link); ?>">次のページ＞</a></li>
  <li><a href="<?php echo str_replace('%#%', $total, $link); ?>">＞|</a></li>
</ul>
<?php
}


?>
