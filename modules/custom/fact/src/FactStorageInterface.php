<?php

namespace Drupal\fact;

use Drupal\Core\Entity\ContentEntityStorageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\fact\Entity\FactInterface;

/**
 * Defines the storage handler class for Fact entities.
 *
 * This extends the base storage class, adding required special handling for
 * Fact entities.
 *
 * @ingroup fact
 */
interface FactStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Fact revision IDs for a specific Fact.
   *
   * @param \Drupal\fact\Entity\FactInterface $entity
   *   The Fact entity.
   *
   * @return int[]
   *   Fact revision IDs (in ascending order).
   */
  public function revisionIds(FactInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Fact author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Fact revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\fact\Entity\FactInterface $entity
   *   The Fact entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(FactInterface $entity);

  /**
   * Unsets the language for all Fact with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
