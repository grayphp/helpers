## Core php helper functions.

## Installation

Install helper-functions with composer

```bash
  composer require grayphp/helpers
```

## Helpers

```php
array_get:/**
     * Gets a value in an array by dot notation for the keys.
     *
     * @param string $key
     * @param array  $array
     *
     * @return mixed
     */
array_set:/**
     * Sets a value in an array using the dot notation.
     *
     * @param string $key
     * @param mixed  $value
     * @param array  $array
     *
     * @return bool
     */
array_first:/**
     * Returns the first element of an array.
     *
     * @param array $array
     *
     * @return mixed $value
     */
array_last:/**
     * Returns the last element of an array.
     *
     * @param array $array
     *
     * @return mixed $value
     */
to_array:/**
     * Converts a string or an object to an array.
     *
     * @param string|object $var
     *
     * @return array|null
     */
to_object:/**
     * Converts an array to an object.
     *
     * @param array $array
     *
     * @return object|null
     */
is_assoc:/**
     * Detects if the given value is an associative array.
     *
     * @param array $array
     *
     * @return bool
     */
create_captcha:/**
     * Create a captcha image.
     * @return void
     */
validate_captcha:/**
     * Validate a captcha image.
     * @param string $userInput
     * @return bool
     */
```

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)]()
