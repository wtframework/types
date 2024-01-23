<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Serialize
{

  public function serialize(string &$return = null): static|IsStr|string
  {

    $return = serialize($this->string);

    return func_num_args() ? $this : $return;

  }

}