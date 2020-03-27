<?php

namespace BroadAgeApi;

use BroadAgeApi\Sport\Soccer;
use BroadAgeApi\Sport\Baseball;
use BroadAgeApi\Sport\Handball;
use BroadAgeApi\Sport\Football;
use BroadAgeApi\Sport\IceHockey;
use BroadAgeApi\Sport\Basketball;
use BroadAgeApi\Sport\Volleyball;

class BroadAgeApi {

    public final static function init(array $options) {
        BroadAgeApiOptions::setOptions($options);
    }

    /**
     * @return Soccer
     */
    public final static function soccer() {
        return new Soccer;
    }

    /**
     * @return Basketball
     */
    public final static function basketball() {
        return new Basketball;
    }

    /**
     * @return Football
     */
    public final static function football() {
        return new Football;
    }

    /**
     * @return Baseball
     */
    public final static function baseball() {
        return new Baseball;
    }

    /**
     * @return IceHockey
     */
    public final static function iceHockey() {
        return new IceHockey;
    }

    /**
     * @return Volleyball
     */
    public final static function volleyball() {
        return new Volleyball;
    }

    /**
     * @return Handball
     */
    public final static function handball() {
        return new Handball;
    }

    /**
     * @return GlobalData
     */
    public final static function global() {
        return new GlobalData;
    }

}