<?php

namespace BroadAgeApi;

use BroadAgeApi\Util\Config;
use BroadAgeApi\Sport\Soccer;
use BroadAgeApi\Sport\Baseball;
use BroadAgeApi\Sport\Handball;
use BroadAgeApi\Sport\Football;
use BroadAgeApi\Sport\IceHockey;
use BroadAgeApi\Sport\Basketball;
use BroadAgeApi\Sport\Volleyball;

class BroadAgeApi
{

    /**
     * @param array $options
     * @return void
     */
    public final static function init(array $options): void
    {
        Config::set($options);
    }

    /**
     * @return Soccer
     */
    public final static function soccer(): Soccer
    {
        return new Soccer;
    }

    /**
     * @return Basketball
     */
    public final static function basketball(): Basketball
    {
        return new Basketball;
    }

    /**
     * @return Football
     */
    public final static function football(): Football
    {
        return new Football;
    }

    /**
     * @return Baseball
     */
    public final static function baseball(): Baseball
    {
        return new Baseball;
    }

    /**
     * @return IceHockey
     */
    public final static function iceHockey(): IceHockey
    {
        return new IceHockey;
    }

    /**
     * @return Volleyball
     */
    public final static function volleyball(): Volleyball
    {
        return new Volleyball;
    }

    /**
     * @return Handball
     */
    public final static function handball(): Handball
    {
        return new Handball;
    }

    /**
     * @return GlobalData
     */
    public final static function globalData(): GlobalData
    {
        return new GlobalData;
    }

}