# What the Framework?! types

This library provides a fluent interface for manipulating strings, arrays, and numbers.

## Installation
```bash
composer require wtframework/types
```

## Documentation

### WTFramework\Types\Str

The `WTFramework\Types\Str` object is a wrapper around many of PHP's string functions allowing for a fluent interface and a consistent naming system. The rules for method names are:

1. Underscores are removed
2. "str" is removed as a prefix
3. The primary string argument is removed

```php
use function WTFramework\Types\str;

echo str('camel case')
->ucwords()
->replace(' ', '')
->lcfirst();

// camelCase
```
\
Methods that do not require arguments can be called as properties rather than as methods.

```php
echo str('camel case')
->ucwords
->replace(' ', '')
->lcfirst;
```
\
Methods that would return an array will return an instance of `WTFramework\Types\Arr` allowing for further chaining.

```php
str('reverse me')
->explode(' ')  // returns arr(['reverse', 'me'])
->reverse
->implode(' '); // returns str('me reverse')
```
\
Methods that would return something other than the current object allow for a final `$return` argument passed by reference. If provided then the normal return value will be assigned to this variable and the method will return back the current object.

```php
str('this is a sentence')
->wordcount(return: $word_count1)
->replace(' ', '')
->wordcount(return: $word_count2);

// $word_count1 = 4
// $word_count2 = 1
```
\
The `echo` method will `echo` the string. This method has optional `$prefix` and `$suffix` arguments.

```php
str('Michael')
->echo(
  prefix: 'Welcome ',
  suffix: '!'
);

// Welcome Michael!
```
\
The `extract` method allows you to extract a clone of the current object.

```php
str('This is a sentence')
->toupper
->extract($uppercase)
->tolower
->extract($lowercase);

// $uppercase = str('THIS IS A SENTENCE')
// $lowercase = str('this is a sentence')
```
\
Use the `return` method, invoke the object as a function, or cast the object to a string to return the string.

```php
$string = $str->return();
$string = $str();
$string = (string) $str;
```

### WTFramework\Types\Arr

The `WTFramework\Types\Arr` object is a wrapper around many of PHP's array functions allowing for a fluent interface and a consistent naming system. The rules for method names are:

1. Underscores are removed
2. "array" is removed as a prefix
3. The primary array argument is removed

`WTFramework\Types\Arr` implements `ArrayAccess`, `Countable`, `Iterator`, and `Serializable`.

```php
use function WTFramework\Types\arr;

arr(['foo', 'bar'])
->push('baz')
->sort();

// ['bar', 'baz', 'foo']
```
\
Methods that do not require arguments can be called as properties rather than as methods.

```php
arr(['foo', 'bar'])
->push('baz')
->sort;
```
\
Methods that would return a string will return an instance of `WTFramework\Types\Str` allowing for further chaining.

```php
arr(['this', 'is', 'a', 'list'])
->implode(' ')  // returns str('this is a list')
->ucwords
->explode(' '); // returns arr(['This', 'Is', 'A', 'List'])
```
\
Most methods that would return something other than the current object allow for a final `$return` argument passed by reference. If provided then the normal return value will be assigned to this variable and the method will return back the current object.

```php
arr(['correct', 'horse', 'battery', 'staple'])
->implode(' ', return: $str1)
->implode('-', return: $str2);

// $str1 = 'correct horse battery staple'
// $str2 = 'correct-horse-battery-staple'
```
\
The `advance` method replaces the `next` function and advances the internal pointer of the array.

```php
arr([1, 2, 3])->advance();
```
\
The `contains` method replaces the `in_array` function and checks if the value exists in an array.

```php
arr([1, 2, 3])->contains(1);
```
\
The `printr` and `vardump` methods allow you to call `print_r` and `var_dump` respectively on the array.

```php
arr([1, 2, 3])
->printr
->vardump;
```
\
The `extract` method allows you to extract a clone of the current object.

```php
arr([2, 1, 3])
->sort
->extract($sort1)
->rsort
->extract($sort2);

// $sort1 = arr([1, 2, 3])
// $sort2 = arr([3, 2, 1])
```
\
Either use the `return` method or invoke the object as a function to return the array.

```php
$array = $arr->return();
$array = $arr();
```

### WTFramework\Types\Num

The `WTFramework\Types\Num` object is a wrapper around many of PHP's number functions allowing for a fluent interface and a consistent naming system. The rules for method names are:

1. Underscores are removed
2. The primary number argument is removed

```php
use function WTFramework\Types\num;

num(-9.5)
->abs()
->round();

// 10.0
```
\
Methods that do not require arguments can be called as properties rather than as methods.

```php
num(-9.5)
->abs
->round;
```
\
Methods that would return something other than the current object allow for a final `$return` argument passed by reference. If provided then the normal return value will be assigned to this variable and the method will return back the current object.

```php
num(10)
->baseconvert(10, 8, return: $base8)
->baseconvert(10, 6, return: $base6);

// $base8 = '12'
// $base6 = '14'
```
\
The `echo` method will `echo` the number. This method has optional `$prefix` and `$suffix` arguments.

```php
num(10)
->echo(
  prefix: 'You have ',
  suffix: ' messages.'
);

// You have 10 messages.
```
\
The `extract` method allows you to extract a clone of the current object.

```php
num(-9.5)
->abs
->extract($num1)
->round
->extract($num2);

// $num1 = num(9.5)
// $num2 = num(10)
```
\
Either use the `return` method or invoke the object as a function to return the number or cast it to a string to return the number as a string.

```php
$number = $num->return();
$number = $num();
$number = (string) $num;
```

## Method lists

[Str](docs/str.md)\
[Arr](docs/arr.md)\
[Num](docs/num.md)
