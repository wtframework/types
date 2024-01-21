<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait ChangeKeyCase
{

  public function changekeycase(int $case = CASE_LOWER): static|IsArr
  {

    $this->array = array_change_key_case($this->array, $case);

    return $this;

  }

}