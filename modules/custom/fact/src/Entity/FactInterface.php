<?php

namespace Drupal\fact\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Fact entities.
 *
 * @ingroup fact
 */
interface FactInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Fact name.
   *
   * @return string
   *   Name of the Fact.
   */
  public function getName();

  /**
   * Sets the Fact name.
   *
   * @param string $name
   *   The Fact name.
   *
   * @return \Drupal\fact\Entity\FactInterface
   *   The called Fact entity.
   */
  public function setName($name);

  /**
   * Gets the Fact creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Fact.
   */
  public function getCreatedTime();

  /**
   * Sets the Fact creation timestamp.
   *
   * @param int $timestamp
   *   The Fact creation timestamp.
   *
   * @return \Drupal\fact\Entity\FactInterface
   *   The called Fact entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Fact published status indicator.
   *
   * Unpublished Fact are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Fact is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Fact.
   *
   * @param bool $published
   *   TRUE to set this Fact to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\fact\Entity\FactInterface
   *   The called Fact entity.
   */
  public function setPublished($published);

  /**
   * Gets the Fact revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Fact revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\fact\Entity\FactInterface
   *   The called Fact entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Fact revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Fact revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\fact\Entity\FactInterface
   *   The called Fact entity.
   */
  public function setRevisionUserId($uid);

}
