<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>24 Data Skills Assessment</title>
  <?php wp_head(); ?>
</head>
<body>

<?php
get_template_part('dist/template-parts/main', 'header');
get_template_part('dist/template-parts/main', 'content');
get_template_part('dist/template-parts/main', 'footer');
?>

<?php wp_footer(); ?>
</body>
</html>
