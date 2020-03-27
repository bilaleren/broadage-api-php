<?php

namespace BroadAgeApi\Sport\Volleyball;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class Team extends BroadAgeApiClient {

    protected $baseURL = '/volleyball/team/';

    public function __construct(int $teamId) {
        parent::__construct();

        $this->setTeamId($teamId);
    }

    /**
     * Provides the all match list of the team in the active season.
     * @link https://www.broadage.com/developers/volleyball-api/team-schedule
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function schedule() {
        return $this->call('schedule');
    }

}