<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;
use BroadAgeApi\Exception\InvalidDateFormatException;
use function BroadAgeApi\verifyDate;

final class MatchList extends BroadAgeApiClient {

    protected $baseURL = '/soccer/match/';

    /**
     * MatchList constructor.
     * @param string | null $date
     * @throws InvalidDateFormatException
     */
    public function __construct(string $date = null) {
        parent::__construct();

        if (is_null($date))
            $date = date('d/m/Y');

        $date = verifyDate($date);

        $this->setDate($date);
    }

    /**
     * Provides the daily match list in active season.
     * @link https://www.broadage.com/developers/soccer-api/match-list-all
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function all() {
        return $this->call('list');
    }

    /**
     * Provides “Scheduled” (which means “Not Started”) match list of the day.
     * @link https://www.broadage.com/developers/soccer-api/match-list-scheduled
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function scheduled() {
        return $this->call('list/scheduled');
    }

    /**
     * Provides “Live” match list of the day.
     * @link https://www.broadage.com/developers/soccer-api/match-list-live
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function live() {
        return $this->call('list/live');
    }

    /**
     * Provides the daily results in active season.
     * @link https://www.broadage.com/developers/soccer-api/match-list-results
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function results() {
        return $this->call('list/results');
    }

    /**
     * Provides the daily list of injured and suspended players match-by-match.
     * @link https://www.broadage.com/developers/soccer-api/missing-players-list
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function missingPlayers() {
        return $this->call('missing-players-list');
    }

}