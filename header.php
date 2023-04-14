<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up until #page
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <header>Header</header>
  
  <div id="page">