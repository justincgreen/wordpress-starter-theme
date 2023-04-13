<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single Post Template</title>
</head>
  <body>
    <h1>Single post template</h1>
    
    <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
  </body>
</html>