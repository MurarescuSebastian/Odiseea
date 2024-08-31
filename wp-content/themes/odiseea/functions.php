<?php

/**
 * Add style links in header
 */
function custome_register_style()
{
  wp_enqueue_style('custome-style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('custome-fontawsome', get_template_directory_uri() . '/fontawesome/css/all.min.css');
  wp_enqueue_style('custome-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', [], '5.0.1', 'all');
  wp_enqueue_style('custome-fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', [], '5.10.0', 'all');
  wp_enqueue_style('custome-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
}
add_action('wp_enqueue_scripts', 'custome_register_style');

/**
 * Add javascript links in bottom
 */
function custome_register_scripts()
{
  wp_enqueue_script('custome-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], '3.6.0', true);
  wp_enqueue_script('custome-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', [], '5.0.1', true);
  wp_enqueue_script('custome-script', get_template_directory_uri() . '/dist/app.js', [], 1, true);
  wp_enqueue_script('custome-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'custome_register_scripts');


/**
 * Add menu
 */
function custome_menus()
{
  $locations = array(
    'header-top-menu' => "Header Top Menu",
  );
  register_nav_menus($locations);
}
add_action("init", 'custome_menus');

/**
 * Feature Image
 */

// Adaugă suport pentru Featured Images
function tema_mea_suport_imagine_reprezentativa()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'tema_mea_suport_imagine_reprezentativa');



/**
 * Duplicate
 */
function duplicate_post_as_draft($post_id)
{
  global $wpdb;
  if (!isset($_GET['post']) && !isset($_POST['post']) && (isset($_REQUEST['action']) && 'duplicate_post_as_draft' != $_REQUEST['action'])) {
    wp_die('No post to duplicate has been supplied!');
  }

  // Get the original post ID
  $post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
  $post = get_post($post_id);

  // Copy the post
  $new_post = array(
    'post_title'    => $post->post_title . ' (Copy)',
    'post_content'  => $post->post_content,
    'post_status'   => 'draft',
    'post_type'     => $post->post_type,
    'post_author'   => $post->post_author,
    'post_category' => wp_get_post_categories($post_id),
  );

  // Insert the post into the database
  $new_post_id = wp_insert_post($new_post);

  // Copy taxonomies, custom fields, etc.
  $taxonomies = get_object_taxonomies($post->post_type);
  foreach ($taxonomies as $taxonomy) {
    $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
    wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
  }

  $post_meta = get_post_meta($post_id);
  foreach ($post_meta as $meta_key => $meta_value) {
    update_post_meta($new_post_id, $meta_key, maybe_unserialize($meta_value[0]));
  }

  // Redirect to the edit post screen for the new draft
  wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
  exit;
}
add_action('admin_action_duplicate_post_as_draft', 'duplicate_post_as_draft');

function duplicate_post_link($actions, $post)
{
  if (current_user_can('edit_posts')) {
    $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce') . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
  }
  return $actions;
}
add_filter('post_row_actions', 'duplicate_post_link', 10, 2);
