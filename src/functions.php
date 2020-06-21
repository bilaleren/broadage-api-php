<?php

namespace BroadAgeApi;

use DateTime;
use BroadAgeApi\Exception\InvalidDateFormatException;

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