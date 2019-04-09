<?php

/**
* @file
* Contains \Drupal\footer_floss\Plugin\Block\FooterFlossBlock.
*/
namespace Drupal\footer_floss\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Url;

/**
* Form for redirect on node.
*
* @Block(
* id = "footer_floss",
* admin_label = @Translation("Footer Floss Block"),
* category = @Translation("Blocks")
* )
*/

class FooterFlossBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */

  public function build() {
//      $link = Url::fromUri('internal:/subscribe_us', $options);
//      $linked_contact_button = Link::fromTextAndUrl(Markup::create($button), $link);
    return ([
      '#theme' => 'footer_floss_template',
      '#button_contact' => '',
    ]);
  }
}


