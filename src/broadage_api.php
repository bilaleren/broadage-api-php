<?php

namespace BroadAgeApi;

use BroadAgeApi\Sport\Soccer;
use BroadAgeApi\Sport\Baseball;
use BroadAgeApi\Sport\Football;
use BroadAgeApi\Sport\Handball;
use BroadAgeApi\Sport\IceHockey;
use BroadAgeApi\Sport\Basketball;
use BroadAgeApi\Sport\Volleyball;
use BroadAgeApi\BroadAgeApi as Api;

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