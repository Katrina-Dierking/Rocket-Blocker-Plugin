if (file_exists('WP_ROCKET_ADVANCED_CACHE_PROBLEM'));
    add_action('rocket_generate_advanced_cache_file', hidenotice_admin);

function hidenotice_admin() {
    echo '<style> .error, .is-dismissable{display:none !important;}</style>';
}
