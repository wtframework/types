<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait BaseConvert
{

  public function baseconvert(
    int $from_base,
    int $to_base,
    string &$return = null
  ): static|IsNum|string
  {

    $return = base_convert(
      (string) (int) $this->num,
      $from_base,
      $to_base
    );

    return 3 === func_num_args() ? $this : $return;

  }

}