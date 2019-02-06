<?php

namespace Drupal\fact\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Fact type entity.
 *
 * @ConfigEntityType(
 *   id = "fact_type",
 *   label = @Translation("Fact type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\fact\FactTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\fact\Form\FactTypeForm",
 *       "edit" = "Drupal\fact\Form\FactTypeForm",
 *       "delete" = "Drupal\fact\Form\FactTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\fact\FactTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "fact_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "fact",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/fact_type/{fact_type}",
 *     "add-form" = "/admin/structure/fact_type/add",
 *     "edit-form" = "/admin/structure/fact_type/{fact_type}/edit",
 *     "delete-form" = "/admin/structure/fact_type/{fact_type}/delete",
 *     "collection" = "/admin/structure/fact_type"
 *   }
 * )
 */
class FactType extends ConfigEntityBundleBase implements FactTypeInterface {

  /**
   * The Fact type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Fact type label.
   *
   * @var string
   */
  protected $label;

}
