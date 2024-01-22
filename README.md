# What the Framework?! types

This library provides a fluent interface for manipulating strings, arrays, and numbers.

## Installation
```bash
composer require wtframework/types
```

## Documentation

Each of the classes provided in this library is a wrapper for the relevant native functions. Method names mostly use the native function names but with underscores and certain prefixes like `str*` and `array*` removed. Most methods are chainable, even when switching from strings to arrays and vice versa.

```php
use function WTFramework\Types\arr;
use function WTFramework\Types\str;
use function WTFramework\Types\num;

str('reverse me')
->explode(' ')  // returns arr(['reverse', 'me'])
->reverse()
->implode(' '); // returns str('me reverse')
```
\
Some methods, where appropriate, are not chainable by default.
```php
str('example')
->len(); // returns 7
```
\
In these cases a final `$return` argument can be passed by reference. The default return value will be assigned to this variable and the method will return the current object.
```php
str('example')
->len(return: $length); // returns $this

// $length = 7
```
\
Each class provides an `extract` method to extract a clone of the current object.
```php
str('example')
->toupper()
->extract($uppercase)
->tolower()
->extract($lowercase);
```
\
The `Str` and `Num` classes provide an `echo` method to echo the current value. This method has optional `$prefix` and `$suffix` arguments.
```php
str('example')
->echo(
  prefix: 'this is an ',
  suffix: '.'
);

// this is an example.
```
\
The `Arr` class provides a `printr` and a `vardump` method to call `print_r` and `var_dump` respectively on the current value.
```php
arr([1, 2, 3])
->printr()
->vardump();
```
\
Whereas most method names are based on the native function names, there are two notable exceptions in the `Arr` class: `advance` is used to call `next` and `contains` is used to call `in_array`.
```php
arr([1, 2, 3])->contains(1); // returns true
arr([1, 2, 3])->advance(); // advances the internal pointer
```
\
To return the current value you can either call the `return` method or invoke the object as a function.
```php
str('example')->return(); // returns 'example'
arr([1, 2, 3])(); // returns [1, 2, 3]
```
\
The `Str` and `Num` classes implement `Stringable` and the `Arr` class implements `ArrayAccess`, `Countable`, `Iterator`, and `Serializable`.

## Extending the library

The simplest way to extend the library is to extend the base classes.
```php
use WTFramework\Types\Str;

class StrExtended extends Str
{

  public function camelCase(): static
  {

    $this->ucwords()
    ->replace(' ', '')
    ->lcfirst();

    return $this;

  }

}
```
```php
(new StrExtended('camel case'))
->camelCase()(); // returns 'camelCase'
```
\
You can also replace the base classes by implementing the `IsStr`, `IsArr`, or `IsNum` interface. You can reuse one or more of the base class methods by using the relevant trait(s).
```php
use Stringable;
use WTFramework\Types\Interfaces\IsStr;
use WTFramework\Types\Traits\Str\Construct;
use WTFramework\Types\Traits\Str\MagicInvoke;
use WTFramework\Types\Traits\Str\LCFirst;
use WTFramework\Types\Traits\Str\Replace;
use WTFramework\Types\Traits\Str\UCWords;

class NewStr implements IsStr, Stringable
{

  use Construct;
  use MagicInvoke;
  use LCFirst;
  use Replace;
  use UCWords;

  public function camelCase(): static
  {

    $this->ucwords()
    ->replace(' ', '')
    ->lcfirst();

    return $this;

  }

}
```
\
If you wish the base `Str` class to return your extended/reimplemented array class when returning arrays then pass its name to the `arr` static method.
```php
use WTFramework\Types\Str;

Str::arr(CustomArr::class);
```
\
If you wish the base `Arr` class to return your extended/reimplemented string class when returning strings then pass its name to the `str` static method.
```php
use WTFramework\Types\Arr;

Arr::str(CustomStr::class);
```