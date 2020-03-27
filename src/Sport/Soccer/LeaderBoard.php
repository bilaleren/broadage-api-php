<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class LeaderBoard extends BroadAgeApiClient {

    protected $baseURL = '/soccer/tournament/leaderboard/';

    public function __construct(int $tournamentId) {
        parent::__construct();

        $this->setTournamentId($tournamentId);
    }

    /**
     * Goals endpoint provides the top scorers of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-goals
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function goals() {
        return $this->call('goal');
    }

    /**
     * Assists endpoint provides the top assist makers of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-assists
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function assists() {
        return $this->call('assist');
    }

    /**
     * Provides the yellow card list of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-yellow-cards
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function yellowCards() {
        return $this->call('yellow');
    }

    /**
     * Provides the red card list of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-red-cards
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function redCards() {
        return $this->call('red');
    }

}