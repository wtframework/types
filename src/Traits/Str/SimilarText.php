<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait SimilarText
{

  public function similartext(
    string $string,
    float &$percent = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = similar_text($this->string, $string, $percent);

    return 3 === func_num_args() ? $this : $return;

  }

}