<?php

namespace BroadAgeApi\Sport\Football;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class Match extends BroadAgeApiClient {

    protected $baseURL = '/football/match/';

    public function __construct(int $matchId) {
        parent::__construct();

        $this->setMatchId($matchId);
    }

    /**
     * Provides player based statistics during the match in the categories of passing,
     * rushing, defensive and other statistics.
     * @link https://www.broadage.com/developers/football-api/match-boxscore
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function boxScore() {
        return $this->call('boxscore');
    }

    /**
     * Provides the key statistics of the match by team based.
     * @link https://www.broadage.com/developers/football-api/match-key-statistics
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function keyStatistics() {
        return $this->call('statistics/key');
    }

    /**
     * Provides the team statistics of the match.
     * @link https://www.broadage.com/developers/football-api/match-team-statistics
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function teamStatistics() {
        return $this->call('statistics/team');
    }

    /**
     * Provides all match drives and plays during the match with their detailed informations.
     * @link https://www.broadage.com/developers/football-api/match-play-by-play
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function playByPlay() {
        return $this->call('playbyplay');
    }

    /**
     * Provides the top player statistics in passing, rushing and receiving during the match.
     * @link https://www.broadage.com/developers/football-api/match-game-leaders
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function gameLeaders() {
        return $this->call('gameleaders');
    }

}