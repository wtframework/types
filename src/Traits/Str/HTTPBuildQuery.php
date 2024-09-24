<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait HTTPBuildQuery
{

  public static function httpbuildquery(
    array|object $data,
    string $numeric_prefix = "",
    string $arg_separator = null,
    int $encoding_type = PHP_QUERY_RFC1738
  ): static|IsStr
  {

    return new static(string: http_build_query(
      $data,
      $numeric_prefix,
      $arg_separator,
      $encoding_type
    ));

  }

}