<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait ConvertUUDecode
{

  public function convertuudecode(): static|IsStr
  {

    $this->string = (string) convert_uudecode($this->string);

    return $this;

  }

}