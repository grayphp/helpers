<?php

use Grayphp\Helpers\ArrayHelper\arr;
use Grayphp\Helpers\CaptchaHelper\captcha;
use Grayphp\Helpers\CaptchaHelper\Interfaces\PhraseBuilder;
//array start
if (!function_exists('array_get')) {
    /**
     * Gets a value in an array by dot notation for the keys.
     *
     * @param string $key
     * @param array  $array
     *
     * @return mixed
     */
    function array_get($key, $array)
    {
        return arr::get($key, $array);
    }
}

if (!function_exists('array_set')) {
    /**
     * Sets a value in an array using the dot notation.
     *
     * @param string $key
     * @param mixed  $value
     * @param array  $array
     *
     * @return bool
     */
    function array_set($key, $value, &$array)
    {
        return arr::set($key, $value, $array);
    }
}

if (!function_exists('array_first')) {
    /**
     * Returns the first element of an array.
     *
     * @param array $array
     *
     * @return mixed $value
     */
    function array_first($array)
    {
        return arr::first($array);
    }
}

if (!function_exists('array_last')) {
    /**
     * Returns the last element of an array.
     *
     * @param array $array
     *
     * @return mixed $value
     */
    function array_last($array)
    {
        return arr::last($array);
    }
}

if (!function_exists('to_array')) {
    /**
     * Converts a string or an object to an array.
     *
     * @param string|object $var
     *
     * @return array|null
     */
    function to_array($var)
    {
        return arr::dump($var);
    }
}

if (!function_exists('to_object')) {
    /**
     * Converts an array to an object.
     *
     * @param array $array
     *
     * @return object|null
     */
    function to_object($array)
    {
        return arr::toObject($array);
    }
}

if (!function_exists('is_assoc')) {
    /**
     * Detects if the given value is an associative array.
     *
     * @param array $array
     *
     * @return bool
     */
    function is_assoc($array)
    {
        return arr::isAssoc($array);
    }
}

//array end 
//captcha start
if (!function_exists('create_captcha')) {
    /**
     * Create a captcha image.
     * @return void
     */
    function create_captcha()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        header('Content-type:image/jpg');
        $builder = new captcha;
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->build()
            ->output();
    }
}

if (!function_exists('validate_captcha')) {
    /**
     * Validate a captcha image.
     * @param string $userInput
     * @return bool
     */
    function validate_captcha($userInput)
    {
        if (isset($_SESSION['phrase']) && PhraseBuilder::comparePhrases($_SESSION['phrase'], $userInput)) {
            return true;
            unset($_SESSION['phrase']);
        } else {
            return false;
        }
    }
}