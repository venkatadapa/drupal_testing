<?php

/**
 * Implementation of hook_node_info().
 */
function flight_reservation_content_types_node_info() {
  $items = array(
    'flight_tickets' => array(
      'name' => t('Flight Tickets'),
      'module' => 'features',
      'description' => t('Flight Tickets'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
