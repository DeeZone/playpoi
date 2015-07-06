<?php

/**
 * @file
 * Definition of Drupal\d8views\Plugin\views\filter\NodeStartDateNow.
 */
namespace Drupal\playpoi_toolbox\Plugin\views\filter;

use Drupal\views\Plugin\views\display\DisplayPluginBase;
use Drupal\views\Plugin\views\filter\Date;
use Drupal\views\ViewExecutable;

/**
 * Filters by start_date being equal to or later than now.
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("playpoi_toolbox_node_start_date_now")
 */
class NodeStartDateNow extends Date {
  
  /**
   * {@inheritdoc}
   */
  public function init(ViewExecutable $view, DisplayPluginBase $display, array &$options = NULL) {
    parent::init($view, $display, $options);
    $this->valueTitle = t('Start Date from Now');
  }

  /**
   * ??
   * 
   * Override the query so that no filtering takes place if the user doesn't
   * select any options.
   *
   * ??
   */
  public function query() {
    if (!empty($this->value)) {
      parent::query();
    }
  }
  
}
