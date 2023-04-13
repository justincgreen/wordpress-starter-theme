<?php
  /**
   * Template for displaying comments
   * More info about the comment template: 
   * https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
  **/
  
  // Get only the approved comments
  $args = array(
    'status' => 'approve',
  );
  
  // The comment Query
  $comments_query = new WP_Comment_Query();
  $comments = $comments_query->query( $args );
  
  // Comment Loop
  if ( $comments ) {
    foreach ( $comments as $comment ) {
      echo '<p>' . $comment->comment_content . '</p>';
    }
  } else {
    echo 'No comments found.';
  }
  
  /** 
   * Place the snippet below in the single.php template or desired post template, this code renders the comments area
   * Then remove this snippet from this file because it is intended to be used elsewhere, NOT from within this template   
   * Uncomment the snippet below when ready to use and paste to desired post template area  
  **/
  
  // If comments are open or we have at least one comment, load up the comment template.
  // if ( comments_open() || get_comments_number() ) :
  //   comments_template();
  // endif;
?>