<?php 

namespace App\Helper\Lang;

use Exception;

class Lang {
    /**
     * The key or identifier of the language
     * @var string
     */
    public static $key;

    /**
     * The name of the language that will be shown 
     * in the dropdown when changing language
     * @var string
     */
    public static $name;

    /**
     * The icon of the language that will be displayed
     * in the dropdown next to the name of the language
     * @var string
     */
    public static $icon;

    /**
     * Return the key of the language
     * @return string
     */
    public static function getKey() {
        return static::$key;
    }

    /**
     * Return the name of the language
     * @return string
     */
    public static function getName() {
        return static::$name;
    }

    /**
     * Return the icon of the language
     * @return string
     */
    public static function getIcon() {
        return static::$icon;
    }
    /**
     * Returns the value based on the key provided
     * @param string $key
     * @return string|array|null
     */
    public static function get($key)
    {
        $translations = static::lang();
        return $translations[$key] ?? throw new Exception("No translation found for '$key'");
    }

    /**
     * holds the language
     * translations
     * @return array<string, string>
     */
    public static function lang() {
        return [];
    }

    public static function translations(){
        return [
            static::$key => [static::$name, static::$icon, static::Lang()]
        ];
    }
}