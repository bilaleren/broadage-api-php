<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class Match extends BroadAgeApiClient {

    protected $baseURL = '/soccer/match/';

    public function __construct(int $matchId) {
        parent::__construct();

        $this->setMatchId($matchId);
    }

    /**
     * Provides details like scores of the teams in match, stadium of the match,
     * the referee of the match, the weather for the match date.
     * @link https://www.broadage.com/developers/soccer-api/match-summary
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function summary() {
        return $this->call('summary');
    }

    /**
     * Provides the lineups and formations for before the match has started.
     * @link https://www.broadage.com/developers/soccer-api/match-lineup
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function lineup() {
        return $this->call('lineup');
    }

    /**
     * Provides the statistics of the match by team based.
     * @link https://www.broadage.com/developers/soccer-api/match-statistics
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function statistics() {
        return $this->call('statistics');
    }

    /**
     * Provides the live commentary of the match.
     * @link https://www.broadage.com/developers/soccer-api/match-commentary
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function commentary() {
        return $this->call('commentary');
    }

    /**
     * Provides all the live events of the match.
     * @link https://www.broadage.com/developers/soccer-api/match-events-all
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function eventAll() {
        return $this->call('event/all');
    }

    /**
     * Provides the basic live events of the match.
     * @link https://www.broadage.com/developers/soccer-api/match-events-basic
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function eventBasic() {
        return $this->call('event/basic');
    }

}