<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Metaphone
{

  public function metaphone(int $max_phonemes = 0): static|IsStr
  {

    $this->string = metaphone($this->string, $max_phonemes);

    return $this;

  }

}