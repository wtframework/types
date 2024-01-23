<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait PRegFilter
{

  public function pregfilter(
    string|array $pattern,
    string|array $replacement,
    int $limit = -1,
    int &$count = null
  ): static|IsStr
  {

    $this->string = (string) preg_filter(
      $pattern,
      $replacement,
      $this->string,
      $limit,
      $count
    );

    return $this;

  }

}