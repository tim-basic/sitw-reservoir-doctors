<?php
/* Template Name: Home */
get_header();

// Custom Fields For Homepage
$acf = get_fields();
console_log($acf);

// Page
echo "<main>";
include locate_template('./parts/home/home__hero.php', false, false);
include locate_template('./parts/home/home__staff.php', false, false);
echo "</main>";

get_footer();