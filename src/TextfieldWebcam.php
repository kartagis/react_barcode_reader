<?php

namespace Drupal\react_barcode_reader;

use Drupal\Core\Block\BlockManager;

class TextfieldWebcam {
  public function __construct(BlockManager $blockManager) {
    $this->blockManager = $blockManager;
  }
  public function renderBlock($render) {
    $blockManager = \Drupal::service('plugin.manager.block');
    $config = [];
    $pluginBlock = $blockManager->createInstance('react_module_block', $config);
    $access_result = $pluginBlock->access(\Drupal::currentUser());
    if (is_object($access_result) && $access_result->isForbidden() || is_bool($access_result) && !$access_result) {
      return [];
    }
    $render = $pluginBlock->build();
    \Drupal::service('renderer')->addCacheableDependency($render, $pluginBlock);
    return $render;
  }
}
