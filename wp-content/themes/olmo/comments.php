<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to olmo_comments() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage olmo
 * @since olmo 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<?php if ( have_comments() || comments_open() ) : ?>
	
    <?php if ( have_comments() ) : ?>
        <div class="blog-item-comment">
    	<h5 class="comment-reply-title h5-lg">
            <?php comments_number( esc_html__('0 Comments', 'olmo'), esc_html__('1 Comment', 'olmo'), esc_html__('% Comments', 'olmo') ); ?>
        </h5>
       
        <div class="comments-list">	
            <ol class="media-list"><?php wp_list_comments( array( 'callback' => 'olmo_comments', 'style' => 'ol', 'short_ping'  => true ) ); ?></ol><!-- .commentlist -->
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>	
            <nav id="comment-nav-below" class="navigation">	
                <h1 class="assistive-text section-heading"><?php esc_html_e( 'Comment navigation', 'olmo' ); ?></h1>		
                <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'olmo' ) ); ?></div>		
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'olmo' ) ); ?></div>		
            </nav>	
            <?php endif; // check for comment navigation ?>	
            <?php
            /* If there are no comments and comments are closed, let's leave a note.
             * But we only want the note on posts and pages that had comments in the first place.
             */	 
            if ( ! comments_open() && get_comments_number() ) : ?>	
                <p class="nocomments"><?php esc_html_e( 'Comments are closed.' , 'olmo' ); ?></p>	
            <?php endif; ?>	
        </div>        
		</div>
        <?php endif; // have_comments() ?>

    <?php if ( comments_open() ) : ?>
    	<div class="blog-item-comment-form wide-80 post-comments division">
		<?php
		$post_id = ''; 
		if ( null === $post_id )
		$post_id = get_the_ID();
	else
		$id = $post_id;

	$commenter = wp_get_current_commenter();
	$user = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';

	if ( ! isset( $args['format'] ) )
		$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';

	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html5    = 'html5' === $args['format'];

	
	
	$fields   =  array(
		'author' => '<div class="row"><div class="col-md-12 form-group comment-name">
		<p>'.esc_html__('Name *','olmo').'</p>
		<input id="author" name="author" type="text" placeholder="'.esc_attr__('Type your name*...','olmo').'" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' class="form-control" /></div>',
		
		'email'  => '<div class="col-md-12 form-group comment-email">
		<p>'.esc_html__('Email *','olmo').'</p>
		<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" ' . $aria_req . ' class="form-control" placeholder="'.esc_attr__('Type your email*...','olmo').'" /></div></div>',
	);

	$comments_field = '<div class="row"><div class="col-md-12 input-message">
	<p>'.esc_html__('Add Comment *','olmo').'</p>
	<textarea id="comment" name="comment" aria-required="true" cols="30" rows="5" class="form-control" placeholder="'.esc_attr__('Type your comment here*...','olmo').'"></textarea></div></div>';
	
	$defaults = array(		
		'fields'               => apply_filters( 'olmo_comment_form_default_fields', $fields ),
		'comment_field'        => $comments_field,		
		'must_log_in'          => '<div class="row"><div class="col-md-12"><p class="must-log-in">' . sprintf( wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'olmo' ), array('a' => array(
					  'href' => array()),)) , wp_login_url( apply_filters( 'olmo_the_permalink', esc_url(get_permalink( $post_id ) ) ) ) ) . '</p></div></div>',
		
		'logged_in_as'         => '<div class="row"><div class="col-md-12"><p class="logged-in-as">' . sprintf( wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s">Log out?</a>', 'olmo' ), array('a' => array('href' => array()),)) , esc_url(get_edit_user_link()), esc_html($user_identity), wp_logout_url( apply_filters( 'olmo_the_permalink', esc_url(get_permalink( $post_id ) ) ) ) ) . '</p></div></div>',
		
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_submit'		   => 'btn btn-skyblue tra-skyblue-hover submit',
		'title_reply'          => esc_html__( 'Leave a comment', 'olmo' ),
		'title_reply_to'       => esc_html__( 'Leave a Comment to %s', 'olmo' ),
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'olmo' ),
		'label_submit'         => esc_html__( 'Post Comment', 'olmo' ),
		'format'               => 'xhtml',
	);
		
	?>
    <div class="comment-form-fields"><?php comment_form($defaults); ?></div>
    </div>
    <?php endif; ?>
<?php endif; ?>
