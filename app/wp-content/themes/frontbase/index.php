<?php
get_template_part('templates/head');
$format = have_posts() ? get_post_format() : false;
get_template_part('templates/content', $format);
get_template_part('templates/foot');
?>