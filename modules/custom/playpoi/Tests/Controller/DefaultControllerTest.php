<?php

/**
 * @file
 * Contains Drupal\playpoi\Tests\DefaultController.
 */

namespace Drupal\playpoi\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the playpoi module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "playpoi DefaultController's controller functionality",
      'description' => 'Test Unit for module playpoi and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests playpoi functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module playpoi.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
