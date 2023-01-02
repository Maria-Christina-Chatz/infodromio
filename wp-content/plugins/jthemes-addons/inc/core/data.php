<?php
/**
 * Class for managing plugin data
 */
class Ts_Data {

	/**
	 * Constructor
	 */
	function __construct() {}

	/**
	 * Shortcode groups
	 */
	public static function groups() {
		return apply_filters( 'ts/data/groups', array(
				'all'     => __( 'All', 'jthemes' ),
				'content' => __( 'Content', 'jthemes' ),
				'box'     => __( 'Box', 'jthemes' ),
				'media'   => __( 'Media', 'jthemes' ),
				'gallery' => __( 'Gallery', 'jthemes' ),
				'data'    => __( 'Data', 'jthemes' ),
				'jthemes'    => __( 'Jthemes', 'jthemes' ),
				'other'   => __( 'Other', 'jthemes' )
			) );
	}

	/**
	 * Border styles
	 */
	public static function borders() {
		return apply_filters( 'ts/data/borders', array(
				'none'   => __( 'None', 'jthemes' ),
				'solid'  => __( 'Solid', 'jthemes' ),
				'dotted' => __( 'Dotted', 'jthemes' ),
				'dashed' => __( 'Dashed', 'jthemes' ),
				'double' => __( 'Double', 'jthemes' ),
				'groove' => __( 'Groove', 'jthemes' ),
				'ridge'  => __( 'Ridge', 'jthemes' )
			) );
	}

	/**
	 * Font-Awesome icons
	 */
	public static function icons() {
		return apply_filters( 'ts/data/icons', array( 'adjust', 'adn', 'align-center', 'align-justify', 'align-left', 'align-right', 'ambulance', 'anchor', 'android', 'angle-double-down', 'angle-double-left', 'angle-double-right', 'angle-double-up', 'angle-down', 'angle-left', 'angle-right', 'angle-up', 'apple', 'archive', 'arrow-circle-down', 'arrow-circle-left', 'arrow-circle-o-down', 'arrow-circle-o-left', 'arrow-circle-o-right', 'arrow-circle-o-up', 'arrow-circle-right', 'arrow-circle-up', 'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'arrows', 'arrows-alt', 'arrows-h', 'arrows-v', 'asterisk', 'automobile', 'backward', 'ban', 'bank', 'bar-chart-o', 'barcode', 'bars', 'beer', 'behance', 'behance-square', 'bell', 'bell-o', 'bitbucket', 'bitbucket-square', 'bitcoin', 'bold', 'bolt', 'bomb', 'book', 'bookmark', 'bookmark-o', 'briefcase', 'btc', 'bug', 'building', 'building-o', 'bullhorn', 'bullseye', 'cab', 'calendar', 'calendar-o', 'camera', 'camera-retro', 'car', 'caret-down', 'caret-left', 'caret-right', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'caret-up', 'certificate', 'chain', 'chain-broken', 'check', 'check-circle', 'check-circle-o', 'check-square', 'check-square-o', 'chevron-circle-down', 'chevron-circle-left', 'chevron-circle-right', 'chevron-circle-up', 'chevron-down', 'chevron-left', 'chevron-right', 'chevron-up', 'child', 'circle', 'circle-o', 'circle-o-notch', 'circle-thin', 'clipboard', 'clock-o', 'cloud', 'cloud-download', 'cloud-upload', 'cny', 'code', 'code-fork', 'codepen', 'coffee', 'cog', 'cogs', 'columns', 'comment', 'comment-o', 'comments', 'comments-o', 'compass', 'compress', 'copy', 'credit-card', 'crop', 'crosshairs', 'css3', 'cube', 'cubes', 'cut', 'cutlery', 'dashboard', 'database', 'dedent', 'delicious', 'desktop', 'deviantart', 'digg', 'dollar', 'dot-circle-o', 'download', 'dribbble', 'dropbox', 'drupal', 'edit', 'eject', 'ellipsis-h', 'ellipsis-v', 'empire', 'envelope', 'envelope-o', 'envelope-square', 'eraser', 'eur', 'euro', 'exchange', 'exclamation', 'exclamation-circle', 'exclamation-triangle', 'expand', 'external-link', 'external-link-square', 'eye', 'eye-slash', 'facebook', 'facebook-square', 'fast-backward', 'fast-forward', 'fax', 'female', 'fighter-jet', 'file', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-movie-o', 'file-o', 'file-pdf-o', 'file-photo-o', 'file-picture-o', 'file-powerpoint-o', 'file-sound-o', 'file-text', 'file-text-o', 'file-video-o', 'file-word-o', 'file-zip-o', 'files-o', 'film', 'filter', 'fire', 'fire-extinguisher', 'flag', 'flag-checkered', 'flag-o', 'flash', 'flask', 'flickr', 'floppy-o', 'folder', 'folder-o', 'folder-open', 'folder-open-o', 'font', 'forward', 'foursquare', 'frown-o', 'gamepad', 'gavel', 'gbp', 'ge', 'gear', 'gears', 'gift', 'git', 'git-square', 'github', 'github-alt', 'github-square', 'gittip', 'glass', 'globe', 'google', 'google-plus', 'google-plus-square', 'graduation-cap', 'group', 'h-square', 'hacker-news', 'hand-o-down', 'hand-o-left', 'hand-o-right', 'hand-o-up', 'hdd-o', 'header', 'headphones', 'heart', 'heart-o', 'history', 'home', 'hospital-o', 'html5', 'image', 'inbox', 'indent', 'info', 'info-circle', 'inr', 'instagram', 'institution', 'italic', 'joomla', 'jpy', 'jsfiddle', 'key', 'keyboard-o', 'krw', 'language', 'laptop', 'leaf', 'legal', 'lemon-o', 'level-down', 'level-up', 'life-bouy', 'life-ring', 'life-saver', 'lightbulb-o', 'link', 'linkedin', 'linkedin-square', 'linux', 'list', 'list-alt', 'list-ol', 'list-ul', 'location-arrow', 'lock', 'long-arrow-down', 'long-arrow-left', 'long-arrow-right', 'long-arrow-up', 'magic', 'magnet', 'mail-forward', 'mail-reply', 'mail-reply-all', 'male', 'map-marker', 'maxcdn', 'medkit', 'meh-o', 'microphone', 'microphone-slash', 'minus', 'minus-circle', 'minus-square', 'minus-square-o', 'mobile', 'mobile-phone', 'money', 'moon-o', 'mortar-board', 'music', 'navicon', 'openid', 'outdent', 'pagelines', 'paper-plane', 'paper-plane-o', 'paperclip', 'paragraph', 'paste', 'pause', 'paw', 'pencil', 'pencil-square', 'pencil-square-o', 'phone', 'phone-square', 'photo', 'picture-o', 'pied-piper', 'pied-piper-alt', 'pied-piper-square', 'pinterest', 'pinterest-square', 'plane', 'play', 'play-circle', 'play-circle-o', 'plus', 'plus-circle', 'plus-square', 'plus-square-o', 'power-off', 'print', 'puzzle-piece', 'qq', 'qrcode', 'question', 'question-circle', 'quote-left', 'quote-right', 'ra', 'random', 'rebel', 'recycle', 'reddit', 'reddit-square', 'refresh', 'renren', 'reorder', 'repeat', 'reply', 'reply-all', 'retweet', 'rmb', 'road', 'rocket', 'rotate-left', 'rotate-right', 'rouble', 'rss', 'rss-square', 'rub', 'ruble', 'rupee', 'save', 'scissors', 'search', 'search-minus', 'search-plus', 'send', 'send-o', 'share', 'share-alt', 'share-alt-square', 'share-square', 'share-square-o', 'shield', 'shopping-cart', 'sign-in', 'sign-out', 'signal', 'sitemap', 'skype', 'slack', 'sliders', 'smile-o', 'sort', 'sort-alpha-asc', 'sort-alpha-desc', 'sort-amount-asc', 'sort-amount-desc', 'sort-asc', 'sort-desc', 'sort-down', 'sort-numeric-asc', 'sort-numeric-desc', 'sort-up', 'soundcloud', 'space-shuttle', 'spinner', 'spoon', 'spotify', 'square', 'square-o', 'stack-exchange', 'stack-overflow', 'star', 'star-half', 'star-half-empty', 'star-half-full', 'star-half-o', 'star-o', 'steam', 'steam-square', 'step-backward', 'step-forward', 'stethoscope', 'stop', 'strikethrough', 'stumbleupon', 'stumbleupon-circle', 'subscript', 'suitcase', 'sun-o', 'superscript', 'support', 'table', 'tablet', 'tachometer', 'tag', 'tags', 'tasks', 'taxi', 'tencent-weibo', 'terminal', 'text-height', 'text-width', 'th', 'th-large', 'th-list', 'thumb-tack', 'thumbs-down', 'thumbs-o-down', 'thumbs-o-up', 'thumbs-up', 'ticket', 'times', 'times-circle', 'times-circle-o', 'tint', 'toggle-down', 'toggle-left', 'toggle-right', 'toggle-up', 'trash-o', 'tree', 'trello', 'trophy', 'truck', 'try', 'tumblr', 'tumblr-square', 'turkish-lira', 'twitter', 'twitter-square', 'umbrella', 'underline', 'undo', 'university', 'unlink', 'unlock', 'unlock-alt', 'unsorted', 'upload', 'usd', 'user', 'user-md', 'users', 'video-camera', 'vimeo-square', 'vine', 'vk', 'volume-down', 'volume-off', 'volume-up', 'warning', 'wechat', 'weibo', 'weixin', 'wheelchair', 'windows', 'won', 'wordpress', 'wrench', 'xing', 'xing-square', 'yahoo', 'yen', 'youtube', 'youtube-play', 'youtube-square', 'bluetooth', 'bluetooth-b', 'codiepie','credit-card-alt', 'edge', 'fort-awesome', 'hashtag', 'mixcloud', 'modx', 'pause-circle', 'pause-circle-o', 'percent', 'product-hunt', 'reddit-alien', 'scribd', 'shopping-bag', 'shopping-basket', 'stop-circle', 'stop-circle-o', 'usb' ) );
	}

	/**
	 * Animate.css animations
	 */
	public static function animations() {
		return apply_filters( 'ts/data/animations', array( 'flash', 'bounce', 'shake', 'tada', 'swing', 'wobble', 'pulse', 'flip', 'flipInX', 'flipOutX', 'flipInY', 'flipOutY', 'fadeIn', 'fadeInUp', 'fadeInDown', 'fadeInLeft', 'fadeInRight', 'fadeInUpBig', 'fadeInDownBig', 'fadeInLeftBig', 'fadeInRightBig', 'fadeOut', 'fadeOutUp', 'fadeOutDown', 'fadeOutLeft', 'fadeOutRight', 'fadeOutUpBig', 'fadeOutDownBig', 'fadeOutLeftBig', 'fadeOutRightBig', 'slideInDown', 'slideInLeft', 'slideInRight', 'slideOutUp', 'slideOutLeft', 'slideOutRight', 'bounceIn', 'bounceInDown', 'bounceInUp', 'bounceInLeft', 'bounceInRight', 'bounceOut', 'bounceOutDown', 'bounceOutUp', 'bounceOutLeft', 'bounceOutRight', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight', 'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight', 'lightSpeedIn', 'lightSpeedOut', 'hinge', 'rollIn', 'rollOut' ) );
	}

	/**
	 * Examples section
	 */
	public static function examples() {
		return apply_filters( 'ts/data/examples', array(
				'basic' => array(
					'title' => __( 'Basic examples', 'jthemes' ),
					'items' => array(
						array(
							'name' => __( 'Accordions, spoilers, different styles, anchors', 'jthemes' ),
							'id'   => 'spoilers',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/spoilers.example',
							'icon' => 'tasks'
						),
						array(
							'name' => __( 'Tabs, vertical tabs, tab anchors', 'jthemes' ),
							'id'   => 'tabs',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/tabs.example',
							'icon' => 'folder'
						),
						array(
							'name' => __( 'Column layouts', 'jthemes' ),
							'id'   => 'columns',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/columns.example',
							'icon' => 'th-large'
						),
						array(
							'name' => __( 'Media elements, YouTube, Vimeo, Screenr and self-hosted videos, audio player', 'jthemes' ),
							'id'   => 'media',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/media.example',
							'icon' => 'play-circle'
						),
						array(
							'name' => __( 'Unlimited buttons', 'jthemes' ),
							'id'   => 'buttons',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/buttons.example',
							'icon' => 'heart'
						),
						array(
							'name' => __( 'Animations', 'jthemes' ),
							'id'   => 'animations',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/animations.example',
							'icon' => 'bolt'
						),
					)
				),
				'advanced' => array(
					'title' => __( 'Advanced examples', 'jthemes' ),
					'items' => array(
						array(
							'name' => __( 'Interacting with posts shortcode', 'jthemes' ),
							'id' => 'posts',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/posts.example',
							'icon' => 'list'
						),
						array(
							'name' => __( 'Nested shortcodes, shortcodes inside of attributes', 'jthemes' ),
							'id' => 'nested',
							'code' => plugin_dir_path( TS_PLUGIN_FILE ) . '/inc/examples/nested.example',
							'icon' => 'indent'
						),
					)
				),
			) );
	}

	/**
	 * Shortcodes
	 */
	public static function shortcodes( $shortcode = false ) {
		$shortcodes = apply_filters( 'ts/data/shortcodes', array(
				// heading
				'heading' => array(
					'name' => __( 'Heading', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'tag' => array(
							'type' => 'select',
							'values' => array(
								'h1' => __( 'H1', 'jthemes' ),
								'h2' => __( 'H2', 'jthemes' ),
								'h3' => __( 'H3', 'jthemes' ),
								'h4' => __( 'H4', 'jthemes' ),
								'h5' => __( 'H5', 'jthemes' ),
								'h6' => __( 'H6', 'jthemes' ),
							),
							'default' => 'h2',
							'name' => __( 'Select Tag', 'jthemes' ),
							'desc' => __( 'Choose heading tag for this heading', 'jthemes' ) 
						),
						'size' => array(
							'type' => 'slider',
							'min' => 7,
							'max' => 90,
							'step' => 1,
							'default' => 48,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Select heading size (pixels)', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'default' => '#ffffff',
							'name' => __( 'Color', 'jthemes' ),
							'desc' => __( 'Select heading color', 'jthemes' )
						),
						'align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'jthemes' ),
								'center' => __( 'Center', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' )
							),
							'default' => 'center',
							'name' => __( 'Align', 'jthemes' ),
							'desc' => __( 'Heading text alignment', 'jthemes' )
						),
						'margin_top' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 200,
							'step' => 5,
							'default' => 20,
							'name' => __( 'Margin Top', 'jthemes' ),
							'desc' => __( 'Top margin (pixels)', 'jthemes' )
						),
						'margin_bottom' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 200,
							'step' => 5,
							'default' => 20,
							'name' => __( 'Margin Bottom', 'jthemes' ),
							'desc' => __( 'Bottom margin (pixels)', 'jthemes' )
						),
						'text_transform' => array(
							'type' => 'select',
							'values' => array(
								'uppercase' => __( 'Uppercase', 'jthemes' ),
								'lowercase' => __( 'Lowercase', 'jthemes' ),
								'capitalize' => __( 'Capitalize', 'jthemes' ),
							),
							'default' => 'uppercase',
							'name' => __( 'Text Tranform', 'jthemes' ),
							'desc' => __( 'Choose a text transform style', 'jthemes' )
						),
						'letter_spacing' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 40,
							'step' => 1,
							'default' => 28,
							'name' => __( 'Letter Spacing', 'jthemes' ),
							'desc' => __( 'Letter Spacing (pixels)', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Heading text', 'jthemes' ),
					'desc' => __( 'Styled heading', 'jthemes' ),
					'icon' => 'h-square'
				),
				// tabs
				'tabs' => array(
					'name' => __( 'Tabs', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for this tabs', 'jthemes' ) . '%ts_skins_link%'
						),
						'active' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 100,
							'step' => 1,
							'default' => 1,
							'name' => __( 'Active tab', 'jthemes' ),
							'desc' => __( 'Select which tab is open by default', 'jthemes' )
						),
						'vertical' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Vertical', 'jthemes' ),
							'desc' => __( 'Show tabs vertically', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( "[%prefix_tab title=\"Title 1\"]Content 1[/%prefix_tab]\n[%prefix_tab title=\"Title 2\"]Content 2[/%prefix_tab]\n[%prefix_tab title=\"Title 3\"]Content 3[/%prefix_tab]", 'jthemes' ),
					'desc' => __( 'Tabs container', 'jthemes' ),
					'example' => 'tabs',
					'icon' => 'list-alt'
				),
				// tab
				'tab' => array(
					'name' => __( 'Tab', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'default' => __( 'Tab name', 'jthemes' ),
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Enter tab name', 'jthemes' )
						),
						'disabled' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Disabled', 'jthemes' ),
							'desc' => __( 'Is this tab disabled', 'jthemes' )
						),
						'anchor' => array(
							'default' => '',
							'name' => __( 'Anchor', 'jthemes' ),
							'desc' => __( 'You can use unique anchor for this tab to access it with hash in page url. For example: type here <b%value>Hello</b> and then use url like http://example.com/page-url#Hello. This tab will be activated and scrolled in', 'jthemes' )
						),
						'url' => array(
							'default' => '',
							'name' => __( 'URL', 'jthemes' ),
							'desc' => __( 'You can link this tab to any webpage. Enter here full URL to switch this tab into link', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self'  => __( 'Open link in same window/tab', 'jthemes' ),
								'blank' => __( 'Open link in new window/tab', 'jthemes' )
							),
							'default' => 'blank',
							'name' => __( 'Link target', 'jthemes' ),
							'desc' => __( 'Choose how to open the custom tab link', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Tab content', 'jthemes' ),
					'desc' => __( 'Single tab', 'jthemes' ),
					'note' => __( 'Did you know that you need to wrap single tabs with [tabs] shortcode?', 'jthemes' ),
					'example' => 'tabs',
					'icon' => 'list-alt'
				),
				// spoiler
				'spoiler' => array(
					'name' => __( 'Spoiler', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'default' => __( 'Spoiler title', 'jthemes' ),
							'name' => __( 'Title', 'jthemes' ), 'desc' => __( 'Text in spoiler title', 'jthemes' )
						),
						'open' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Open', 'jthemes' ),
							'desc' => __( 'Is spoiler content visible by default', 'jthemes' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'fancy' => __( 'Fancy', 'jthemes' ),
								'simple' => __( 'Simple', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for this spoiler', 'jthemes' ) . '%ts_skins_link%'
						),
						'icon' => array(
							'type' => 'select',
							'values' => array(
								'plus'           => __( 'Plus', 'jthemes' ),
								'plus-circle'    => __( 'Plus circle', 'jthemes' ),
								'plus-square-1'  => __( 'Plus square 1', 'jthemes' ),
								'plus-square-2'  => __( 'Plus square 2', 'jthemes' ),
								'arrow'          => __( 'Arrow', 'jthemes' ),
								'arrow-circle-1' => __( 'Arrow circle 1', 'jthemes' ),
								'arrow-circle-2' => __( 'Arrow circle 2', 'jthemes' ),
								'chevron'        => __( 'Chevron', 'jthemes' ),
								'chevron-circle' => __( 'Chevron circle', 'jthemes' ),
								'caret'          => __( 'Caret', 'jthemes' ),
								'caret-square'   => __( 'Caret square', 'jthemes' ),
								'folder-1'       => __( 'Folder 1', 'jthemes' ),
								'folder-2'       => __( 'Folder 2', 'jthemes' )
							),
							'default' => 'plus',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'Icons for spoiler', 'jthemes' )
						),
						'anchor' => array(
							'default' => '',
							'name' => __( 'Anchor', 'jthemes' ),
							'desc' => __( 'You can use unique anchor for this spoiler to access it with hash in page url. For example: type here <b%value>Hello</b> and then use url like http://example.com/page-url#Hello. This spoiler will be open and scrolled in', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Hidden content', 'jthemes' ),
					'desc' => __( 'Spoiler with hidden content', 'jthemes' ),
					'note' => __( 'Did you know that you can wrap multiple spoilers with [accordion] shortcode to create accordion effect?', 'jthemes' ),
					'example' => 'spoilers',
					'icon' => 'list-ul'
				),
				// accordion
				'accordion' => array(
					'name' => __( 'Accordion', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( "[%prefix_spoiler]Content[/%prefix_spoiler]\n[%prefix_spoiler]Content[/%prefix_spoiler]\n[%prefix_spoiler]Content[/%prefix_spoiler]", 'jthemes' ),
					'desc' => __( 'Accordion with spoilers', 'jthemes' ),
					'note' => __( 'Did you know that you can wrap multiple spoilers with [accordion] shortcode to create accordion effect?', 'jthemes' ),
					'example' => 'spoilers',
					'icon' => 'list'
				),
				// divider
				'divider' => array(
					'name' => __( 'Divider', 'jthemes' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'top' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show TOP link', 'jthemes' ),
							'desc' => __( 'Show link to top of the page or not', 'jthemes' )
						),
						'text' => array(
							'values' => array( ),
							'default' => __( 'Go to top', 'jthemes' ),
							'name' => __( 'Link text', 'jthemes' ), 'desc' => __( 'Text for the GO TOP link', 'jthemes' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'dotted'  => __( 'Dotted', 'jthemes' ),
								'dashed'  => __( 'Dashed', 'jthemes' ),
								'double'  => __( 'Double', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for this divider', 'jthemes' )
						),
						'divider_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#999999',
							'name' => __( 'Divider color', 'jthemes' ),
							'desc' => __( 'Pick the color for divider', 'jthemes' )
						),
						'link_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#999999',
							'name' => __( 'Link color', 'jthemes' ),
							'desc' => __( 'Pick the color for TOP link', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 40,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Height of the divider (in pixels)', 'jthemes' )
						),
						'margin' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 200,
							'step' => 5,
							'default' => 15,
							'name' => __( 'Margin', 'jthemes' ),
							'desc' => __( 'Adjust the top and bottom margins of this divider (in pixels)', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Content divider with optional TOP link', 'jthemes' ),
					'icon' => 'ellipsis-h'
				),
				// spacer
				'spacer' => array(
					'name' => __( 'Spacer', 'jthemes' ),
					'type' => 'single',
					'group' => 'content other',
					'atts' => array(
						'size' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 800,
							'step' => 10,
							'default' => 20,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Height of the spacer in pixels', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Empty space with adjustable height', 'jthemes' ),
					'icon' => 'arrows-v'
				),
				// highlight
				'highlight' => array(
					'name' => __( 'Highlight', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'background' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#DDFF99',
							'name' => __( 'Background', 'jthemes' ),
							'desc' => __( 'Highlighted text background color', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#000000',
							'name' => __( 'Text color', 'jthemes' ), 'desc' => __( 'Highlighted text color', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Highlighted text', 'jthemes' ),
					'desc' => __( 'Highlighted text', 'jthemes' ),
					'icon' => 'pencil'
				),
				// color_overlay
				'color_overlay' => array(
					'name' => __( 'Background Overlay', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'background' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#000000',
							'name' => __( 'Background', 'jthemes' ),
							'desc' => __( 'Overlay background color', 'jthemes' )
						),
						'opacity' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1,
							'step' => 0.1,
							'default' => 0.5,
							'name' => __( 'Opacity', 'jthemes' ),
							'desc' => __( 'Choose opacity', 'jthemes' )
						),
						'display_style' => array(
							'type' => 'select',
							'values' => array(
								'normal' => __( 'normal', 'jthemes' ),
								'hover' => __( 'only hover', 'jthemes' ),
							),
							'default' => 'default',
							'name' => __( 'Type', 'jthemes' ),
							'desc' => __( 'Style of the label', 'jthemes' )
						),
					),
					'content' => __( '', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'pencil'
				),
				
				// label
				'label' => array(
					'name' => __( 'Label', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'success' => __( 'Success', 'jthemes' ),
								'warning' => __( 'Warning', 'jthemes' ),
								'important' => __( 'Important', 'jthemes' ),
								'black' => __( 'Black', 'jthemes' ),
								'info' => __( 'Info', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Type', 'jthemes' ),
							'desc' => __( 'Style of the label', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Label', 'jthemes' ),
					'desc' => __( 'Styled label', 'jthemes' ),
					'icon' => 'tag'
				),
				// quote
				'quote' => array(
					'name' => __( 'Quote', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for this quote', 'jthemes' ) . '%ts_skins_link%'
						),
						'cite' => array(
							'default' => '',
							'name' => __( 'Cite', 'jthemes' ),
							'desc' => __( 'Quote author name', 'jthemes' )
						),
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Cite url', 'jthemes' ),
							'desc' => __( 'Url of the quote author. Leave empty to disable link', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Quote', 'jthemes' ),
					'desc' => __( 'Blockquote alternative', 'jthemes' ),
					'icon' => 'quote-right'
				),
				// pullquote
				'pullquote' => array(
					'name' => __( 'Pullquote', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' )
							),
							'default' => 'left',
							'name' => __( 'Align', 'jthemes' ), 'desc' => __( 'Pullquote alignment (float)', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Pullquote', 'jthemes' ),
					'desc' => __( 'Pullquote', 'jthemes' ),
					'icon' => 'quote-left'
				),
				// dropcap
				'dropcap' => array(
					'name' => __( 'Dropcap', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'flat' => __( 'Flat', 'jthemes' ),
								'light' => __( 'Light', 'jthemes' ),
								'simple' => __( 'Simple', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ), 'desc' => __( 'Dropcap style preset', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 5,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Choose dropcap size', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'D', 'jthemes' ),
					'desc' => __( 'Dropcap', 'jthemes' ),
					'icon' => 'bold'
				),
				// frame
				'frame' => array(
					'name' => __( 'Frame', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'jthemes' ),
								'center' => __( 'Center', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' )
							),
							'default' => 'left',
							'name' => __( 'Align', 'jthemes' ),
							'desc' => __( 'Frame alignment', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => '<img src="http://lorempixel.com/g/400/200/" />',
					'desc' => __( 'Styled image frame', 'jthemes' ),
					'icon' => 'picture-o'
				),
				// row
				'row' => array(
					'name' => __( 'Row', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( "[%prefix_column size=\"1/3\"]Content[/%prefix_column]\n[%prefix_column size=\"1/3\"]Content[/%prefix_column]\n[%prefix_column size=\"1/3\"]Content[/%prefix_column]", 'jthemes' ),
					'desc' => __( 'Row for flexible columns', 'jthemes' ),
					'icon' => 'columns'
				),
				// column
				'column' => array(
					'name' => __( 'Column', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'size' => array(
							'type' => 'select',
							'values' => array(
								'1/1' => __( 'Full width', 'jthemes' ),
								'1/2' => __( 'One half', 'jthemes' ),
								'1/3' => __( 'One third', 'jthemes' ),
								'2/3' => __( 'Two third', 'jthemes' ),
								'1/4' => __( 'One fourth', 'jthemes' ),
								'3/4' => __( 'Three fourth', 'jthemes' ),
								'1/5' => __( 'One fifth', 'jthemes' ),
								'2/5' => __( 'Two fifth', 'jthemes' ),
								'3/5' => __( 'Three fifth', 'jthemes' ),
								'4/5' => __( 'Four fifth', 'jthemes' ),
								'1/6' => __( 'One sixth', 'jthemes' ),
								'5/6' => __( 'Five sixth', 'jthemes' )
							),
							'default' => '1/2',
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Select column width. This width will be calculated depend page width', 'jthemes' )
						),
						'center' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Centered', 'jthemes' ),
							'desc' => __( 'Is this column centered on the page', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Column content', 'jthemes' ),
					'desc' => __( 'Flexible and responsive columns', 'jthemes' ),
					'note' => __( 'Did you know that you need to wrap columns with [row] shortcode?', 'jthemes' ),
					'example' => 'columns',
					'icon' => 'columns'
				),
				// list
				'list' => array(
					'name' => __( 'List', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'select icon from here, You can upload custom icon for this box', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( "<ul>\n<li>List item</li>\n<li>List item</li>\n<li>List item</li>\n</ul>", 'jthemes' ),
					'desc' => __( 'Styled unordered list', 'jthemes' ),
					'icon' => 'list-ol'
				),
				// button
				'button' => array(
					'name' => __( 'Button', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => get_option( 'home' ),
							'name' => __( 'Link', 'jthemes' ),
							'desc' => __( 'Button link', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same tab', 'jthemes' ),
								'blank' => __( 'New tab', 'jthemes' )
							),
							'default' => 'self',
							'name' => __( 'Target', 'jthemes' ),
							'desc' => __( 'Button link target', 'jthemes' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'standard' => __( 'Standard', 'jthemes' ),
								'flat' => __( 'Flat', 'jthemes' ),
								'ghost' => __( 'Ghost', 'jthemes' ),
								'soft' => __( 'Soft', 'jthemes' ),
								'glass' => __( 'Glass', 'jthemes' ),
								'bubbles' => __( 'Bubbles', 'jthemes' ),
								'noise' => __( 'Noise', 'jthemes' ),
								'stroked' => __( 'Stroked', 'jthemes' ),
								'3d' => __( '3D', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ), 
							'desc' => __( 'Button background style preset', 'jthemes' )
						),
						'background' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#FFFFFF',
							'name' => __( 'Background', 'jthemes' ), 
							'desc' => __( 'Button background color', 'jthemes' )
						),
						'opacity' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1,
							'step' => 0.1,
							'default' => 0,
							'name' => __( 'Opacity', 'jthemes' ),
							'desc' => __( 'Background Opacity', 'jthemes' )
						),
						'background_hover' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#f3b723',
							'name' => __( 'Background Hover', 'jthemes' ), 
							'desc' => __( 'Button background hover color', 'jthemes' )
						),
						'border' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#121212',
							'name' => __( 'Border Color', 'jthemes' ), 
							'desc' => __( 'Border color', 'jthemes' )
						),
						'border_hover' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#121212',
							'name' => __( 'Border Hover Color', 'jthemes' ), 
							'desc' => __( 'Border hover color', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#ffffff',
							'name' => __( 'Text color', 'jthemes' ),
							'desc' => __( 'Button text color', 'jthemes' )
						),
						'color_hover' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#ffffff',
							'name' => __( 'Text color hover', 'jthemes' ),
							'desc' => __( 'Button text color on hover', 'jthemes' )
						),
						'line_height' => array(
							'type' => 'slider',
							'min' => 18,
							'max' => 100,
							'step' => 1,
							'default' => 18,
							'name' => __( 'Line Height', 'jthemes' ),
							'desc' => __( 'Line Height of Button text', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Button size', 'jthemes' )
						),
						'wide' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Fluid', 'jthemes' ), 
							'desc' => __( 'Fluid buttons has 100% width', 'jthemes' )
						),
						'center' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Centered', 'jthemes' ), 
							'desc' => __( 'Is button centered on the page', 'jthemes' )
						),
						'radius' => array(
							'type' => 'select',
							'values' => array(
								'auto' => __( 'Auto', 'jthemes' ),
								'round' => __( 'Round', 'jthemes' ),
								'0' => __( 'Square', 'jthemes' ),
								'5' => '5px',
								'10' => '10px',
								'20' => '20px',
								'30' => '30px'
							),
							'default' => 'auto',
							'name' => __( 'Radius', 'jthemes' ),
							'desc' => __( 'Radius of button corners. Auto-radius calculation based on button size', 'jthemes' )
						),
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'You can upload custom icon for this box', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#121212',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'text_shadow' => array(
							'type' => 'shadow',
							'default' => 'none',
							'name' => __( 'Text shadow', 'jthemes' ),
							'desc' => __( 'Button text shadow', 'jthemes' )
						),
						'desc' => array(
							'default' => '',
							'name' => __( 'Description', 'jthemes' ),
							'desc' => __( 'Small description under button text. This option is incompatible with icon.', 'jthemes' )
						),
						'onclick' => array(
							'default' => '',
							'name' => __( 'onClick', 'jthemes' ),
							'desc' => __( 'Advanced JavaScript code for onClick action', 'jthemes' )
						),
						'rel' => array(
							'default' => '',
							'name' => __( 'Rel attribute', 'jthemes' ),
							'desc' => __( 'Here you can add value for the rel attribute.<br>Example values: <b%value>nofollow</b>, <b%value>lightbox</b>', 'jthemes' )
						),
						'title' => array(
							'default' => '',
							'name' => __( 'Title attribute', 'jthemes' ),
							'desc' => __( 'Here you can add value for the title attribute', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Button text', 'jthemes' ),
					'desc' => __( 'Styled button', 'jthemes' ),
					'example' => 'buttons',
					'icon' => 'heart'
				),
				
				//services
			    'services' => 
				array(
					'name' => __( 'Services', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Services Style 2', 'jthemes' ),
							),
							'default' => 'style_2',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Box style preset', 'jthemes' )
						),					
						),
					'content' => __( 'Single service shortcode goes here', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				// service
				'service' => array(
					'name' => __( 'Service', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Style of service', 'jthemes' )
						),
						'title' => array(
							'values' => array( ),
							'default' => __( 'Service title', 'jthemes' ),
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Service name', 'jthemes' )
						),
						'flat_icon' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Flat Icon', 'jthemes' ),
							'desc' => __( 'Write your flat icon class here; example: shopping-basket', 'jthemes' )
						),
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'select icon from here, You can upload custom icon for this box', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 128,
							'step' => 2,
							'default' => 32,
							'name' => __( 'Icon size', 'jthemes' ),
							'desc' => __( 'Size of the uploaded icon in pixels', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Service description', 'jthemes' ),
					'desc' => __( 'Service box with title', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				// box
				'box' => array(
					'name' => __( 'Box', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'values' => array( ),
							'default' => __( 'Box title', 'jthemes' ),
							'name' => __( 'Title', 'jthemes' ), 'desc' => __( 'Text for the box title', 'jthemes' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'soft' => __( 'Soft', 'jthemes' ),
								'glass' => __( 'Glass', 'jthemes' ),
								'bubbles' => __( 'Bubbles', 'jthemes' ),
								'noise' => __( 'Noise', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Box style preset', 'jthemes' )
						),
						'box_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#333333',
							'name' => __( 'Color', 'jthemes' ),
							'desc' => __( 'Color for the box title and borders', 'jthemes' )
						),
						'title_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#FFFFFF',
							'name' => __( 'Title text color', 'jthemes' ), 'desc' => __( 'Color for the box title text', 'jthemes' )
						),
						'radius' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Radius', 'jthemes' ),
							'desc' => __( 'Box corners radius', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Box content', 'jthemes' ),
					'desc' => __( 'Colored box with caption', 'jthemes' ),
					'icon' => 'list-alt'
				),
				// note
				'note' => array(
					'name' => __( 'Note', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'note_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#FFFF66',
							'name' => __( 'Background', 'jthemes' ), 'desc' => __( 'Note background color', 'jthemes' )
						),
						'text_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#333333',
							'name' => __( 'Text color', 'jthemes' ),
							'desc' => __( 'Note text color', 'jthemes' )
						),
						'radius' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Radius', 'jthemes' ), 'desc' => __( 'Note corners radius', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Note text', 'jthemes' ),
					'desc' => __( 'Colored box', 'jthemes' ),
					'icon' => 'list-alt'
				),
				// expand
				'expand' => array(
					'name' => __( 'Expand', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'more_text' => array(
							'default' => __( 'Show more', 'jthemes' ),
							'name' => __( 'More text', 'jthemes' ),
							'desc' => __( 'Enter the text for more link', 'jthemes' )
						),
						'less_text' => array(
							'default' => __( 'Show less', 'jthemes' ),
							'name' => __( 'Less text', 'jthemes' ),
							'desc' => __( 'Enter the text for less link', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1000,
							'step' => 10,
							'default' => 100,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Height for collapsed state (in pixels)', 'jthemes' )
						),
						'hide_less' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Hide less link', 'jthemes' ),
							'desc' => __( 'This option allows you to hide less link, when the text block has been expanded', 'jthemes' )
						),
						'text_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#333333',
							'name' => __( 'Text color', 'jthemes' ),
							'desc' => __( 'Pick the text color', 'jthemes' )
						),
						'link_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#0088FF',
							'name' => __( 'Link color', 'jthemes' ),
							'desc' => __( 'Pick the link color', 'jthemes' )
						),
						'link_style' => array(
							'type' => 'select',
							'values' => array(
								'default'    => __( 'Default', 'jthemes' ),
								'underlined' => __( 'Underlined', 'jthemes' ),
								'dotted'     => __( 'Dotted', 'jthemes' ),
								'dashed'     => __( 'Dashed', 'jthemes' ),
								'button'     => __( 'Button', 'jthemes' ),
							),
							'default' => 'default',
							'name' => __( 'Link style', 'jthemes' ),
							'desc' => __( 'Select the style for more/less link', 'jthemes' )
						),
						'link_align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'jthemes' ),
								'center' => __( 'Center', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' ),
							),
							'default' => 'left',
							'name' => __( 'Link align', 'jthemes' ),
							'desc' => __( 'Select link alignment', 'jthemes' )
						),
						'more_icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'More icon', 'jthemes' ),
							'desc' => __( 'Add an icon to the more link', 'jthemes' )
						),
						'less_icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Less icon', 'jthemes' ),
							'desc' => __( 'Add an icon to the less link', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'This text block can be expanded', 'jthemes' ),
					'desc' => __( 'Expandable text block', 'jthemes' ),
					'icon' => 'sort-amount-asc'
				),
				// lightbox
				'lightbox' => array(
					'name' => __( 'Lightbox', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'gallery',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array(
								'iframe' => __( 'Iframe', 'jthemes' ),
								'image' => __( 'Image', 'jthemes' ),
								'inline' => __( 'Inline (html content)', 'jthemes' )
							),
							'default' => 'iframe',
							'name' => __( 'Content type', 'jthemes' ),
							'desc' => __( 'Select type of the lightbox window content', 'jthemes' )
						),
						'src' => array(
							'default' => '',
							'name' => __( 'Content source', 'jthemes' ),
							'desc' => __( 'Insert here URL or CSS selector. Use URL for Iframe and Image content types. Use CSS selector for Inline content type.<br />Example values:<br /><b%value>http://www.youtube.com/watch?v=XXXXXXXXX</b> - YouTube video (iframe)<br /><b%value>http://example.com/wp-content/uploads/image.jpg</b> - uploaded image (image)<br /><b%value>http://example.com/</b> - any web page (iframe)<br /><b%value>#my-custom-popup</b> - any HTML content (inline)', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( '[%prefix_button] Click Here to Watch the Video [/%prefix_button]', 'jthemes' ),
					'desc' => __( 'Lightbox window with custom content', 'jthemes' ),
					'icon' => 'external-link'
				),
				// lightbox content
				'lightbox_content' => array(
					'name' => __( 'Lightbox content', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'gallery',
					'atts' => array(
						'id' => array(
							'default' => '',
							'name' => __( 'ID', 'jthemes' ),
							'desc' => sprintf( __( 'Enter here the ID from Content source field. %s Example value: %s', 'jthemes' ), '<br>', '<b%value>my-custom-popup</b>' )
						),
						'width' => array(
							'default' => '50%',
							'name' => __( 'Width', 'jthemes' ),
							'desc' => sprintf( __( 'Adjust the width for inline content (in pixels or percents). %s Example values: %s, %s, %s', 'jthemes' ), '<br>', '<b%value>300px</b>', '<b%value>600px</b>', '<b%value>90%</b>' )
						),
						'margin' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 600,
							'step' => 5,
							'default' => 40,
							'name' => __( 'Margin', 'jthemes' ),
							'desc' => __( 'Adjust the margin for inline content (in pixels)', 'jthemes' )
						),
						'padding' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 600,
							'step' => 5,
							'default' => 40,
							'name' => __( 'Padding', 'jthemes' ),
							'desc' => __( 'Adjust the padding for inline content (in pixels)', 'jthemes' )
						),
						'text_align' => array(
							'type' => 'select',
							'values' => array(
								'center' => __( 'Center', 'jthemes' ),
								'left' => __( 'Left', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' ),
								'justify' => __( 'Justify', 'jthemes' ),
							),
							'default' => 'center',
							'name' => __( 'Text Align', 'jthemes' ),
							'desc' => __( 'Choose text align', 'jthemes' )
						),
						'background' => array(
							'type' => 'color',
							'default' => '#FFFFFF',
							'name' => __( 'Background color', 'jthemes' ),
							'desc' => __( 'Pick a background color', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Text color', 'jthemes' ),
							'desc' => __( 'Pick a text color', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Text color', 'jthemes' ),
							'desc' => __( 'Pick a text color', 'jthemes' )
						),
						'shadow' => array(
							'type' => 'shadow',
							'default' => '0px 0px 15px #333333',
							'name' => __( 'Shadow', 'jthemes' ),
							'desc' => __( 'Adjust the shadow for content box', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Inline content', 'jthemes' ),
					'desc' => __( 'Inline content for lightbox', 'jthemes' ),
					'icon' => 'external-link'
				),
				// tooltip
				'tooltip' => array(
					'name' => __( 'Tooltip', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'light' => __( 'Basic: Light', 'jthemes' ),
								'dark' => __( 'Basic: Dark', 'jthemes' ),
								'yellow' => __( 'Basic: Yellow', 'jthemes' ),
								'green' => __( 'Basic: Green', 'jthemes' ),
								'red' => __( 'Basic: Red', 'jthemes' ),
								'blue' => __( 'Basic: Blue', 'jthemes' ),
								'youtube' => __( 'Youtube', 'jthemes' ),
								'tipsy' => __( 'Tipsy', 'jthemes' ),
								'bootstrap' => __( 'Bootstrap', 'jthemes' ),
								'jtools' => __( 'jTools', 'jthemes' ),
								'tipped' => __( 'Tipped', 'jthemes' ),
								'cluetip' => __( 'Cluetip', 'jthemes' ),
							),
							'default' => 'yellow',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Tooltip window style', 'jthemes' )
						),
						'position' => array(
							'type' => 'select',
							'values' => array(
								'north' => __( 'Top', 'jthemes' ),
								'south' => __( 'Bottom', 'jthemes' ),
								'west' => __( 'Left', 'jthemes' ),
								'east' => __( 'Right', 'jthemes' )
							),
							'default' => 'top',
							'name' => __( 'Position', 'jthemes' ),
							'desc' => __( 'Tooltip position', 'jthemes' )
						),
						'shadow' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Shadow', 'jthemes' ),
							'desc' => __( 'Add shadow to tooltip. This option is only works with basic styes, e.g. blue, green etc.', 'jthemes' )
						),
						'rounded' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Rounded corners', 'jthemes' ),
							'desc' => __( 'Use rounded for tooltip. This option is only works with basic styes, e.g. blue, green etc.', 'jthemes' )
						),
						'size' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'1' => 1,
								'2' => 2,
								'3' => 3,
								'4' => 4,
								'5' => 5,
								'6' => 6,
							),
							'default' => 'default',
							'name' => __( 'Font size', 'jthemes' ),
							'desc' => __( 'Tooltip font size', 'jthemes' )
						),
						'title' => array(
							'default' => '',
							'name' => __( 'Tooltip title', 'jthemes' ),
							'desc' => __( 'Enter title for tooltip window. Leave this field empty to hide the title', 'jthemes' )
						),
						'content' => array(
							'default' => __( 'Tooltip text', 'jthemes' ),
							'name' => __( 'Tooltip content', 'jthemes' ),
							'desc' => __( 'Enter tooltip content here', 'jthemes' )
						),
						'behavior' => array(
							'type' => 'select',
							'values' => array(
								'hover' => __( 'Show and hide on mouse hover', 'jthemes' ),
								'click' => __( 'Show and hide by mouse click', 'jthemes' ),
								'always' => __( 'Always visible', 'jthemes' )
							),
							'default' => 'hover',
							'name' => __( 'Behavior', 'jthemes' ),
							'desc' => __( 'Select tooltip behavior', 'jthemes' )
						),
						'close' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Close button', 'jthemes' ),
							'desc' => __( 'Show close button', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( '[%prefix_button] Hover me to open tooltip [/%prefix_button]', 'jthemes' ),
					'desc' => __( 'Tooltip window with custom content', 'jthemes' ),
					'icon' => 'comment-o'
				),
				// private
				'private' => array(
					'name' => __( 'Private', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Private note text', 'jthemes' ),
					'desc' => __( 'Private note for post authors', 'jthemes' ),
					'icon' => 'lock'
				),
				// youtube
				'youtube' => array(
					'name' => __( 'YouTube', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'jthemes' ),
							'desc' => __( 'Url of YouTube page with video. Ex: http://youtube.com/watch?v=XXXXXX', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Player height', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Play video automatically when page is loaded', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'YouTube video', 'jthemes' ),
					'example' => 'media',
					'icon' => 'youtube-play'
				),
				// youtube_advanced
				'youtube_advanced' => array(
					'name' => __( 'YouTube Advanced', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'jthemes' ),
							'desc' => __( 'Url of YouTube page with video. Ex: http://youtube.com/watch?v=XXXXXX', 'jthemes' )
						),
						'playlist' => array(
							'default' => '',
							'name' => __( 'Playlist', 'jthemes' ),
							'desc' => __( 'Value is a comma-separated list of video IDs to play. If you specify a value, the first video that plays will be the VIDEO_ID specified in the URL path, and the videos specified in the playlist parameter will play thereafter', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Player height', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'jthemes' )
						),
						'controls' => array(
							'type' => 'select',
							'values' => array(
								'no' => __( '0 - Hide controls', 'jthemes' ),
								'yes' => __( '1 - Show controls', 'jthemes' ),
								'alt' => __( '2 - Show controls when playback is started', 'jthemes' )
							),
							'default' => 'yes',
							'name' => __( 'Controls', 'jthemes' ),
							'desc' => __( 'This parameter indicates whether the video player controls will display', 'jthemes' )
						),
						'autohide' => array(
							'type' => 'select',
							'values' => array(
								'no' => __( '0 - Do not hide controls', 'jthemes' ),
								'yes' => __( '1 - Hide all controls on mouse out', 'jthemes' ),
								'alt' => __( '2 - Hide progress bar on mouse out', 'jthemes' )
							),
							'default' => 'alt',
							'name' => __( 'Autohide', 'jthemes' ),
							'desc' => __( 'This parameter indicates whether the video controls will automatically hide after a video begins playing', 'jthemes' )
						),
						'showinfo' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show title bar', 'jthemes' ),
							'desc' => __( 'If you set the parameter value to NO, then the player will not display information like the video title and uploader before the video starts playing.', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Play video automatically when page is loaded', 'jthemes' )
						),
						'loop' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Loop', 'jthemes' ),
							'desc' => __( 'Setting of YES will cause the player to play the initial video again and again', 'jthemes' )
						),
						'rel' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Related videos', 'jthemes' ),
							'desc' => __( 'This parameter indicates whether the player should show related videos when playback of the initial video ends', 'jthemes' )
						),
						'fs' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show full-screen button', 'jthemes' ),
							'desc' => __( 'Setting this parameter to NO prevents the fullscreen button from displaying', 'jthemes' )
						),
						'modestbranding' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => 'modestbranding',
							'desc' => __( 'This parameter lets you use a YouTube player that does not show a YouTube logo. Set the parameter value to YES to prevent the YouTube logo from displaying in the control bar. Note that a small YouTube text label will still display in the upper-right corner of a paused video when the user\'s mouse pointer hovers over the player', 'jthemes' )
						),
						'theme' => array(
							'type' => 'select',
							'values' => array(
								'dark' => __( 'Dark theme', 'jthemes' ),
								'light' => __( 'Light theme', 'jthemes' )
							),
							'default' => 'dark',
							'name' => __( 'Theme', 'jthemes' ),
							'desc' => __( 'This parameter indicates whether the embedded player will display player controls (like a play button or volume control) within a dark or light control bar', 'jthemes' )
						),
						'https' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Force HTTPS', 'jthemes' ),
							'desc' => __( 'Use HTTPS in player iframe', 'jthemes' )
						),
						'wmode' => array(
							'default' => '',
							'name'    => __( 'WMode', 'jthemes' ),
							'desc'    => sprintf( __( 'Here you can specify wmode value for the embed URL. %s Example values: %s, %s', 'jthemes' ), '<br>', '<b%value>transparent</b>', '<b%value>opaque</b>' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'YouTube video player with advanced settings', 'jthemes' ),
					'example' => 'media',
					'icon' => 'youtube-play'
				),
				// vimeo
				'vimeo' => array(
					'name' => __( 'Vimeo', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'jthemes' ), 'desc' => __( 'Url of Vimeo page with video', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Player height', 'jthemes' )
						),
						'poster' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Poster', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Vimeo video', 'jthemes' ),
					'example' => 'media',
					'icon' => 'youtube-play'
				),
				// screenr
				'screenr' => array(
					'name' => __( 'Screenr', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'default' => '',
							'name' => __( 'Url', 'jthemes' ),
							'desc' => __( 'Url of Screenr page with video', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Player height', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Screenr video', 'jthemes' ),
					'icon' => 'youtube-play'
				),
				// dailymotion
				'dailymotion' => array(
					'name' => __( 'Dailymotion', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'default' => '',
							'name' => __( 'Url', 'jthemes' ),
							'desc' => __( 'Url of Dailymotion page with video', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Player height', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Start the playback of the video automatically after the player load. May not work on some mobile OS versions', 'jthemes' )
						),
						'background' => array(
							'type' => 'color',
							'default' => '#FFC300',
							'name' => __( 'Background color', 'jthemes' ),
							'desc' => __( 'HTML color of the background of controls elements', 'jthemes' )
						),
						'foreground' => array(
							'type' => 'color',
							'default' => '#F7FFFD',
							'name' => __( 'Foreground color', 'jthemes' ),
							'desc' => __( 'HTML color of the foreground of controls elements', 'jthemes' )
						),
						'highlight' => array(
							'type' => 'color',
							'default' => '#171D1B',
							'name' => __( 'Highlight color', 'jthemes' ),
							'desc' => __( 'HTML color of the controls elements\' highlights', 'jthemes' )
						),
						'logo' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show logo', 'jthemes' ),
							'desc' => __( 'Allows to hide or show the Dailymotion logo', 'jthemes' )
						),
						'quality' => array(
							'type' => 'select',
							'values' => array(
								'240'  => '240',
								'380'  => '380',
								'480'  => '480',
								'720'  => '720',
								'1080' => '1080'
							),
							'default' => '380',
							'name' => __( 'Quality', 'jthemes' ),
							'desc' => __( 'Determines the quality that must be played by default if available', 'jthemes' )
						),
						'related' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show related videos', 'jthemes' ),
							'desc' => __( 'Show related videos at the end of the video', 'jthemes' )
						),
						'info' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show video info', 'jthemes' ),
							'desc' => __( 'Show videos info (title/author) on the start screen', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Dailymotion video', 'jthemes' ),
					'icon' => 'youtube-play'
				),
				// audio
				'audio' => array(
					'name' => __( 'Audio', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'File', 'jthemes' ),
							'desc' => __( 'Audio file url. Supported formats: mp3, ogg', 'jthemes' )
						),
						'width' => array(
							'values' => array(),
							'default' => '100%',
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width. You can specify width in percents and player will be responsive. Example values: <b%value>200px</b>, <b%value>100&#37;</b>', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Play file automatically when page is loaded', 'jthemes' )
						),
						'loop' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Loop', 'jthemes' ),
							'desc' => __( 'Repeat when playback is ended', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Custom audio player', 'jthemes' ),
					'example' => 'media',
					'icon' => 'play-circle'
				),
				// video
				'video' => array(
					'name' => __( 'Video', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'File', 'jthemes' ),
							'desc' => __( 'Url to mp4/flv video-file', 'jthemes' )
						),
						'poster' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Poster', 'jthemes' ),
							'desc' => __( 'Url to poster image, that will be shown before playback', 'jthemes' )
						),
						'title' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Player title', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Player width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 300,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Player height', 'jthemes' )
						),
						'controls' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Controls', 'jthemes' ),
							'desc' => __( 'Show player controls (play/pause etc.) or not', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Play file automatically when page is loaded', 'jthemes' )
						),
						'loop' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Loop', 'jthemes' ),
							'desc' => __( 'Repeat when playback is ended', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Custom video player', 'jthemes' ),
					'example' => 'media',
					'icon' => 'play-circle'
				),
				// custom_video
				'custom_video' => array(
					'name' => __( 'Custom Video', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'File', 'jthemes' ),
							'desc' => __( 'Url to mp4/flv video-file', 'jthemes' )
						),
						'poster' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Poster', 'jthemes' ),
							'desc' => __( 'Video poster', 'jthemes' )
						),
					),
					'desc' => __( 'Custom video player', 'jthemes' ),
					'example' => 'media',
					'icon' => 'play-circle'
				),
				// custom_audio
				'custom_audio' => array(
					'name' => __( 'Custom Audio', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'File', 'jthemes' ),
							'desc' => __( 'Url of audio file', 'jthemes' )
						),
					),
					'desc' => __( 'Custom audio player', 'jthemes' ),
					'example' => 'media',
					'icon' => 'play-circle'
				),
				// table
				'table' => array(
					'name' => __( 'Table', 'jthemes' ),
					'type' => 'mixed',
					'group' => 'content',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style2' => __( 'Style 2', 'jthemes' ),
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for this table', 'jthemes' ) . '%ts_skins_link%'
						),
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'CSV file', 'jthemes' ),
							'desc' => __( 'Upload CSV file if you want to create HTML-table from file', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( "<table>\n<tr>\n\t<td>Table</td>\n\t<td>Table</td>\n</tr>\n<tr>\n\t<td>Table</td>\n\t<td>Table</td>\n</tr>\n</table>", 'jthemes' ),
					'desc' => __( 'Styled table from HTML or CSV file', 'jthemes' ),
					'icon' => 'table'
				),
				// alert_box
				'alert_box' => array(
					'name' => __( 'Alert Box', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array(
								'success' => __( 'Success', 'jthemes' ),
								'danger' => __( 'Error', 'jthemes' ),
								'warning' => __( 'Warning', 'jthemes' ),
								'info' => __( 'Information', 'jthemes' ),
							),
							'default' => 'success',
							'name' => __( 'Alert Type', 'jthemes' ),
							'desc' => __( 'Choose alert type', 'jthemes' ) . '%ts_skins_link%'
						),
						'text' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Alert Text', 'jthemes' ),
							'desc' => __( 'Write your confirmation text here', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( "", 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'table'
				),
				// permalink
				'permalink' => array(
					'name' => __( 'Permalink', 'jthemes' ),
					'type' => 'mixed',
					'group' => 'content other',
					'atts' => array(
						'id' => array(
							'values' => array( ), 'default' => 1,
							'name' => __( 'ID', 'jthemes' ),
							'desc' => __( 'Post or page ID', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same tab', 'jthemes' ),
								'blank' => __( 'New tab', 'jthemes' )
							),
							'default' => 'self',
							'name' => __( 'Target', 'jthemes' ),
							'desc' => __( 'Link target. blank - link will be opened in new window/tab', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => '',
					'desc' => __( 'Permalink to specified post/page', 'jthemes' ),
					'icon' => 'link'
				),
				// members
				'members' => array(
					'name' => __( 'Members', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'message' => array(
							'default' => __( 'This content is for registered users only. Please %login%.', 'jthemes' ),
							'name' => __( 'Message', 'jthemes' ), 'desc' => __( 'Message for not logged users', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'default' => '#ffcc00',
							'name' => __( 'Box color', 'jthemes' ), 'desc' => __( 'This color will applied only to box for not logged users', 'jthemes' )
						),
						'login_text' => array(
							'default' => __( 'login', 'jthemes' ),
							'name' => __( 'Login link text', 'jthemes' ), 'desc' => __( 'Text for the login link', 'jthemes' )
						),
						'login_url' => array(
							'default' => wp_login_url(),
							'name' => __( 'Login link url', 'jthemes' ), 'desc' => __( 'Login link url', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Content for logged members', 'jthemes' ),
					'desc' => __( 'Content for logged in members only', 'jthemes' ),
					'icon' => 'lock'
				),
				// guests
				'guests' => array(
					'name' => __( 'Guests', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Content for guests', 'jthemes' ),
					'desc' => __( 'Content for guests only', 'jthemes' ),
					'icon' => 'user'
				),
				// feed
				'feed' => array(
					'name' => __( 'RSS Feed', 'jthemes' ),
					'type' => 'single',
					'group' => 'content other',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'jthemes' ),
							'desc' => __( 'Url to RSS-feed', 'jthemes' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Limit', 'jthemes' ), 'desc' => __( 'Number of items to show', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Feed grabber', 'jthemes' ),
					'icon' => 'rss'
				),
				// menu
				'menu' => array(
					'name' => __( 'Menu', 'jthemes' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'name' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Menu name', 'jthemes' ), 'desc' => __( 'Custom menu name. Ex: Main menu', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Custom menu by name', 'jthemes' ),
					'icon' => 'bars'
				),
				// subpages
				'subpages' => array(
					'name' => __( 'Sub pages', 'jthemes' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'depth' => array(
							'type' => 'select',
							'values' => array( 1, 2, 3, 4, 5 ), 'default' => 1,
							'name' => __( 'Depth', 'jthemes' ),
							'desc' => __( 'Max depth level of children pages', 'jthemes' )
						),
						'p' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Parent ID', 'jthemes' ),
							'desc' => __( 'ID of the parent page. Leave blank to use current page', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'List of sub pages', 'jthemes' ),
					'icon' => 'bars'
				),
				// siblings
				'siblings' => array(
					'name' => __( 'Siblings', 'jthemes' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'depth' => array(
							'type' => 'select',
							'values' => array( 1, 2, 3 ), 'default' => 1,
							'name' => __( 'Depth', 'jthemes' ),
							'desc' => __( 'Max depth level', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'List of cureent page siblings', 'jthemes' ),
					'icon' => 'bars'
				),
				// document
				'document' => array(
					'name' => __( 'Document', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Url', 'jthemes' ),
							'desc' => __( 'Url to uploaded document. Supported formats: doc, xls, pdf etc.', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Viewer width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Viewer height', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make viewer responsive', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Document viewer by Google', 'jthemes' ),
					'icon' => 'file-text'
				),
				// gmap
				'gmap' => array(
					'name' => __( 'Gmap', 'jthemes' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Map width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Map height', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make map responsive', 'jthemes' )
						),
						'address' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Marker', 'jthemes' ),
							'desc' => __( 'Address for the marker. You can type it in any language', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Maps by Google', 'jthemes' ),
					'icon' => 'globe'
				),
				
				// bg_map
				'bg_map' => array(
					'name' => __( 'Background Gmap', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'default' => 'How can we help you?',
							'name' => __( 'Title of Map', 'jthemes' ),
							'desc' => __('Write your map title', 'jthemes'),
						),
						'latitude' => array(
							'values' => '',
							'default' => '-37.815994',
							'name' => __( 'Latitude', 'jthemes' ),
							'desc' => __( 'Get Latitude value from this <a href="http://universimmedia.pagesperso-orange.fr/geo/loc.htm" target="_blank">site</a>.', 'jthemes' )
						),
						'longitude' => array(
							'default' => '144.952676',
							'name' => __( 'Longitude', 'jthemes' ),
							'desc' => __( 'Get Longitude value from this <a href="http://universimmedia.pagesperso-orange.fr/geo/loc.htm" target="_blank">site</a>.', 'jthemes' )
						),
						'marker_image' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Maker Image', 'jthemes' ),
							'desc' => __( 'Upload maker image', 'jthemes' )
						),
						'maker_title' => array(
							'type' => 'text',
							'default' => 'Maker Title',
							'name' => __( 'Title of Maker', 'jthemes' ),
							'desc' => __('Write your maker title', 'jthemes'),
						),
						'maker_description' => array(
							'type' => 'text',
							'default' => 'Maker Description',
							'name' => __( 'Description of Maker', 'jthemes' ),
							'desc' => __('Write your maker description', 'jthemes'),
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1000,
							'step' => 20,
							'default' => 500,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Height of Map', 'jthemes' )
						)
					),
					'desc' => __( 'Maps by Google', 'jthemes' ),
					'icon' => 'globe'
				),
				
				// slider
				'slider' => array(
					'name' => __( 'Slider', 'jthemes' ),
					'type' => 'single',
					'group' => 'gallery',
					'atts' => array(
						'source' => array(
							'type'    => 'image_source',
							'default' => 'none',
							'name'    => __( 'Source', 'jthemes' ),
							'desc'    => __( 'Choose images source. You can use images from Media library or retrieve it from posts (thumbnails) posted under specified blog category. You can also pick any custom taxonomy', 'jthemes' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 100,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Limit', 'jthemes' ),
							'desc' => __( 'Maximum number of image source posts (for recent posts, category and custom taxonomy)', 'jthemes' )
						),
						'link' => array(
							'type' => 'select',
							'values' => array(
								'none'       => __( 'None', 'jthemes' ),
								'image'      => __( 'Full-size image', 'jthemes' ),
								'lightbox'   => __( 'Lightbox', 'jthemes' ),
								'custom'     => __( 'Slide link (added in media editor)', 'jthemes' ),
								'attachment' => __( 'Attachment page', 'jthemes' ),
								'post'       => __( 'Post permalink', 'jthemes' )
							),
							'default' => 'none',
							'name' => __( 'Links', 'jthemes' ),
							'desc' => __( 'Select which links will be used for images in this gallery', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same window', 'jthemes' ),
								'blank' => __( 'New window', 'jthemes' )
							),
							'default' => 'self',
							'name' => __( 'Links target', 'jthemes' ),
							'desc' => __( 'Open links in', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ), 'desc' => __( 'Slider width (in pixels)', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 300,
							'name' => __( 'Height', 'jthemes' ), 'desc' => __( 'Slider height (in pixels)', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make slider responsive', 'jthemes' )
						),
						'title' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show titles', 'jthemes' ), 'desc' => __( 'Display slide titles', 'jthemes' )
						),
						'centered' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Center', 'jthemes' ), 'desc' => __( 'Is slider centered on the page', 'jthemes' )
						),
						'arrows' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Arrows', 'jthemes' ), 'desc' => __( 'Show left and right arrows', 'jthemes' )
						),
						'pages' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Pagination', 'jthemes' ),
							'desc' => __( 'Show pagination', 'jthemes' )
						),
						'mousewheel' => array(
							'type' => 'bool',
							'default' => 'yes', 'name' => __( 'Mouse wheel control', 'jthemes' ),
							'desc' => __( 'Allow to change slides with mouse wheel', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 100000,
							'step' => 100,
							'default' => 5000,
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Choose interval between slide animations. Set to 0 to disable autoplay', 'jthemes' )
						),
						'speed' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 20000,
							'step' => 100,
							'default' => 600,
							'name' => __( 'Speed', 'jthemes' ), 'desc' => __( 'Specify animation speed', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Customizable image slider', 'jthemes' ),
					'icon' => 'picture-o'
				),
				
				// carousel
				'carousel' => array(
					'name' => __( 'Carousel', 'jthemes' ),
					'type' => 'single',
					'group' => 'gallery',
					'atts' => array(
						'source' => array(
							'type'    => 'image_source',
							'default' => 'none',
							'name'    => __( 'Source', 'jthemes' ),
							'desc'    => __( 'Choose images source. You can use images from Media library or retrieve it from posts (thumbnails) posted under specified blog category. You can also pick any custom taxonomy', 'jthemes' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 100,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Limit', 'jthemes' ),
							'desc' => __( 'Maximum number of image source posts (for recent posts, category and custom taxonomy)', 'jthemes' )
						),
						'link' => array(
							'type' => 'select',
							'values' => array(
								'none'       => __( 'None', 'jthemes' ),
								'image'      => __( 'Full-size image', 'jthemes' ),
								'lightbox'   => __( 'Lightbox', 'jthemes' ),
								'custom'     => __( 'Slide link (added in media editor)', 'jthemes' ),
								'attachment' => __( 'Attachment page', 'jthemes' ),
								'post'       => __( 'Post permalink', 'jthemes' )
							),
							'default' => 'none',
							'name' => __( 'Links', 'jthemes' ),
							'desc' => __( 'Select which links will be used for images in this gallery', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same window', 'jthemes' ),
								'blank' => __( 'New window', 'jthemes' )
							),
							'default' => 'self',
							'name' => __( 'Links target', 'jthemes' ),
							'desc' => __( 'Open links in', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 100,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Carousel width (in pixels)', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 20,
							'max' => 1600,
							'step' => 20,
							'default' => 100,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Carousel height (in pixels)', 'jthemes' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'jthemes' ),
							'desc' => __( 'Ignore width and height parameters and make carousel responsive', 'jthemes' )
						),
						'items' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Items to show', 'jthemes' ),
							'desc' => __( 'How much carousel items is visible', 'jthemes' )
						),
						'scroll' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 20,
							'step' => 1, 'default' => 1,
							'name' => __( 'Scroll number', 'jthemes' ),
							'desc' => __( 'How much items are scrolled in one transition', 'jthemes' )
						),
						'title' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show titles', 'jthemes' ), 'desc' => __( 'Display titles for each item', 'jthemes' )
						),
						'centered' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Center', 'jthemes' ), 'desc' => __( 'Is carousel centered on the page', 'jthemes' )
						),
						'arrows' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Arrows', 'jthemes' ), 'desc' => __( 'Show left and right arrows', 'jthemes' )
						),
						'pages' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Pagination', 'jthemes' ),
							'desc' => __( 'Show pagination', 'jthemes' )
						),
						'mousewheel' => array(
							'type' => 'bool',
							'default' => 'yes', 'name' => __( 'Mouse wheel control', 'jthemes' ),
							'desc' => __( 'Allow to rotate carousel with mouse wheel', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 100000,
							'step' => 100,
							'default' => 5000,
							'name' => __( 'Autoplay', 'jthemes' ),
							'desc' => __( 'Choose interval between auto animations. Set to 0 to disable autoplay', 'jthemes' )
						),
						'speed' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 20000,
							'step' => 100,
							'default' => 600,
							'name' => __( 'Speed', 'jthemes' ), 'desc' => __( 'Specify animation speed', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Customizable image carousel', 'jthemes' ),
					'icon' => 'picture-o'
				),
				
				//Featured Lists
				'featured_lists' => 
				array(
					'name' => __( 'Featured Lists', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(	
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Heading of Lists', 'jthemes' ),
							'desc' => __('Write your featured list heading', 'jthemes'),
						),					
						'desc' => array(
							'type' => 'textarea',
							'default' => '',
							'name' => __( 'List Description', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'list'
				),
				//Featured List
				'featured_list' => 
				array(
					'name' => __( 'Featured List', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
							),
							'default' => 'Default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),	
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'List Title', 'jthemes' ),
							'desc' => __('Write your featured list title', 'jthemes'),
						),					
						'desc' => array(
							'type' => 'textarea',
							'default' => '',
							'name' => __( 'List Description', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'ic_icon' => array(
							'default' => '',
							'name' => __( 'Icon(Iconic Icons)', 'jthemes' ),
							'desc' => __( 'Example: map-marker ; Copy and Paste your icon class from here <a href="https://useiconic.com/open" target="_blank">site</a> ', 'jthemes' )
						),
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Choose Icon', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 40,
							'step' => 1,
							'default' => 14,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Size of Icon', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#fa9000',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'list'
				),
				
				//Testimonial group
			    'testimonials' => 
				array(
					'name' => __( 'Testimonials', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
								'style_3' => __( 'Style 3', 'jthemes' ),
							),
							'default' => 'Default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'nav' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Nav', 'jthemes' ),
							'desc' => __( 'Show nav or not', 'jthemes' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Auto Play', 'jthemes' ),
							'desc' => __( 'Auto play on of off', 'jthemes' )
						),
						'nav_position' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' ),
							),
							'default' => 'right',
							'name' => __( 'Nav Position', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						),
					'content' => __( 'Single testimonial shortcode goes here', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'recycle'
				),

			//Testimonial
			'testimonial' => 
				array(
					'name' => __( 'Testimonial', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
								'style_3' => __( 'Style 3', 'jthemes' ),
							),
							'default' => 'Default',

							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'name' => array(
							'type' => 'text',
							'default' => 'Nikar avlley',
							'name' => __( 'Name', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'title' => array(
							'type' => 'text',
							'default' => 'rtp',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'title_color' => array(
							'type' => 'color',
							'default' => '#27293d',
							'name' => __( 'Title color', 'jthemes' ),
							'desc' => __( 'Title text color', 'jthemes' )
						),
						'site' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Site', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'site_link' => array(
							'type' => 'text',
							'default' => '#',
							'name' => __( 'Site Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'image' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Upload Photo', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'text_color' => array(
							'type' => 'color',
							'default' => '#676767',
							'name' => __( 'Text color', 'jthemes' ),
							'desc' => __( 'Text color of description', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'quote-left'
				),
				
				//frame_message
				'frame_message' => 
				array(
					'name' => __( 'Frame Message', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'sub_title' => array(
							'default' => '',
							'name' => __( 'Sub Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'button_text' => array(
							'default' => '',
							'name' => __( 'Button Text', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'button_link' => array(
							'default' => '',
							'name' => __( 'Button Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'indent'
				),
				
				//products_search
				'products_search' => 
				array(
					'name' => __( 'Product Search', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for search', 'jthemes' ) . '%ts_skins_link%'
						),
						'button_text' => array(
							'default' => 'E.g: Herta Berlin Hotel',
							'name' => __( 'Placeholder', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'search_title' => array(
							'default' => '',
							'name' => __( 'Search Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( 'product Search', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'search'
				),
				
				//Icons
				'icons' => 
				array(
					'name' => __( 'Icon', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'select icon from here, You can upload custom icon for this box', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'font_size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 70,
							'step' => 1,
							'default' => 40,
							'name' => __( 'Font Size', 'jthemes' ),
							'desc' => __( 'Font size of Title(in pixels)', 'jthemes' )
						),
						'icon_align' => array(
							'type' => 'select',
							'values' => array(
								'left'   => __( 'Left', 'jthemes' ),
								'center' => __( 'Center', 'jthemes' ),
								'right'  => __( 'Right', 'jthemes' )
							),
							'default' => 'center',
							'name' => __( 'Icon alignment', 'jthemes' ),
							'desc' => __( 'Select the icon alignment', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'indent'
				),
				
				//Icons
				'icons_info' => 
				array(
					'name' => __( 'Icon With Info', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'select icon from here, You can upload custom icon for this box', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#f3b723',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'font_size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 70,
							'step' => 1,
							'default' => 28,
							'name' => __( 'Font Size', 'jthemes' ),
							'desc' => __( 'Font size of icon(in pixels)', 'jthemes' )
						),
						'title' => array(
							'type' => 'text',
							'default' => 'Australia Office',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Title of icon', 'jthemes' )
						),
						'icon_des' => array(
							'type' => 'text',
							'default' => 'PO Box 16122 Collins Street West Victoria',
							'name' => __( 'Description', 'jthemes' ),
							'desc' => __( 'Description of icon', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'indent'
				),
				
				//counter
				'counters' => 
				array(
					'name' => __( 'Counters', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Heading of counters', 'jthemes' )
						),
						'background' => array(
							'type' => 'color',
							'default' => '#f7f8f9',
							'name' => __( 'Background', 'jthemes' ),
							'desc' => __( 'Background of main section', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'counter description', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//counter
				'counter_up' => 
				array(
					'name' => __( 'Counter', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'number' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 100000,
							'step' => 1,
							'default' => 1000,
							'name' => __( 'Total number', 'jthemes' ),
							'desc' => __( 'This is count up from zero.', 'jthemes' )
						),
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'flat_icon' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Flat Icon', 'jthemes' ),
							'desc' => __( 'Write your flat icon class here; example: shopping-basket', 'jthemes' )
						),
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'jthemes' ),
							'desc' => __( 'select icon from here, You can upload custom icon for this box', 'jthemes' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#f18167',
							'name' => __( 'Icon color', 'jthemes' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'jthemes' )
						),
						'font_size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 70,
							'step' => 1,
							'default' => 28,
							'name' => __( 'Font Size', 'jthemes' ),
							'desc' => __( 'Font size of icon(in pixels)', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'counter description', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//countdown
				'countdown' => 
				array(
					'name' => __( 'Countdown', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'date' => array(
							'type' => 'text',
							'default' => '2016/12/12',
							'name' => __( 'Date', 'jthemes' ),
							'desc' => __( 'Formate: 2016/01/01(Y/m/d)', 'jthemes' )
						),
					),
					'content' => __( 'counter description', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//offer
				'offer' => 
				array(
					'name' => __( 'Offer', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'desc' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Description', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'button_text' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Button Text', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'form_action' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Form Action', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( 'Offer list shortcode goes here', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//offer_list
				'offer_list' => 
				array(
					'name' => __( 'Offer List', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( 'list of offers', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//bg_animation
				'bg_animation' => 
				array(
					'name' => __( 'Background Animation', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'image' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Upload Image', 'jthemes' ),
							'desc' => __( 'image for background', 'jthemes' )
						),
						'animation' => array(
							'type' => 'select',
							'values' => array(
								'slideInLeft' => __( 'slideInLeft', 'jthemes' ),
								'slideInRight' => __( 'slideInRight', 'jthemes' ),
								'slideInUp' => __( 'slideInUp', 'jthemes' ),
								'slideInDown' => __( 'slideInDown', 'jthemes' ),
							),
							'default' => 'slideInRight',
							'name' => __( 'Animation', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 1000,
							'step' => 1,
							'default' => '',
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Height of background', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 2000,
							'step' => 1,
							'default' => '',
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Width of background', 'jthemes' )
						),
						'left' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 100,
							'step' => 1,
							'default' => '',
							'name' => __( 'Left', 'jthemes' ),
							'desc' => __( 'Position in %', 'jthemes' )
						),
						'right' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 100,
							'step' => 1,
							'default' => '',
							'name' => __( 'Right', 'jthemes' ),
							'desc' => __( 'Position in %', 'jthemes' )
						),
						'top' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1000,
							'step' => 1,
							'default' => '',
							'name' => __( 'Top', 'jthemes' ),
							'desc' => __( 'Position in px', 'jthemes' )
						),
						'bottom' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1000,
							'step' => 1,
							'default' => '',
							'name' => __( 'Bottom', 'jthemes' ),
							'desc' => __( 'Position in px', 'jthemes' )
						),
					),
					'content' => __( 'list of offers', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//Partners
				'partners' => 
				array(
					'name' => __( 'Partners', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
							),
							'default' => 'Default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Single partner shortcode here...', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'users'
				),
				
				//Partner
				'partner' => 
				array(
					'name' => __( 'Partner', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'image' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Upload Partners Image', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'image_link' => array(
							'type' => 'text',
							'default' => '#',
							'name' => __( 'Image Link', 'jthemes' ),
							'desc' => __('', 'jthemes'),
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'partner description', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'users'
				),
				
				// custom_gallery
				'custom_gallery' => array(
					'name' => __( 'Gallery', 'jthemes' ),
					'type' => 'single',
					'group' => 'gallery',
					'atts' => array(
						'source' => array(
							'type'    => 'image_source',
							'default' => 'none',
							'name'    => __( 'Source', 'jthemes' ),
							'desc'    => __( 'Choose images source. You can use images from Media library or retrieve it from posts (thumbnails) posted under specified blog category. You can also pick any custom taxonomy', 'jthemes' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 100,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Limit', 'jthemes' ),
							'desc' => __( 'Maximum number of image source posts (for recent posts, category and custom taxonomy)', 'jthemes' )
						),
						'link' => array(
							'type' => 'select',
							'values' => array(
								'none'       => __( 'None', 'jthemes' ),
								'image'      => __( 'Full-size image', 'jthemes' ),
								'lightbox'   => __( 'Lightbox', 'jthemes' ),
								'custom'     => __( 'Slide link (added in media editor)', 'jthemes' ),
								'attachment' => __( 'Attachment page', 'jthemes' ),
								'post'       => __( 'Post permalink', 'jthemes' )
							),
							'default' => 'none',
							'name' => __( 'Links', 'jthemes' ),
							'desc' => __( 'Select which links will be used for images in this gallery', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same window', 'jthemes' ),
								'blank' => __( 'New window', 'jthemes' )
							),
							'default' => 'self',
							'name' => __( 'Links target', 'jthemes' ),
							'desc' => __( 'Open links in', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 90,
							'name' => __( 'Width', 'jthemes' ), 'desc' => __( 'Single item width (in pixels)', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 90,
							'name' => __( 'Height', 'jthemes' ), 'desc' => __( 'Single item height (in pixels)', 'jthemes' )
						),
						'column' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 6,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Column', 'jthemes' ), 'desc' => __( 'Gallery column', 'jthemes' )
						),
						'title' => array(
							'type' => 'select',
							'values' => array(
								'never' => __( 'Never', 'jthemes' ),
								'hover' => __( 'On mouse over', 'jthemes' ),
								'always' => __( 'Always', 'jthemes' )
							),
							'default' => 'hover',
							'name' => __( 'Show titles', 'jthemes' ),
							'desc' => __( 'Title display mode', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Customizable image gallery', 'jthemes' ),
					'icon' => 'picture-o'
				),
				
				//progress_bar
				'progress_bar' => 
				array(
					'name' => __( 'Progress Bar', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'values' => '',
							'default' => 'HTML',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'chart title', 'jthemes' )
						),
						'title_color' => array(
							'type' => 'color',
							'default' => '#262626',
							'name' => __( 'Title Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'title_font_size' => array(
							'type' => 'slider',
							'min' => 12,
							'max' => 60,
							'step' => 1,
							'default' => 24,
							'name' => __( 'Title Font Size', 'jthemes' ),
							'desc' => __( 'font size in px', 'jthemes' )
						),
						'percent' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 100,
							'step' => 1,
							'default' => 70,
							'name' => __( 'Percent', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 50,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'bar_color' => array(
							'type' => 'color',
							'default' => '#f5f5f5',
							'name' => __( 'Bar Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'activecolor' => array(
							'type' => 'color',
							'default' => '#f3b723',
							'name' => __( 'Active Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'text_color' => array(
							'type' => 'color',
							'default' => '#ffffff',
							'name' => __( 'Text Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'users'
				),
				
				// contact_info
				'contact_address' => array(
					'name' => __( 'Contact Address', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Title of address', 'jthemes' )
						),
						'address' => array(
							'type' => 'textarea',
							'values' => '',
							'default' => '',
							'name' => __( 'Address', 'jthemes' ),
							'desc' => __( 'Address of contact', 'jthemes' )
						),
					),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'map'
				),
				
				// bg_content
				'bg_content' => array(
					'name' => __( 'Content With Background Image', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(						
						'bg' => array(
							'type' => 'upload',
							'values' => '',
							'default' => '',
							'name' => __( 'Background', 'jthemes' ),
							'desc' => __( 'background image of main div', 'jthemes' )
						),
					),
					'desc' => __( 'content goes here...', 'jthemes' ),
					'icon' => 'image'
				),
				
				// text_color
				'text_color' => array(
					'name' => __( 'Text Color', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(						
						'color' => array(
							'type' => 'color',
							'values' => '',
							'default' => '#ef4416',
							'name' => __( 'Color', 'jthemes' ),
							'desc' => __( 'Select color of text', 'jthemes' )
						),
					),
					'desc' => __( 'text goes here...', 'jthemes' ),
					'icon' => 'image'
				),
				
				// typed
				'typed' => array(
					'name' => __( 'Typed Text', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(						
						'color' => array(
							'type' => 'color',
							'values' => '',
							'default' => '#27293d',
							'name' => __( 'Color', 'jthemes' ),
							'desc' => __( 'Select color of text', 'jthemes' )
						),
						'text1' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Text 1', 'jthemes' ),
							'desc' => __( 'Type seperate by comma', 'jthemes' )
						),
						'text2' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Text 2', 'jthemes' ),
							'desc' => __( 'Type seperate by comma', 'jthemes' )
						),
						'text3' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Text 3', 'jthemes' ),
							'desc' => __( 'Type seperate by comma', 'jthemes' )
						),
						'text4' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Text 4', 'jthemes' ),
							'desc' => __( 'Type seperate by comma', 'jthemes' )
						),
					),
					'desc' => __( 'text goes here...', 'jthemes' ),
					'icon' => 'image'
				),
				
				// socials_icons
				'socials_icons' => array(
					'name' => __( 'Social Icons', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(						
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for this icon', 'jthemes' ) . '%ts_skins_link%'
						),						
					),
					'desc' => __( 'Socials Icons', 'jthemes' ),
					'icon' => 'users'
				),
				
				// socials_icon
				'socials_icon' => array(
					'name' => __( 'Social Icon', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(						
						'name' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Name', 'jthemes' ),
							'desc' => __( 'Social Icon name', 'jthemes' )
						),
						'link' => array(
							'type' => 'text',
							'values' => '',
							'default' => '#',
							'name' => __( 'Social Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'icon' => array(
							'type' => 'icon',
							'values' => '',
							'default' => '',
							'name' => __( 'Select Icon', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 40,
							'step' => 1,
							'default' => 12,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Size of Icon', 'jthemes' )
						),
						
					),
					'desc' => __( 'Socials Icon', 'jthemes' ),
					'icon' => 'users'
				),
				
				//superslides
				'superslides' => 
				array(
					'name' => __( 'Super Sliders', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'class' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( 'Super slide item shortcode goes here', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//superslide
				'superslide' => 
				array(
					'name' => __( 'Super Slider', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'image' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Upload Slider Image', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'description' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Description', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( '', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				//faqs
				'faqs' => 
				array(
					'name' => __( 'FAQs', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Question', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'description' => array(
							'type' => 'textarea',
							'default' => '',
							'name' => __( 'Answer', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
					),
					'content' => __( '', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'check-square-o'
				),
				
				// callout
				'callout' => array(
					'name' => __( 'Callout', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(						
						'title' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Title', 'jthemes' )
						),
						'button_text' => array(
							'type' => 'text',
							'values' => '',
							'default' => '',
							'name' => __( 'Button Text', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'button_link' => array(
							'type' => 'text',
							'values' => '',
							'default' => '#',
							'name' => __( 'Button Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),						
					),
					'desc' => __( 'Callout', 'jthemes' ),
					'icon' => 'users'
				),
				
				// posts
				'posts' => array(
					'name' => __( 'Posts', 'jthemes' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'template' => array(
							'default' => 'templates/default-loop.php', 'name' => __( 'Template', 'jthemes' ),
							'desc' => __( '<b>Do not change this field value if you do not understand description below.</b><br/>Relative path to the template file. Default templates is placed under the plugin directory (templates folder). You can copy it under your theme directory and modify as you want. You can use following default templates that already available in the plugin directory:<br/><b%value>templates/default-loop.php</b> - posts loop<br/><b%value>templates/teaser-loop.php</b> - posts loop with thumbnail and title<br/><b%value>templates/single-post.php</b> - single post template<br/><b%value>templates/list-loop.php</b> - unordered list with posts titles', 'jthemes' )
						),
						'id' => array(
							'default' => '',
							'name' => __( 'Post ID\'s', 'jthemes' ),
							'desc' => __( 'Enter comma separated ID\'s of the posts that you want to show', 'jthemes' )
						),
						'posts_per_page' => array(
							'type' => 'number',
							'min' => -1,
							'max' => 10000,
							'step' => 1,
							'default' => get_option( 'posts_per_page' ),
							'name' => __( 'Posts per page', 'jthemes' ),
							'desc' => __( 'Specify number of posts that you want to show. Enter -1 to get all posts', 'jthemes' )
						),
						'post_type' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => Ts_Tools::get_types(),
							'default' => 'post',
							'name' => __( 'Post types', 'jthemes' ),
							'desc' => __( 'Select post types. Hold Ctrl key to select multiple post types', 'jthemes' )
						),
						'taxonomy' => array(
							'type' => 'select',
							'values' => Ts_Tools::get_taxonomies(),
							'default' => 'category',
							'name' => __( 'Taxonomy', 'jthemes' ),
							'desc' => __( 'Select taxonomy to show posts from', 'jthemes' )
						),
						'tax_term' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => Ts_Tools::get_terms( 'category' ),
							'default' => '',
							'name' => __( 'Terms', 'jthemes' ),
							'desc' => __( 'Select terms to show posts from', 'jthemes' )
						),
						'tax_operator' => array(
							'type' => 'select',
							'values' => array( 'IN', 'NOT IN', 'AND' ),
							'default' => 'IN', 'name' => __( 'Taxonomy term operator', 'jthemes' ),
							'desc' => __( 'IN - posts that have any of selected categories terms<br/>NOT IN - posts that is does not have any of selected terms<br/>AND - posts that have all selected terms', 'jthemes' )
						),
						// 'author' => array(
						// 	'type' => 'select',
						// 	'multiple' => true,
						// 	'values' => Ts_Tools::get_users(),
						// 	'default' => 'default',
						// 	'name' => __( 'Authors', 'jthemes' ),
						// 	'desc' => __( 'Choose the authors whose posts you want to show. Enter here comma-separated list of users (IDs). Example: 1,7,18', 'jthemes' )
						// ),
						'author' => array(
							'default' => '',
							'name' => __( 'Authors', 'jthemes' ),
							'desc' => __( 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18', 'jthemes' )
						),
						'meta_key' => array(
							'default' => '',
							'name' => __( 'Meta key', 'jthemes' ),
							'desc' => __( 'Enter meta key name to show posts that have this key', 'jthemes' )
						),
						'offset' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 10000,
							'step' => 1, 'default' => 0,
							'name' => __( 'Offset', 'jthemes' ),
							'desc' => __( 'Specify offset to start posts loop not from first post', 'jthemes' )
						),
						'order' => array(
							'type' => 'select',
							'values' => array(
								'desc' => __( 'Descending', 'jthemes' ),
								'asc' => __( 'Ascending', 'jthemes' )
							),
							'default' => 'DESC',
							'name' => __( 'Order', 'jthemes' ),
							'desc' => __( 'Posts order', 'jthemes' )
						),
						'orderby' => array(
							'type' => 'select',
							'values' => array(
								'none' => __( 'None', 'jthemes' ),
								'id' => __( 'Post ID', 'jthemes' ),
								'author' => __( 'Post author', 'jthemes' ),
								'title' => __( 'Post title', 'jthemes' ),
								'name' => __( 'Post slug', 'jthemes' ),
								'date' => __( 'Date', 'jthemes' ), 'modified' => __( 'Last modified date', 'jthemes' ),
								'parent' => __( 'Post parent', 'jthemes' ),
								'rand' => __( 'Random', 'jthemes' ), 'comment_count' => __( 'Comments number', 'jthemes' ),
								'menu_order' => __( 'Menu order', 'jthemes' ), 'meta_value' => __( 'Meta key values', 'jthemes' ),
							),
							'default' => 'date',
							'name' => __( 'Order by', 'jthemes' ),
							'desc' => __( 'Order posts by', 'jthemes' )
						),
						'post_parent' => array(
							'default' => '',
							'name' => __( 'Post parent', 'jthemes' ),
							'desc' => __( 'Show childrens of entered post (enter post ID)', 'jthemes' )
						),
						'post_status' => array(
							'type' => 'select',
							'values' => array(
								'publish' => __( 'Published', 'jthemes' ),
								'pending' => __( 'Pending', 'jthemes' ),
								'draft' => __( 'Draft', 'jthemes' ),
								'auto-draft' => __( 'Auto-draft', 'jthemes' ),
								'future' => __( 'Future post', 'jthemes' ),
								'private' => __( 'Private post', 'jthemes' ),
								'inherit' => __( 'Inherit', 'jthemes' ),
								'trash' => __( 'Trashed', 'jthemes' ),
								'any' => __( 'Any', 'jthemes' ),
							),
							'default' => 'publish',
							'name' => __( 'Post status', 'jthemes' ),
							'desc' => __( 'Show only posts with selected status', 'jthemes' )
						),
						'show_post_thumb' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show Thumb Image', 'jthemes' ),
							'desc' => __( 'Want to show or not thumb image', 'jthemes' )
						),
						'ignore_sticky_posts' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Ignore sticky', 'jthemes' ),
							'desc' => __( 'Select Yes to ignore posts that is sticked', 'jthemes' )
						)
					),
					'desc' => __( 'Custom posts query with customizable template', 'jthemes' ),
					'icon' => 'th-list'
				),
				// portfolios
				'portfolios' => array(
					'name' => __( 'Portfolios', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'template' => array(
							'default' => 'templates/portfolio-loop.php', 'name' => __( 'Template', 'jthemes' ),
							'desc' => __( '<b>Do not change this field value if you do not understand description below.</b><br/>Relative path to the template file. Default templates is placed under the plugin directory (templates folder). You can copy it under your theme directory and modify as you want. You can use following default templates that already available in the plugin directory:<br/><b%value>templates/portfolio-loop.php</b> - portfolios loop<br/><b%value>templates/teaser-loop.php</b> - posts loop with thumbnail and title<br/><b%value>templates/single-post.php</b> - single post template<br/><b%value>templates/list-loop.php</b> - unordered list with posts titles', 'jthemes' )
						),
						'portfolio_style' => array(
							'type' => 'select',
							'values' => array(
								'grid' => __( 'Grid', 'jthemes' ),
								'masonry' => __( 'Masonry', 'jthemes' ),
								'gutter' => __( 'Grid gutter', 'jthemes' ),
								'masonry_gutter' => __( 'Masonry gutter', 'jthemes' ),
							),
							'default' => 'gutter',
							'name' => __( 'Gallery Style', 'jthemes' ),
							'desc' => __( 'select your gallery style', 'jthemes' )
						),
						'id' => array(
							'default' => '',
							'name' => __( 'Portfolio ID\'s', 'jthemes' ),
							'desc' => __( 'Enter comma separated ID\'s of the portfolios that you want to show', 'jthemes' )
						),
						'posts_per_page' => array(
							'type' => 'number',
							'min' => -1,
							'max' => 10000,
							'step' => 1,
							'default' => get_option( 'posts_per_page' ),
							'name' => __( 'Portfolios per page', 'jthemes' ),
							'desc' => __( 'Specify number of portfolios that you want to show. Enter -1 to get all portfolios', 'jthemes' )
						),
						'column' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 4,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Column', 'jthemes' ),
							'desc' => __( 'Column number', 'jthemes' )
						),
						'post_type' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => Ts_Tools::get_types(),
							'default' => 'portfolio',
							'name' => __( 'Post types', 'jthemes' ),
							'desc' => __( 'Select post types. Hold Ctrl key to select multiple post types', 'jthemes' )
						),
						'taxonomy' => array(
							'type' => 'select',
							'values' => Ts_Tools::get_taxonomies(),
							'default' => 'category',
							'name' => __( 'Taxonomy', 'jthemes' ),
							'desc' => __( 'Select taxonomy to show portfolio from', 'jthemes' )
						),
						'tax_term' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => Ts_Tools::get_terms( 'category' ),
							'default' => '',
							'name' => __( 'Terms', 'jthemes' ),
							'desc' => __( 'Select terms to show portfolio from', 'jthemes' )
						),
						'tax_operator' => array(
							'type' => 'select',
							'values' => array( 'IN', 'NOT IN', 'AND' ),
							'default' => 'IN', 'name' => __( 'Taxonomy term operator', 'jthemes' ),
							'desc' => __( 'IN - portfolios that have any of selected categories terms<br/>NOT IN - portfolios that is does not have any of selected terms<br/>AND - portfolios that have all selected terms', 'jthemes' )
						),
						'author' => array(
							'default' => '',
							'name' => __( 'Authors', 'jthemes' ),
							'desc' => __( 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18', 'jthemes' )
						),
						'meta_key' => array(
							'default' => '',
							'name' => __( 'Meta key', 'jthemes' ),
							'desc' => __( 'Enter meta key name to show portfolios that have this key', 'jthemes' )
						),
						'offset' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 10000,
							'step' => 1, 'default' => 0,
							'name' => __( 'Offset', 'jthemes' ),
							'desc' => __( 'Specify offset to start portfolios loop not from first portfolio', 'jthemes' )
						),
						'order' => array(
							'type' => 'select',
							'values' => array(
								'desc' => __( 'Descending', 'jthemes' ),
								'asc' => __( 'Ascending', 'jthemes' )
							),
							'default' => 'DESC',
							'name' => __( 'Order', 'jthemes' ),
							'desc' => __( 'Portfolios order', 'jthemes' )
						),
						'orderby' => array(
							'type' => 'select',
							'values' => array(
								'none' => __( 'None', 'jthemes' ),
								'id' => __( 'Portfolio ID', 'jthemes' ),
								'author' => __( 'Portfolio author', 'jthemes' ),
								'title' => __( 'Portfolio title', 'jthemes' ),
								'name' => __( 'Portfolio slug', 'jthemes' ),
								'date' => __( 'Date', 'jthemes' ), 'modified' => __( 'Last modified date', 'jthemes' ),
								'parent' => __( 'Portfolio parent', 'jthemes' ),
								'rand' => __( 'Random', 'jthemes' ), 'comment_count' => __( 'Comments number', 'jthemes' ),
								'menu_order' => __( 'Menu order', 'jthemes' ), 'meta_value' => __( 'Meta key values', 'jthemes' ),
							),
							'default' => 'date',
							'name' => __( 'Order by', 'jthemes' ),
							'desc' => __( 'Order portfolios by', 'jthemes' )
						),
						'post_parent' => array(
							'default' => '',
							'name' => __( 'Portfolio parent', 'jthemes' ),
							'desc' => __( 'Show childrens of entered portfolio (enter portfolio ID)', 'jthemes' )
						),
						'post_status' => array(
							'type' => 'select',
							'values' => array(
								'publish' => __( 'Published', 'jthemes' ),
								'pending' => __( 'Pending', 'jthemes' ),
								'draft' => __( 'Draft', 'jthemes' ),
								'auto-draft' => __( 'Auto-draft', 'jthemes' ),
								'future' => __( 'Future portfolio', 'jthemes' ),
								'private' => __( 'Private portfolio', 'jthemes' ),
								'inherit' => __( 'Inherit', 'jthemes' ),
								'trash' => __( 'Trashed', 'jthemes' ),
								'any' => __( 'Any', 'jthemes' ),
							),
							'default' => 'publish',
							'name' => __( 'Portfolio status', 'jthemes' ),
							'desc' => __( 'Show only posts with selected status', 'jthemes' )
						),
						'ignore_sticky_posts' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Ignore sticky', 'jthemes' ),
							'desc' => __( 'Select Yes to ignore portfolios that is sticked', 'jthemes' )
						),
						'filter_show_top' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Filter Show Top', 'jthemes' ),
							'desc' => __( 'Showing Filter in top of portfolios', 'jthemes' )
						),
						'filter_show_bottom' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Filter Show Bottom', 'jthemes' ),
							'desc' => __( 'Showing Filter in bottom of portfolios', 'jthemes' )
						)
					),
					'desc' => __( 'Custom portfolios query with customizable template', 'jthemes' ),
					'icon' => 'th-list'
				),
				// angle_background_shape
				'angle_background_shape' => array(
					'name' => __( 'Angle bg Shape', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'background' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#fcc71f',
							'name' => __( 'Background', 'jthemes' ),
							'desc' => __( 'Angle background color', 'jthemes' )
						),
						'position' => array(
							'type' => 'select',
							'values' => array(
								'left_top' => __( 'Left Top', 'jthemes' ),
								'left_bottom' => __( 'Left Bottom', 'jthemes' ),
								'right_top' => __( 'Right Top', 'jthemes' ),
								'right_bottom' => __( 'Right Bottom', 'jthemes' ),
							),
							'default' => 'left_top',
							'name' => __( 'Position', 'jthemes' ),
							'desc' => __( 'Position of angle background', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1000,
							'step' => 10,
							'default' => 110,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Choose height', 'jthemes' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 1000,
							'step' => 10,
							'default' => 220,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Choose width', 'jthemes' )
						),
					),
					'content' => __( '', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'pencil'
				),
				// products
				'products' => array(
					'name' => __( 'Products', 'jthemes' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'template' => array(
							'default' => 'templates/product-loop.php', 'name' => __( 'Template', 'jthemes' ),
							'desc' => __( '<b>Do not change this field value if you do not understand description below.</b><br/>Relative path to the template file. Default templates is placed under the plugin directory (templates folder). You can copy it under your theme directory and modify as you want. You can use following default templates that already available in the plugin directory:<br/><b%value>templates/product-loop.php</b> - default loop<br/>', 'jthemes' )
						),
						'id' => array(
							'default' => '',
							'name' => __( 'Post ID\'s', 'jthemes' ),
							'desc' => __( 'Enter comma separated ID\'s of the products that you want to show', 'jthemes' )
						),
						'posts_per_page' => array(
							'type' => 'number',
							'min' => -1,
							'max' => 10000,
							'step' => 1,
							'default' => get_option( 'posts_per_page' ),
							'name' => __( 'Products per page', 'jthemes' ),
							'desc' => __( 'Specify number of products that you want to show. Enter -1 to get all products', 'jthemes' )
						),
						'column' => array(
							'type' => 'number',
							'min' => -1,
							'max' => 4,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Column', 'jthemes' ),
							'desc' => __( 'Column of products', 'jthemes' )
						),
						'taxonomy' => array(
							'type' => 'select',
							'values' => Ts_Tools::get_taxonomies(),
							'default' => 'category',
							'name' => __( 'Taxonomy', 'jthemes' ),
							'desc' => __( 'Select taxonomy to show products from', 'jthemes' )
						),
						'tax_term' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => Ts_Tools::get_terms( 'category' ),
							'default' => '',
							'name' => __( 'Terms', 'jthemes' ),
							'desc' => __( 'Select terms to show products from', 'jthemes' )
						),
						'tax_operator' => array(
							'type' => 'select',
							'values' => array( 'IN', 'NOT IN', 'AND' ),
							'default' => 'IN', 'name' => __( 'Taxonomy term operator', 'jthemes' ),
							'desc' => __( 'IN - products that have any of selected categories terms<br/>NOT IN - products that is does not have any of selected terms<br/>AND - products that have all selected terms', 'jthemes' )
						),
						'author' => array(
							'default' => '',
							'name' => __( 'Authors', 'jthemes' ),
							'desc' => __( 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18', 'jthemes' )
						),
						'offset' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 10000,
							'step' => 1, 'default' => 0,
							'name' => __( 'Offset', 'jthemes' ),
							'desc' => __( 'Specify offset to start products loop not from first products', 'jthemes' )
						),
						'order' => array(
							'type' => 'select',
							'values' => array(
								'desc' => __( 'Descending', 'jthemes' ),
								'asc' => __( 'Ascending', 'jthemes' )
							),
							'default' => 'DESC',
							'name' => __( 'Order', 'jthemes' ),
							'desc' => __( 'Products order', 'jthemes' )
						),
						'orderby' => array(
							'type' => 'select',
							'values' => array(
								'none' => __( 'None', 'jthemes' ),
								'id' => __( 'Products ID', 'jthemes' ),
								'author' => __( 'Products author', 'jthemes' ),
								'title' => __( 'Products title', 'jthemes' ),
								'name' => __( 'Products slug', 'jthemes' ),
								'date' => __( 'Date', 'jthemes' ), 
								'modified' => __( 'Last modified date', 'jthemes' ),
								'parent' => __( 'Products parent', 'jthemes' ),
								'rand' => __( 'Random', 'jthemes' ), 
								'comment_count' => __( 'Comments number', 'jthemes' ),
								'menu_order' => __( 'Menu order', 'jthemes' ), 
								'meta_value' => __( 'Meta key values', 'jthemes' ),
							),
							'default' => 'date',
							'name' => __( 'Order by', 'jthemes' ),
							'desc' => __( 'Order products by', 'jthemes' )
						),
						'post_parent' => array(
							'default' => '',
							'name' => __( 'Product parent', 'jthemes' ),
							'desc' => __( 'Show childrens of entered product (enter product ID)', 'jthemes' )
						),
						'post_status' => array(
							'type' => 'select',
							'values' => array(
								'publish' => __( 'Published', 'jthemes' ),
								'pending' => __( 'Pending', 'jthemes' ),
								'draft' => __( 'Draft', 'jthemes' ),
								'auto-draft' => __( 'Auto-draft', 'jthemes' ),
								'future' => __( 'Future course', 'jthemes' ),
								'private' => __( 'Private course', 'jthemes' ),
								'inherit' => __( 'Inherit', 'jthemes' ),
								'trash' => __( 'Trashed', 'jthemes' ),
								'any' => __( 'Any', 'jthemes' ),
							),
							'default' => 'publish',
							'name' => __( 'Products status', 'jthemes' ),
							'desc' => __( 'Show only products with selected status', 'jthemes' )
						),
						'ignore_sticky_posts' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Ignore sticky', 'jthemes' ),
							'desc' => __( 'Select Yes to ignore products that is sticked', 'jthemes' )
						)
					),
					'desc' => __( 'Custom products query with customizable template', 'jthemes' ),
					'icon' => 'th-list'
				),
				// dummy_text
				'dummy_text' => array(
					'name' => __( 'Dummy text', 'jthemes' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'what' => array(
							'type' => 'select',
							'values' => array(
								'paras' => __( 'Paragraphs', 'jthemes' ),
								'words' => __( 'Words', 'jthemes' ),
								'bytes' => __( 'Bytes', 'jthemes' ),
							),
							'default' => 'paras',
							'name' => __( 'What', 'jthemes' ),
							'desc' => __( 'What to generate', 'jthemes' )
						),
						'amount' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 100,
							'step' => 1,
							'default' => 1,
							'name' => __( 'Amount', 'jthemes' ),
							'desc' => __( 'How many items (paragraphs or words) to generate. Minimum words amount is 5', 'jthemes' )
						),
						'cache' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Cache', 'jthemes' ),
							'desc' => __( 'Generated text will be cached. Be careful with this option. If you disable it and insert many dummy_text shortcodes the page load time will be highly increased', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Text placeholder', 'jthemes' ),
					'icon' => 'text-height'
				),
				// dummy_image
				'dummy_image' => array(
					'name' => __( 'Dummy image', 'jthemes' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'width' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 500,
							'name' => __( 'Width', 'jthemes' ),
							'desc' => __( 'Image width', 'jthemes' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 300,
							'name' => __( 'Height', 'jthemes' ),
							'desc' => __( 'Image height', 'jthemes' )
						),
						'theme' => array(
							'type' => 'select',
							'values' => array(
								'any'       => __( 'Any', 'jthemes' ),
								'abstract'  => __( 'Abstract', 'jthemes' ),
								'animals'   => __( 'Animals', 'jthemes' ),
								'business'  => __( 'Business', 'jthemes' ),
								'cats'      => __( 'Cats', 'jthemes' ),
								'city'      => __( 'City', 'jthemes' ),
								'food'      => __( 'Food', 'jthemes' ),
								'nightlife' => __( 'Night life', 'jthemes' ),
								'fashion'   => __( 'Fashion', 'jthemes' ),
								'people'    => __( 'People', 'jthemes' ),
								'nature'    => __( 'Nature', 'jthemes' ),
								'sports'    => __( 'Sports', 'jthemes' ),
								'technics'  => __( 'Technics', 'jthemes' ),
								'transport' => __( 'Transport', 'jthemes' )
							),
							'default' => 'any',
							'name' => __( 'Theme', 'jthemes' ),
							'desc' => __( 'Select the theme for this image', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Image placeholder with random image', 'jthemes' ),
					'icon' => 'picture-o'
				),
				// animate
				'animate' => array(
					'name' => __( 'Animation', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array_combine( self::animations(), self::animations() ),
							'default' => 'bounceIn',
							'name' => __( 'Animation', 'jthemes' ),
							'desc' => __( 'Select animation type', 'jthemes' )
						),
						'duration' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 0.5,
							'default' => 1,
							'name' => __( 'Duration', 'jthemes' ),
							'desc' => __( 'Animation duration (seconds)', 'jthemes' )
						),
						'delay' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 0.5,
							'default' => 0,
							'name' => __( 'Delay', 'jthemes' ),
							'desc' => __( 'Animation delay (seconds)', 'jthemes' )
						),
						'inline' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Inline', 'jthemes' ),
							'desc' => __( 'This parameter determines what HTML tag will be used for animation wrapper. Turn this option to YES and animated element will be wrapped in SPAN instead of DIV. Useful for inline animations, like buttons', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Animated content', 'jthemes' ),
					'desc' => __( 'Wrapper for animation. Any nested element will be animated', 'jthemes' ),
					'example' => 'animations',
					'icon' => 'bolt'
				),
				// meta
				'meta' => array(
					'name' => __( 'Meta', 'jthemes' ),
					'type' => 'single',
					'group' => 'data',
					'atts' => array(
						'key' => array(
							'default' => '',
							'name' => __( 'Key', 'jthemes' ),
							'desc' => __( 'Meta key name', 'jthemes' )
						),
						'default' => array(
							'default' => '',
							'name' => __( 'Default', 'jthemes' ),
							'desc' => __( 'This text will be shown if data is not found', 'jthemes' )
						),
						'before' => array(
							'default' => '',
							'name' => __( 'Before', 'jthemes' ),
							'desc' => __( 'This content will be shown before the value', 'jthemes' )
						),
						'after' => array(
							'default' => '',
							'name' => __( 'After', 'jthemes' ),
							'desc' => __( 'This content will be shown after the value', 'jthemes' )
						),
						'post_id' => array(
							'default' => '',
							'name' => __( 'Post ID', 'jthemes' ),
							'desc' => __( 'You can specify custom post ID. Leave this field empty to use an ID of the current post. Current post ID may not work in Live Preview mode', 'jthemes' )
						),
						'filter' => array(
							'default' => '',
							'name' => __( 'Filter', 'jthemes' ),
							'desc' => __( 'You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Example function: ', 'jthemes' ) . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>"
						)
					),
					'desc' => __( 'Post meta', 'jthemes' ),
					'icon' => 'info-circle'
				),
				// user
				'user' => array(
					'name' => __( 'User', 'jthemes' ),
					'type' => 'single',
					'group' => 'data',
					'atts' => array(
						'field' => array(
							'type' => 'select',
							'values' => array(
								'display_name'        => __( 'Display name', 'jthemes' ),
								'ID'                  => __( 'ID', 'jthemes' ),
								'user_login'          => __( 'Login', 'jthemes' ),
								'user_nicename'       => __( 'Nice name', 'jthemes' ),
								'user_email'          => __( 'Email', 'jthemes' ),
								'user_url'            => __( 'URL', 'jthemes' ),
								'user_registered'     => __( 'Registered', 'jthemes' ),
								'user_activation_key' => __( 'Activation key', 'jthemes' ),
								'user_status'         => __( 'Status', 'jthemes' )
							),
							'default' => 'display_name',
							'name' => __( 'Field', 'jthemes' ),
							'desc' => __( 'User data field name', 'jthemes' )
						),
						'default' => array(
							'default' => '',
							'name' => __( 'Default', 'jthemes' ),
							'desc' => __( 'This text will be shown if data is not found', 'jthemes' )
						),
						'before' => array(
							'default' => '',
							'name' => __( 'Before', 'jthemes' ),
							'desc' => __( 'This content will be shown before the value', 'jthemes' )
						),
						'after' => array(
							'default' => '',
							'name' => __( 'After', 'jthemes' ),
							'desc' => __( 'This content will be shown after the value', 'jthemes' )
						),
						'user_id' => array(
							'default' => '',
							'name' => __( 'User ID', 'jthemes' ),
							'desc' => __( 'You can specify custom user ID. Leave this field empty to use an ID of the current user', 'jthemes' )
						),
						'filter' => array(
							'default' => '',
							'name' => __( 'Filter', 'jthemes' ),
							'desc' => __( 'You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Example function: ', 'jthemes' ) . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>"
						)
					),
					'desc' => __( 'User data', 'jthemes' ),
					'icon' => 'info-circle'
				),
				// post
				'post' => array(
					'name' => __( 'Post', 'jthemes' ),
					'type' => 'single',
					'group' => 'data',
					'atts' => array(
						'field' => array(
							'type' => 'select',
							'values' => array(
								'ID'                    => __( 'Post ID', 'jthemes' ),
								'post_author'           => __( 'Post author', 'jthemes' ),
								'post_date'             => __( 'Post date', 'jthemes' ),
								'post_date_gmt'         => __( 'Post date', 'jthemes' ) . ' GMT',
								'post_content'          => __( 'Post content', 'jthemes' ),
								'post_title'            => __( 'Post title', 'jthemes' ),
								'post_excerpt'          => __( 'Post excerpt', 'jthemes' ),
								'post_status'           => __( 'Post status', 'jthemes' ),
								'comment_status'        => __( 'Comment status', 'jthemes' ),
								'ping_status'           => __( 'Ping status', 'jthemes' ),
								'post_name'             => __( 'Post name', 'jthemes' ),
								'post_modified'         => __( 'Post modified', 'jthemes' ),
								'post_modified_gmt'     => __( 'Post modified', 'jthemes' ) . ' GMT',
								'post_content_filtered' => __( 'Filtered post content', 'jthemes' ),
								'post_parent'           => __( 'Post parent', 'jthemes' ),
								'guid'                  => __( 'GUID', 'jthemes' ),
								'menu_order'            => __( 'Menu order', 'jthemes' ),
								'post_type'             => __( 'Post type', 'jthemes' ),
								'post_mime_type'        => __( 'Post mime type', 'jthemes' ),
								'comment_count'         => __( 'Comment count', 'jthemes' )
							),
							'default' => 'post_title',
							'name' => __( 'Field', 'jthemes' ),
							'desc' => __( 'Post data field name', 'jthemes' )
						),
						'default' => array(
							'default' => '',
							'name' => __( 'Default', 'jthemes' ),
							'desc' => __( 'This text will be shown if data is not found', 'jthemes' )
						),
						'before' => array(
							'default' => '',
							'name' => __( 'Before', 'jthemes' ),
							'desc' => __( 'This content will be shown before the value', 'jthemes' )
						),
						'after' => array(
							'default' => '',
							'name' => __( 'After', 'jthemes' ),
							'desc' => __( 'This content will be shown after the value', 'jthemes' )
						),
						'post_id' => array(
							'default' => '',
							'name' => __( 'Post ID', 'jthemes' ),
							'desc' => __( 'You can specify custom post ID. Leave this field empty to use an ID of the current post. Current post ID may not work in Live Preview mode', 'jthemes' )
						),
						'filter' => array(
							'default' => '',
							'name' => __( 'Filter', 'jthemes' ),
							'desc' => __( 'You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Example function: ', 'jthemes' ) . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>"
						)
					),
					'desc' => __( 'Post data', 'jthemes' ),
					'icon' => 'info-circle'
				),
				// post_terms
				// 'post_terms' => array(
				// 	'name' => __( 'Post terms', 'jthemes' ),
				// 	'type' => 'single',
				// 	'group' => 'data',
				// 	'atts' => array(
				// 		'post_id' => array(
				// 			'default' => '',
				// 			'name' => __( 'Post ID', 'jthemes' ),
				// 			'desc' => __( 'You can specify custom post ID. Leave this field empty to use an ID of the current post. Current post ID may not work in Live Preview mode', 'jthemes' )
				// 		),
				// 		'links' => array(
				// 			'type' => 'bool',
				// 			'default' => 'yes',
				// 			'name' => __( 'Show links', 'jthemes' ),
				// 			'desc' => __( 'Show terms names as hyperlinks', 'jthemes' )
				// 		),
				// 		'format' => array(
				// 			'type' => 'select',
				// 			'values' => array(
				// 				'text' => __( 'Terms separated by commas', 'jthemes' ),
				// 				'br' => __( 'Terms separated by new lines', 'jthemes' ),
				// 				'ul' => __( 'Unordered list', 'jthemes' ),
				// 				'ol' => __( 'Ordered list', 'jthemes' ),
				// 			),
				// 			'default' => 'text',
				// 			'name' => __( 'Format', 'jthemes' ),
				// 			'desc' => __( 'Choose how to output the terms', 'jthemes' )
				// 		),
				// 	),
				// 	'desc' => __( 'Terms list', 'jthemes' ),
				// 	'icon' => 'info-circle'
				// ),
				// template
				'template' => array(
					'name' => __( 'Template', 'jthemes' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'name' => array(
							'default' => '',
							'name' => __( 'Template name', 'jthemes' ),
							'desc' => sprintf( __( 'Use template file name (with optional .php extension). If you need to use templates from theme sub-folder, use relative path. Example values: %s, %s, %s', 'jthemes' ), '<b%value>page</b>', '<b%value>page.php</b>', '<b%value>includes/page.php</b>' )
						)
					),
					'desc' => __( 'Theme template', 'jthemes' ),
					'icon' => 'puzzle-piece'
				),
				// qrcode
				'qrcode' => array(
					'name' => __( 'QR code', 'jthemes' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'data' => array(
							'default' => '',
							'name' => __( 'Data', 'jthemes' ),
							'desc' => __( 'The text to store within the QR code. You can use here any text or even URL', 'jthemes' )
						),
						'title' => array(
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Enter here short description. This text will be used in alt attribute of QR code', 'jthemes' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1000,
							'step' => 10,
							'default' => 200,
							'name' => __( 'Size', 'jthemes' ),
							'desc' => __( 'Image width and height (in pixels)', 'jthemes' )
						),
						'margin' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 50,
							'step' => 5,
							'default' => 0,
							'name' => __( 'Margin', 'jthemes' ),
							'desc' => __( 'Thickness of a margin (in pixels)', 'jthemes' )
						),
						'align' => array(
							'type' => 'select',
							'values' => array(
								'none' => __( 'None', 'jthemes' ),
								'left' => __( 'Left', 'jthemes' ),
								'center' => __( 'Center', 'jthemes' ),
								'right' => __( 'Right', 'jthemes' ),
							),
							'default' => 'none',
							'name' => __( 'Align', 'jthemes' ),
							'desc' => __( 'Choose image alignment', 'jthemes' )
						),
						'link' => array(
							'default' => '',
							'name' => __( 'Link', 'jthemes' ),
							'desc' => __( 'You can make this QR code clickable. Enter here the URL', 'jthemes' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Open link in same window/tab', 'jthemes' ),
								'blank' => __( 'Open link in new window/tab', 'jthemes' ),
							),
							'default' => 'blank',
							'name' => __( 'Link target', 'jthemes' ),
							'desc' => __( 'Select link target', 'jthemes' )
						),
						'color' => array(
							'type' => 'color',
							'default' => '#000000',
							'name' => __( 'Primary color', 'jthemes' ),
							'desc' => __( 'Pick a primary color', 'jthemes' )
						),
						'background' => array(
							'type' => 'color',
							'default' => '#ffffff',
							'name' => __( 'Background color', 'jthemes' ),
							'desc' => __( 'Pick a background color', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'desc' => __( 'Advanced QR code generator', 'jthemes' ),
					'icon' => 'qrcode'
				),
				
				// products_carousel
				'products_carousel' => array(
					'name' => __( 'Product Carousel', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'style_1' => __( 'Style 1', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
							),
							'default' => 'style_1',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Select style of product carousel', 'jthemes' )
						),
						'posts_per_page' => array(
							'type' => 'number',
							'min' => -1,
							'max' => 10000,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Product per page', 'jthemes' ),
							'desc' => __( 'Specify number of Product that you want to show. Enter -1 to get all Product', 'jthemes' )
						),
						'taxonomy' => array(
							'type' => 'select',
							'values' => array(
								'product_cat' => __( 'Product Category', 'jthemes' ),
								'product_tag' => __( 'Product Tag', 'jthemes' ),
							),
							'default' => 'product_cat',
							'name' => __( 'Taxonomy', 'jthemes' ),
							'desc' => __( 'Select taxonomy to show products from', 'jthemes' )
						),
						'tax_term' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => Ts_Tools::get_terms( 'category' ),
							'default' => '',
							'name' => __( 'Terms', 'jthemes' ),
							'desc' => __( 'Select terms to show products from', 'jthemes' )
						),
						'tax_operator' => array(
							'type' => 'select',
							'values' => array( 'IN', 'NOT IN', 'AND' ),
							'default' => 'IN', 'name' => __( 'Taxonomy term operator', 'jthemes' ),
							'desc' => __( 'IN - products that have any of selected categories terms<br/>NOT IN - products that is does not have any of selected terms<br/>AND - products that have all selected terms', 'jthemes' )
						),
						'order' => array(
							'type' => 'select',
							'values' => array(
								'desc' => __( 'Descending', 'jthemes' ),
								'asc' => __( 'Ascending', 'jthemes' )
							),
							'default' => 'DESC',
							'name' => __( 'Order', 'jthemes' ),
							'desc' => __( 'Product order', 'jthemes' )
						),
						'orderby' => array(
							'type' => 'select',
							'values' => array(
								'none' => __( 'None', 'jthemes' ),
								'id' => __( 'Product ID', 'jthemes' ),
								'title' => __( 'Product title', 'jthemes' ),
								'name' => __( 'Product slug', 'jthemes' ),
								'date' => __( 'Date', 'jthemes' ),
								'modified' => __( 'Last modified date', 'jthemes' ),
							),
							'default' => 'date',
							'name' => __( 'Order by', 'jthemes' ),
							'desc' => __( 'Order product by', 'jthemes' )
						),
						'best_seller' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Best Seller', 'jthemes' ),
							'desc' => __( 'Is product best seller or not', 'jthemes' )
						),					
					),
					'desc' => __( 'Custom product carousel', 'jthemes' ),
					'icon' => 'th-list'
				),
				
				// title_subtitle
				'title_subtitle' => array(
					'name' => __( 'Title & Sub-title', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'title' => array(
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Title', 'jthemes' )
						),
						'title_font_size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 100,
							'step' => 1,
							'default' => 55,
							'name' => __( 'Title Font Size', 'jthemes' ),
							'desc' => __( 'Font size of Title(in pixels)', 'jthemes' )
						),
						'subtitle' => array(
							'type'		=> 'textarea',
							'default' => '',
							'name' => __( 'Sub-Title', 'jthemes' ),
							'desc' => __( 'Sub-Title', 'jthemes' )
						),
						'margin_bottom' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 100,
							'step' => 1,
							'default' => 45,
							'name' => __( 'Margin Bottom', 'jthemes' ),
							'desc' => __( 'Bottom Margin of title', 'jthemes' )
						),
					),
					
					'class'=> '',
					'desc' => __( 'Single title and sub-title', 'jthemes' ),
					'icon' => 'link'
				),
				
				//Team
			'team' =>
				array(
					'name' => __( 'Team', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Choose style for team', 'jthemes' ) . '%ts_skins_link%'
						),
						'name' => array(
							'type' => 'text',
							'default' => 'John DOE',
							'name' => __( 'Name', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'title' => array(
							'type' => 'text',
							'default' => 'Web Designer',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'image' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Upload Photo', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'facebook_link' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Facebook Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'twitter_link' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'Twitter Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'linked_in_link' => array(
							'type' => 'text',
							'default' => '',
							'name' => __( 'LinkedIn Link', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'jthemes' ),
							'desc' => __( 'Extra CSS class', 'jthemes' )
						)
					),
					'content' => __( 'Lorem ipsum dol sit  amet et test description..', 'jthemes' ),
					'desc' => __( '', 'jthemes' ),
					'icon' => 'male'
				),
				
				// title_span_box
				'title_span_box' => array(
					'name' => __( 'Title & Span', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'jthemes',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'style_1' => __( 'Style 1', 'jthemes' ),
								'style_2' => __( 'Style 2', 'jthemes' ),
							),
							'default' => 'style_1',
							'name' => __( 'Style', 'jthemes' ),
							'desc' => __( 'Select your title style', 'jthemes' )
						),
						'title' => array(
							'default' => '',
							'name' => __( 'Title', 'jthemes' ),
							'desc' => __( 'Title', 'jthemes' )
						),
						'title_size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 70,
							'step' => 1,
							'default' => 40,
							'name' => __( 'Title Font Size', 'jthemes' ),
							'desc' => __( 'Font size of Title(in pixels)', 'jthemes' )
						),
						'title_color' => array(
							'type' => 'color',
							'default' => '#ffffff',
							'name' => __( 'Title Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'span_content' => array(
							'default' => '',
							'name' => __( 'Span Content', 'jthemes' ),
							'desc' => __( 'Span content', 'jthemes' )
						),
						'span_color' => array(
							'type' => 'color',
							'default' => '#121212',
							'name' => __( 'Span Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),
						'span_size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 70,
							'step' => 1,
							'default' => 40,
							'name' => __( 'Span Content Size', 'jthemes' ),
							'desc' => __( 'Font size of span', 'jthemes' )
						),
						'description' => array(
							'default' => '',
							'name' => __( 'Description', 'jthemes' ),
							'desc' => __( 'Description', 'jthemes' )
						),
						'des_color' => array(
							'type' => 'color',
							'default' => '#ffffff',
							'name' => __( 'Description Color', 'jthemes' ),
							'desc' => __( '', 'jthemes' )
						),						
						'box_align' => array(
							'type' => 'select',
							'values' => array(
								'box-center' => __( 'Center', 'jthemes' ),
								'box-left' => __( 'Left', 'jthemes' ),
								'box-right' => __( 'Right', 'jthemes' ),
							),
							'default' => 'box-right',
							'name' => __( 'Box Align', 'jthemes' ),
							'desc' => __( 'Choose box align', 'jthemes' )
						),
					),
					
					'class'=> '',
					'desc' => __( 'Button shortcode goes here', 'jthemes' ),
					'icon' => 'link'
				),
				
				// agencies
				'agencies' => array(
					'name' => __( 'Agencies', 'jthemes' ),
					'type' => 'single',
					'group' => 'jthemes',
					'atts' => array(
						'per_page' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 100000000,
							'step' => 1,
							'default' => 12,
							'name' => __( 'Number of Agency', 'jthemes' ),
							'desc' => __( 'Specify number of agency that you want to show. Enter -1 to get all agency', 'jthemes' )
						),
						'column' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 4,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Column', 'jthemes' ),
							'desc' => __( 'Number of column', 'jthemes' )
						),
						'nav' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Pagination', 'jthemes' ),
							'desc' => __( 'Show Pagination', 'jthemes' )
						),						
					),
					'desc' => __( 'Agencies', 'jthemes' ),
					'icon' => 'users'
				),
				
				// scheduler
				'scheduler' => array(
					'name' => __( 'Scheduler', 'jthemes' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'time' => array(
							'default' => '',
							'name' => __( 'Time', 'jthemes' ),
							'desc' => sprintf( __( 'In this field you can specify one or more time ranges. Every day at this time the content of shortcode will be visible. %s %s %s - show content from 9:00 to 18:00 %s - show content from 9:00 to 13:00 and from 14:00 to 18:00 %s - example with minutes (content will be visible each day, 45 minutes) %s - example with seconds', 'jthemes' ), '<br><br>', __( 'Examples (click to set)', 'jthemes' ), '<br><b%value>9-18</b>', '<br><b%value>9-13, 14-18</b>', '<br><b%value>9:30-10:15</b>', '<br><b%value>9:00:00-17:59:59</b>' )
						),
						'days_week' => array(
							'default' => '',
							'name' => __( 'Days of the week', 'jthemes' ),
							'desc' => sprintf( __( 'In this field you can specify one or more days of the week. Every week at these days the content of shortcode will be visible. %s 0 - Sunday %s 1 - Monday %s 2 - Tuesday %s 3 - Wednesday %s 4 - Thursday %s 5 - Friday %s 6 - Saturday %s %s %s - show content from Monday to Friday %s - show content only at Sunday %s - show content at Sunday and from Wednesday to Friday', 'jthemes' ), '<br><br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br><br>', __( 'Examples (click to set)', 'jthemes' ), '<br><b%value>1-5</b>', '<br><b%value>0</b>', '<br><b%value>0, 3-5</b>' )
						),
						'days_month' => array(
							'default' => '',
							'name' => __( 'Days of the month', 'jthemes' ),
							'desc' => sprintf( __( 'In this field you can specify one or more days of the month. Every month at these days the content of shortcode will be visible. %s %s %s - show content only at first day of month %s - show content from 1th to 5th %s - show content from 10th to 15th and from 20th to 25th', 'jthemes' ), '<br><br>', __( 'Examples (click to set)', 'jthemes' ), '<br><b%value>1</b>', '<br><b%value>1-5</b>', '<br><b%value>10-15, 20-25</b>' )
						),
						'months' => array(
							'default' => '',
							'name' => __( 'Months', 'jthemes' ),
							'desc' => sprintf( __( 'In this field you can specify the month or months in which the content will be visible. %s %s %s - show content only in January %s - show content from February to June %s - show content in January, March and from May to July', 'jthemes' ), '<br><br>', __( 'Examples (click to set)', 'jthemes' ), '<br><b%value>1</b>', '<br><b%value>2-6</b>', '<br><b%value>1, 3, 5-7</b>' )
						),
						'years' => array(
							'default' => '',
							'name' => __( 'Years', 'jthemes' ),
							'desc' => sprintf( __( 'In this field you can specify the year or years in which the content will be visible. %s %s %s - show content only in 2014 %s - show content from 2014 to 2016 %s - show content in 2014, 2018 and from 2020 to 2022', 'jthemes' ), '<br><br>', __( 'Examples (click to set)', 'jthemes' ), '<br><b%value>2014</b>', '<br><b%value>2014-2016</b>', '<br><b%value>2014, 2018, 2020-2022</b>' )
						),
						'alt' => array(
							'default' => '',
							'name' => __( 'Alternative text', 'jthemes' ),
							'desc' => __( 'In this field you can type the text which will be shown if content is not visible at the current moment', 'jthemes' )
						)
					),
					'content' => __( 'Scheduled content', 'jthemes' ),
					'desc' => __( 'Allows to show the content only at the specified time period', 'jthemes' ),
					'note' => __( 'This shortcode allows you to show content only at the specified time.', 'jthemes' ) . '<br><br>' . __( 'Please pay special attention to the descriptions, which are located below each text field. It will save you a lot of time', 'jthemes' ) . '<br><br>' . __( 'By default, the content of this shortcode will be visible all the time. By using fields below, you can add some limitations. For example, if you type 1-5 in the Days of the week field, content will be only shown from Monday to Friday. Using the same principles, you can limit content visibility from years to seconds.', 'jthemes' ),
					'icon' => 'clock-o'
				),
			) );
		// Return result
		return ( is_string( $shortcode ) ) ? $shortcodes[sanitize_text_field( $shortcode )] : $shortcodes;
	}
}

class Jthemes_Shortcodes_Data extends Ts_Data {
	function __construct() {
		parent::__construct();
	}
}
