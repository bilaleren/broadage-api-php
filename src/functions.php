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
function verifyDate(string $date, $format = 'd/m/Y') {
    $dateTime = DateTime::createFromFormat($format, $date);

    $dateTimeErrors = DateTime::getLastErrors();

    if (!$dateTime || ($dateTimeErrors['warning_count'] + $dateTimeErrors['error_count']) > 0) {
        throw new InvalidDateFormatException(
            "The date must be in {$format} format."
        );
    }

    return $dateTime->format($format);
}