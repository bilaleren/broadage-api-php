<?php

namespace BroadAgeApi\Sport\Basketball;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class Match extends BroadAgeApiClient
{

    protected $baseURL = '/basketball/match/';

    public function __construct(int $matchId)
    {
        parent::__construct();

        $this->setMatchId($matchId);
    }

    /**
     * Provides only the match summary.
     * @link https://www.broadage.com/developers/basketball-api/match-summary
     * @return Response
     * @throws RequestException
     */
    public function summary(): Response
    {
        return $this->call('summary');
    }

    /**
     * Provides player based statistics during the match like free throw attempted/made,
     * field goals attempted/made, 3 points attempted/made and other statistics.
     * @link https://www.broadage.com/developers/basketball-api/match-boxscore
     * @return Response
     * @throws RequestException
     */
    public function boxScore(): Response
    {
        return $this->call('boxscore');
    }

    /**
     * Provides the statistics of the match by team based.
     * @link https://www.broadage.com/developers/basketball-api/match-statistics
     * @return Response
     * @throws RequestException
     */
    public function statistics(): Response
    {
        return $this->call('statistics');
    }

    /**
     * Provides all match events during the match like free throw shots,
     * 2 points shots, 3 points shots, assists, rebounds and other events.
     * @link https://www.broadage.com/developers/basketball-api/match-play-by-play
     * @return Response
     * @throws RequestException
     */
    public function playByPlay(): Response
    {
        return $this->call('playbyplay');
    }

    /**
     * Provides the top player statistics in points, assists and rebounds during the match.
     * @link https://www.broadage.com/developers/basketball-api/match-game-leaders
     * @return Response
     * @throws RequestException
     */
    public function gameLeaders(): Response
    {
        return $this->call('gameleaders');
    }

}