<?php
/**
 * @file
 * @author Darren "Dee" Lee
 * Contains Drupal\playpoi_toolbox\Controller\PlayPoiToolboxController.
 */

namespace Drupal\playpoi_toolbox\Controller;

 /**
 * Provides route responses for the Example module.
 */
class PlayPoiToolboxController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function testPage() {
    $element = array(
      '#markup' => 'Hello PlayPoi world!',
    );
    return $element;
  }
}