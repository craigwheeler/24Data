<?php
wp_head();

get_template_part('dist/template-parts/main', 'header');
get_template_part('dist/template-parts/main', 'content');
get_template_part('dist/template-parts/main', 'footer');

wp_footer();
?>