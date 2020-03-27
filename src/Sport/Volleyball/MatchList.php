<?php

namespace BroadAgeApi\Sport\Volleyball;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;
use BroadAgeApi\Exception\InvalidDateFormatException;
use function BroadAgeApi\verifyDate;

final class MatchList extends BroadAgeApiClient {

    protected $baseURL = '/volleyball/match/';

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
     * Provides the daily match list in active season and includes scheduled, live and finished matches.
     * @link https://www.broadage.com/developers/volleyball-api/match-list-all
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function all() {
        return $this->call('list');
    }

    /**
     * Provides “Scheduled” (which means “Not Started”) match list of the day.
     * @link https://www.broadage.com/developers/volleyball-api/match-list-scheduled
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function scheduled() {
        return $this->call('list/scheduled');
    }

    /**
     * Provides only the daily live match list in active season.
     * @link https://www.broadage.com/developers/volleyball-api/match-list-live
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function live() {
        return $this->call('list/live');
    }

    /**
     * Provides the daily results in active season.
     * @link https://www.broadage.com/developers/volleyball-api/match-list-results
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function results() {
        return $this->call('list/results');
    }

}