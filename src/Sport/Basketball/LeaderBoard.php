<?php

namespace BroadAgeApi\Sport\Basketball;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class LeaderBoard extends BroadAgeApiClient {

    protected $baseURL = '/basketball/tournament/leaderboard/';

    public function __construct(int $tournamentId) {
        parent::__construct();

        $this->setTournamentId($tournamentId);
    }

    /**
     * Points endpoint provides the top scorers of the tournaments.
     * @link https://www.broadage.com/developers/basketball-api/leaderboard-points
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function points() {
        return $this->call('point');
    }

    /**
     * Assists endpoint provides the top assist makers of the tournaments.
     * @link https://www.broadage.com/developers/basketball-api/leaderboard-assists
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function assists() {
        return $this->call('assist');
    }

    /**
     * Rebounds endpoint provides the top rebounders of the tournaments.
     * @link https://www.broadage.com/developers/basketball-api/leaderboard-rebounds
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function rebounds() {
        return $this->call('rebound');
    }

}