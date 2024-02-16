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
use function WTFramework\Types\num;
use function WTFramework\Types\str;

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
str('eXaMpLe')
->toupper()
->extract($uppercase)
->tolower()
->extract($lowercase);

// $uppercase = str('EXAMPLE');
// $lowercase = str('example');
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
Whereas most method names are based on the native function names, there are two notable exceptions in the `Arr` class: `advance` is used to call `next` and `contains` is used to call `in_array`.
```php
arr([1, 2, 3])->contains(1); // returns true
arr([1, 2, 3])->advance(); // advances the internal pointer
```
\
Where appropriate the functions are called using static methods. These are:
```php
use WTFramework\Types\Arr;
use WTFramework\Types\Num;
use WTFramework\Types\Str;

Str::httpbuildquery($data);
Str::unserialize($data);

Arr::fill($start_index, $count, $value);
Arr::range($start, $end);

Num::max(...$values);
Num::min(...$values);
Num::pi();
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

To extend the library you can use the static `macro` method, passing the new method name and a closure to call. This works for both static and non-static methods.
```php
use WTFramework\Types\Str;

Str::macro('camelCase', function ()
{

  return $this->ucwords()
  ->replace(' ', '')
  ->lcfirst();

});
```
```php
// Returns 'camelCase'
str('camel case')->camelCase()();
```