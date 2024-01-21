<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait SubstrCompare
{

  public function substrcompare(
    string $needle,
    int $offset,
    int $length = null,
    bool $case_insensitive = false,
    int &$return = null
  ): static|IsStr|int
  {

    $return = substr_compare(
      $this->string,
      $needle,
      $offset,
      $length,
      $case_insensitive
    );

    return 5 === func_num_args() ? $this : $return;

  }

}