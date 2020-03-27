<?php

namespace BroadAgeApi\Sport\Basketball;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class Match extends BroadAgeApiClient {

    protected $baseURL = '/basketball/match/';

    public function __construct(int $matchId) {
        parent::__construct();

        $this->setMatchId($matchId);
    }

    /**
     * Provides only the match summary.
     * @link https://www.broadage.com/developers/basketball-api/match-summary
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function summary() {
        return $this->call('summary');
    }

    /**
     * Provides player based statistics during the match like free throw attempted/made,
     * field goals attempted/made, 3 points attempted/made and other statistics.
     * @link https://www.broadage.com/developers/basketball-api/match-boxscore
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function boxScore() {
        return $this->call('boxscore');
    }

    /**
     * Provides the statistics of the match by team based.
     * @link https://www.broadage.com/developers/basketball-api/match-statistics
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function statistics() {
        return $this->call('statistics');
    }

    /**
     * Provides all match events during the match like free throw shots,
     * 2 points shots, 3 points shots, assists, rebounds and other events.
     * @link https://www.broadage.com/developers/basketball-api/match-play-by-play
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function playByPlay() {
        return $this->call('playbyplay');
    }

    /**
     * Provides the top player statistics in points, assists and rebounds during the match.
     * @link https://www.broadage.com/developers/basketball-api/match-game-leaders
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function gameLeaders() {
        return $this->call('gameleaders');
    }

}