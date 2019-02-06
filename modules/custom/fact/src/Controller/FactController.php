<?php

namespace Drupal\fact\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\fact\Entity\FactInterface;

/**
 * Class FactController.
 *
 *  Returns responses for Fact routes.
 */
class FactController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Fact  revision.
   *
   * @param int $fact_revision
   *   The Fact  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($fact_revision) {
    $fact = $this->entityManager()->getStorage('fact')->loadRevision($fact_revision);
    $view_builder = $this->entityManager()->getViewBuilder('fact');

    return $view_builder->view($fact);
  }

  /**
   * Page title callback for a Fact  revision.
   *
   * @param int $fact_revision
   *   The Fact  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($fact_revision) {
    $fact = $this->entityManager()->getStorage('fact')->loadRevision($fact_revision);
    return $this->t('Revision of %title from %date', ['%title' => $fact->label(), '%date' => format_date($fact->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Fact .
   *
   * @param \Drupal\fact\Entity\FactInterface $fact
   *   A Fact  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(FactInterface $fact) {
    $account = $this->currentUser();
    $langcode = $fact->language()->getId();
    $langname = $fact->language()->getName();
    $languages = $fact->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $fact_storage = $this->entityManager()->getStorage('fact');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $fact->label()]) : $this->t('Revisions for %title', ['%title' => $fact->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all fact revisions") || $account->hasPermission('administer fact entities')));
    $delete_permission = (($account->hasPermission("delete all fact revisions") || $account->hasPermission('administer fact entities')));

    $rows = [];

    $vids = $fact_storage->revisionIds($fact);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\fact\FactInterface $revision */
      $revision = $fact_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $fact->getRevisionId()) {
          $link = $this->l($date, new Url('entity.fact.revision', ['fact' => $fact->id(), 'fact_revision' => $vid]));
        }
        else {
          $link = $fact->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => \Drupal::service('renderer')->renderPlain($username),
              'message' => ['#markup' => $revision->getRevisionLogMessage(), '#allowed_tags' => Xss::getHtmlTagList()],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.fact.translation_revert', ['fact' => $fact->id(), 'fact_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.fact.revision_revert', ['fact' => $fact->id(), 'fact_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.fact.revision_delete', ['fact' => $fact->id(), 'fact_revision' => $vid]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['fact_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
