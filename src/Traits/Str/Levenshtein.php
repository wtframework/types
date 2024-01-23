<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Levenshtein
{

  public function levenshtein(
    string $string,
    int $insertion_cost = 1,
    int $replacement_cost = 1,
    int $deletion_cost = 1,
    int &$return = null
  ): static|IsStr|int
  {

    $return = levenshtein(
      $this->string,
      $string,
      $insertion_cost,
      $replacement_cost,
      $deletion_cost
    );

    return 5 === func_num_args() ? $this : $return;

  }

}