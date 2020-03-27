<?php

namespace BroadAgeApi\Sport\Basketball;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class Team extends BroadAgeApiClient {

    protected $baseURL = '/basketball/team/';

    public function __construct(int $teamId, int $tournamentId = null) {
        parent::__construct();

        $this->setTeamId($teamId);

        if (is_int($tournamentId))
            $this->setTournamentId($tournamentId);
    }

    /**
     * Provides the active season squads for teams.
     * @link https://www.broadage.com/developers/basketball-api/team-squad
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function squad() {
        return $this->call('squad');
    }

    /**
     * Provides the all match list of the team in the active season.
     * @link https://www.broadage.com/developers/basketball-api/team-schedule
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function schedule() {
        return $this->call('schedule');
    }

}