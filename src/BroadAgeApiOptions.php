<?php

namespace BroadAgeApi;

final class BroadAgeApiOptions {

    /**
     * @var array
     */
    private static $DEFAULTS = [
        'baseURL' => null,
        'languageId' => 2,
        'subscriptionKey' => null,
        'accept' => 'application/json',
        'requestOptions' => []
    ];

    /**
     * @param array $options
     */
    public static function setOptions(array $options) {
        self::$DEFAULTS = array_merge(self::$DEFAULTS, $options);
    }

    /**
     * @param string $name
     * @return mixed | null
     */
    public static function getOption(string $name) {
        return self::$DEFAULTS[$name] ?? null;
    }

    /**
     * @param string $baseURL
     */
    public static function setBaseURL(string $baseURL) {
        self::setOptions(compact('baseURL'));
    }

    /**
     * @return string | null
     */
    public static function getBaseUrl() {
        return rtrim(self::getOption('baseURL'), '/');
    }

    /**
     * @param int $languageId
     */
    public static function setLanguageId(int $languageId) {
        self::setOptions(compact('languageId'));
    }

    /**
     * @return mixed | null
     */
    public static function getLanguageId() {
        return self::getOption('languageId');
    }

    /**
     * @param string $subscriptionKey
     */
    public static function setSubscriptionKey(string $subscriptionKey) {
        self::setOptions(compact('subscriptionKey'));
    }

    /**
     * @return mixed | null
     */
    public static function getSubscriptionKey() {
        return self::getOption('subscriptionKey');
    }

    /**
     * @param array $requestOptions
     */
    public static function setRequestOptions(array $requestOptions) {
        self::setOptions(compact('requestOptions'));
    }

    /**
     * @return mixed | null
     */
    public static function getRequestOptions() {
        return self::getOption('requestOptions');
    }

}