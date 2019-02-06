<?php

/**
 * @file
 * Contains fact.page.inc.
 *
 * Page callback for Fact entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Fact templates.
 *
 * Default template: fact.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_fact(array &$variables) {
  // Fetch Fact Entity Object.
  $fact = $variables['elements']['#fact'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
