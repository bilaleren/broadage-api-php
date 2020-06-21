<?php

namespace BroadAgeApi\Sport\Football;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class Match extends BroadAgeApiClient
{

    protected $baseURL = '/football/match/';

    public function __construct(int $matchId)
    {
        parent::__construct();

        $this->setMatchId($matchId);
    }

    /**
     * Provides player based statistics during the match in the categories of passing,
     * rushing, defensive and other statistics.
     * @link https://www.broadage.com/developers/football-api/match-boxscore
     * @return Response
     * @throws RequestException
     */
    public function boxScore(): Response
    {
        return $this->call('boxscore');
    }

    /**
     * Provides the key statistics of the match by team based.
     * @link https://www.broadage.com/developers/football-api/match-key-statistics
     * @return Response
     * @throws RequestException
     */
    public function keyStatistics(): Response
    {
        return $this->call('statistics/key');
    }

    /**
     * Provides the team statistics of the match.
     * @link https://www.broadage.com/developers/football-api/match-team-statistics
     * @return Response
     * @throws RequestException
     */
    public function teamStatistics(): Response
    {
        return $this->call('statistics/team');
    }

    /**
     * Provides all match drives and plays during the match with their detailed informations.
     * @link https://www.broadage.com/developers/football-api/match-play-by-play
     * @return Response
     * @throws RequestException
     */
    public function playByPlay(): Response
    {
        return $this->call('playbyplay');
    }

    /**
     * Provides the top player statistics in passing, rushing and receiving during the match.
     * @link https://www.broadage.com/developers/football-api/match-game-leaders
     * @return Response
     * @throws RequestException
     */
    public function gameLeaders(): Response
    {
        return $this->call('gameleaders');
    }

}