<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait StripTags
{

  public function striptags(array|string $allowed_tags = null): static|IsStr
  {

    $this->string = strip_tags($this->string, $allowed_tags);

    return $this;

  }

}