<?php

namespace BroadAgeApi\Util;

final class Config
{

    /**
     * @var array
     */
    const DEFAULTS = [
        'baseURL' => null,
        'languageId' => Languages::ENGLISH,
        'subscriptionKey' => null,
        'accept' => Accepts::JSON,
        'requestOptions' => []
    ];

    /**
     * @var array
     */
    private static $config = self::DEFAULTS;

    /**
     * @param array | string $name
     * @param mixed $value
     */
    public static function set($name, $value = null): void
    {
        if (is_array($name)) {
            self::$config = array_merge(self::$config, $name);
        } else {
            self::$config[$name] = $value;
        }
    }

    /**
     * @param string $name
     * @param null $default
     * @return mixed | null
     */
    public static function get(string $name, $default = null)
    {
        return self::$config[$name] ?? $default;
    }

    /**
     * @return array
     */
    public static function getConfig(): array
    {
        return self::$config;
    }

    /**
     * @return array
     */
    public static function getDefaults(): array
    {
        return self::DEFAULTS;
    }

    /**
     * @param string $baseURL
     */
    public static function setBaseURL(string $baseURL): void
    {
        self::set(compact('baseURL'));
    }

    /**
     * @return string
     */
    public static function getBaseUrl(): string
    {
        return rtrim((string) self::get('baseURL'), '/');
    }

    /**
     * @param string $accept
     */
    public static function setAccept(string $accept): void
    {
        self::set(compact('accept'));
    }

    /**
     * @return string
     */
    public static function getAccept(): string
    {
        return (string) self::get('accept');
    }

    /**
     * @param int $languageId
     */
    public static function setLanguageId(int $languageId): void
    {
        self::set(compact('languageId'));
    }

    /**
     * @return int
     */
    public static function getLanguageId(): int
    {
        return (int) self::get('languageId');
    }

    /**
     * @param string $subscriptionKey
     */
    public static function setSubscriptionKey(string $subscriptionKey): void
    {
        self::set(compact('subscriptionKey'));
    }

    /**
     * @return string
     */
    public static function getSubscriptionKey(): string
    {
        return (string) self::get('subscriptionKey');
    }

    /**
     * @param array $requestOptions
     */
    public static function setRequestOptions(array $requestOptions): void
    {
        self::set(compact('requestOptions'));
    }

    /**
     * @return array
     */
    public static function getRequestOptions(): array
    {
        return (array) self::get('requestOptions');
    }

}