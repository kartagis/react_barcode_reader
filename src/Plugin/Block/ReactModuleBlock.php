<?php

namespace Drupal\react_barcode_reader\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'React Module' Block.
 *
 * @Block(
 *   id = "react_module_block",
 *   admin_label = @Translation("Barcode Reader"),
 *   category = @Translation("React Module"),
 * )
 */
class ReactModuleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['react_module_block']['#markup'] = '<div id="react-app"></div>';
    $build['react_module_block']['#attached']['library'][] =  'react_barcode_reader/react_module_block';
    return $build;
  }
}
