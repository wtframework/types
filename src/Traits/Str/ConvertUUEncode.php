<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait ConvertUUEncode
{

  public function convertuuencode(): static|IsStr
  {

    $this->string = convert_uuencode($this->string);

    return $this;

  }

}