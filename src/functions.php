<?php

namespace BroadAgeApi;

use DateTime;
use BroadAgeApi\Sport\Soccer;
use BroadAgeApi\Sport\Baseball;
use BroadAgeApi\Sport\Football;
use BroadAgeApi\Sport\Handball;
use BroadAgeApi\Sport\IceHockey;
use BroadAgeApi\Sport\Basketball;
use BroadAgeApi\Sport\Volleyball;
use BroadAgeApi\BroadAgeApi as Api;
use BroadAgeApi\Exception\InvalidDateFormatException;

/**
 * @param array $options
 */
function init(array $options): void
{
    Api::init($options);
}

/**
 * @return Soccer
 */
function soccer(): Soccer
{
    return Api::soccer();
}

/**
 * @return Basketball
 */
function basketball(): Basketball
{
    return Api::basketball();
}

/**
 * @return Football
 */
function football(): Football
{
    return Api::football();
}

/**
 * @return Baseball
 */
function baseball(): Baseball
{
    return Api::baseball();
}

/**
 * @return IceHockey
 */
function iceHockey(): IceHockey
{
    return Api::iceHockey();
}

/**
 * @return Volleyball
 */
function volleyball(): Volleyball
{
    return Api::volleyball();
}

/**
 * @return Handball
 */
function handball(): Handball
{
    return Api::handball();
}

/**
 * @return GlobalData
 */
function globalData(): GlobalData
{
    return Api::globalData();
}

/**
 * @param string $date
 * @param string $format
 * @return string
 * @throws InvalidDateFormatException
 */
function verifyDate(string $date, string $format = 'd/m/Y'): string
{
    $dateTime = DateTime::createFromFormat($format, $date);
    $lastErrors = DateTime::getLastErrors();
    $errorCount = (int) $lastErrors['error_count'];
    $warningCount = (int) $lastErrors['warning_count'];

    if (!($dateTime instanceof DateTime) || ($errorCount + $warningCount) > 0) {
        throw new InvalidDateFormatException(
            "The date must be in {$format} format.",
            400
        );
    }

    return $dateTime->format($format);
}