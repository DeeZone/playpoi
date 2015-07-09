<?php
/**
 * Implements hook_views_data_alter().
 */
function playpoi_toolbox_views_data_alter(array &$data) {
  $data['node']['node_type_flagger'] = array(
    'title' => t('Node type flagger'),
    'field' => array(
      'title' => t('Node type flagger'),
      'help' => t('Flags a specific node type.'),
      'id' => 'node_type_flagger',
    ),
  );
  $data['node_field_data']['node_type_filter'] = array(
    'title' => t('Enhanced node type filter'),
    'filter' => array(
      'title' => t('Enhanced node type filter'),
      'help' => t('Provides a custom filter for nodes by their type.'),
      'field' => 'type',
      'id' => 'string'
    ),
  );
  $data['node_field_data']['nodes_titles'] = array(
    'title' => t('Node titles'),
    'filter' => array(
      'title' => t('Node titles'),
      'help' => t('Specify a list of titles a node can have.'),
      'field' => 'title',
      'id' => 'playpoi_toolbox_node_titles'
    ),
  );
  $data['node__field_start_date']['node_start_date_now'] = array(
    'title' => t('Filter nodes that start now or later.'),
    'filter' => array(
      'title' => t('Event node start now'),
      'help' => t('The start date of the node must be now or later.'),
      'field' => 'field_start_date_value',
      'id' => 'playpoi_toolbox_node_start_date_now'
    ),
  );
}
