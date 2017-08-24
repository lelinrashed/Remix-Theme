<?php get_header(); ?>

<?php 
	$sections = cs_get_option('remix_sorter');
	foreach ($sections['enabled'] as $sec_key => $sec_value) {
		switch ($sec_key) {
			case 'slider': get_template_part('layouts/slider');
				break;
			case 'about': get_template_part('layouts/about');
				break;
			case 'add': get_template_part('layouts/add');
				break;
			case 'blog': get_template_part('layouts/blog');
				break;
			case 'client': get_template_part('layouts/client');
				break;
			case 'portfolio': get_template_part('layouts/portfolio');
				break;
			case 'pricing': get_template_part('layouts/pricing');
				break;
			case 'service': get_template_part('layouts/service');
				break;
			case 'team': get_template_part('layouts/team');
				break;
			case 'video': get_template_part('layouts/video');
				break;
			case 'work': get_template_part('layouts/work');
				break;
		}
	}
 ?>



<?php get_footer(); ?>