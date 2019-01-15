<?php

add_action( 'rest_api_init', 'melaine_hunley_extend_api' );

function melaine_hunley_extend_api() {
  // this function allows you to extend an existing WP endpoint
  register_rest_field( 'press_item', 'melaine_hunley_additional_meta', [
      'get_callback'    => 'melaine_hunley_additional_press_item_data',
      'update_callback' => null,
      'schema'          => null,
    ]
  );
  register_rest_field( 'story', 'melaine_hunley_additional_meta', [
      'get_callback'    => 'melaine_hunley_additional_story_data',
      'update_callback' => null,
      'schema'          => null,
    ]
  );
  register_rest_field( 'product', 'melaine_hunley_additional_meta', [
      'get_callback'    => 'melaine_hunley_additional_product_data',
      'update_callback' => null,
      'schema'          => null,
    ]
  );
}

function melaine_hunley_additional_press_item_data($arr, $field_name, $request) {
  $user_id = absint($arr['author']);
  $array_data = [];

  // author data
  $array_data['user_nicename']  = get_the_author_meta( 'user_nicename', $user_id );
  $array_data['user_permalink'] = get_author_posts_url( $user_id );

  // featured image
  $array_data['thumbnail'] = get_the_post_thumbnail_url( $arr['id'], 'full' );

  return $array_data;
}

function melaine_hunley_additional_story_data($arr, $field_name, $request) {
  $user_id = absint($arr['author']);
  $array_data = [];

  // author data
  $array_data['user_nicename']  = get_the_author_meta( 'user_nicename', $user_id );
  $array_data['user_permalink'] = get_author_posts_url( $user_id );

  // featured image
  $array_data['thumbnail'] = get_the_post_thumbnail_url( $arr['id'], 'full' );

  if ( class_exists('acf') ) {
    $array_data['youtube_video_id'] = get_field( 'youtube_video_id',  $arr['id']);
  }

  return $array_data;
}

function melaine_hunley_additional_product_data($arr, $field_name, $request) {
  $user_id = absint($arr['author']);
  $array_data = [];

  // author data
  $array_data['user_nicename']  = get_the_author_meta( 'user_nicename', $user_id );
  $array_data['user_permalink'] = get_author_posts_url( $user_id );

  // product
  // featured image
  $array_data['thumbnail'] = get_the_post_thumbnail_url( $arr['id'], 'full' );
  // is on sale
  // $array_data['on_sale'] = $product->is_on_sale();
  // $array_data['sale_price'] = $product->get_sale_price();
  // $array_data['regular_price'] = $product->get_regular_price();

  return $array_data;
}







