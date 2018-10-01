<?php
namespace Drupal\backtotop\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a back-to-top button.
 * 
 * @Block(
 *  id = "backtotop_block",
 *  admin_label = @Translation("Back-to-Top"),
 *  category = @Translation("ESC-2"),
 * )
 */

class BackToTopBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => '<div id="toTop">Back-to-top button.</div>',
            '#theme' => 'backtotop',
            '#attached' => array(
                'library' => array(
                    'backtotop/backtotop',
                ),
            ),
        );
    }
}
