<?php

$GLOBALS['wp_tests_options'] = array(
    'active_plugins' => array( basename( dirname( dirname( __FILE__ ) ) ) . '/posts-to-posts.php' ),
);

require dirname( __FILE__ ) . '/lib/bootstrap.php';

