function current_user_role_shortcode() {
    $current_user = wp_get_current_user();
    $user_roles = $current_user->roles;

    // Define the roles you're interested in
    $target_roles = array('tier-one', 'tier-two', 'tier-three');

    // Check if the user has any of the target roles
    $has_target_role = array_intersect($user_roles, $target_roles);

    // Return the first matching role or a default message
    return !empty($has_target_role) ? reset($has_target_role) : 'No Target Role';
}
add_shortcode('current_user_role', 'current_user_role_shortcode');
