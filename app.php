// Function to get current user role
function get_current_user_role() {
    $user = wp_get_current_user();
    if (!empty($user->roles) && is_array($user->roles)) {
        return $user->roles[0];
    } else {
        return 'Guest';
    }
}

// Shortcode to display current user role
function display_user_role_shortcode() {
    $current_user_role = get_current_user_role();
    return "Current User Role: $current_user_role";
}
add_shortcode('user_role', 'display_user_role_shortcode');
