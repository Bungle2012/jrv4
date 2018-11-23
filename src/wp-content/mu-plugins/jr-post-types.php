<?php

function jr_post_types() {
  register_post_type('project', array(
    'public' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add New Project    ',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-schedule'
  ));
}

add_action('init', 'jr_post_types');