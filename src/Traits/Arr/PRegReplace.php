<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait PRegReplace
{

  public function pregreplace(
    string|array $pattern,
    string|array $replacement,
    int $limit = -1,
    int &$count = null
  ): static|IsArr
  {

    $this->array = (array) preg_replace(
      $pattern,
      $replacement,
      $this->array,
      $limit,
      $count
    );

    return $this;

  }

}