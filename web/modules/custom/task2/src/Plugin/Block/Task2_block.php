<?php

namespace Drupal\task2\Plugin\Block;

use Drupal\Core\Block\BlockBase;



/**
 * Provides a 'Data and Time block' Block.
 *
 * @Block(
 *   id = "data_and_time_block",
 *   admin_label = @Translation("Data and Time block"),
 *   category = @Translation("Our Data and Time block"),
 * )
 */

class Task2_block extends BlockBase {
    
    /**
     * {@inheritdoc}
     */
    public function build() {
      return [
        '#markup' => $this->getDate(),
        '#cache' => [
          'max-age' => 0
        ],
      ];
    }
  
    private function getDate() {

      $data=getdate();
      
      $data_output = "$data[hours]:$data[minutes]:$data[seconds] | $data[mday] $data[month]  $data[year]";
      return $data_output;

    }
  
  }