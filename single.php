<?php get_header(); ?>
    <h1>Single post template</h1>
    
    <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
<?php get_footer(); ?>