<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait WordWrap
{

  public function wordwrap(
    int $width = 75,
    string $break = "\n",
    bool $cut_long_words = false
  ): static|IsStr
  {

    $this->string = wordwrap($this->string, $width, $break, $cut_long_words);

    return $this;

  }

}