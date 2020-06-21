<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class Match extends BroadAgeApiClient
{

    protected $baseURL = '/soccer/match/';

    public function __construct(int $matchId)
    {
        parent::__construct();

        $this->setMatchId($matchId);
    }

    /**
     * Provides details like scores of the teams in match, stadium of the match,
     * the referee of the match, the weather for the match date.
     * @link https://www.broadage.com/developers/soccer-api/match-summary
     * @return Response
     * @throws RequestException
     */
    public function summary(): Response
    {
        return $this->call('summary');
    }

    /**
     * Provides the lineups and formations for before the match has started.
     * @link https://www.broadage.com/developers/soccer-api/match-lineup
     * @return Response
     * @throws RequestException
     */
    public function lineup(): Response
    {
        return $this->call('lineup');
    }

    /**
     * Provides the statistics of the match by team based.
     * @link https://www.broadage.com/developers/soccer-api/match-statistics
     * @return Response
     * @throws RequestException
     */
    public function statistics(): Response
    {
        return $this->call('statistics');
    }

    /**
     * Provides the live commentary of the match.
     * @link https://www.broadage.com/developers/soccer-api/match-commentary
     * @return Response
     * @throws RequestException
     */
    public function commentary(): Response
    {
        return $this->call('commentary');
    }

    /**
     * Provides all the live events of the match.
     * @link https://www.broadage.com/developers/soccer-api/match-events-all
     * @return Response
     * @throws RequestException
     */
    public function eventAll(): Response
    {
        return $this->call('event/all');
    }

    /**
     * Provides the basic live events of the match.
     * @link https://www.broadage.com/developers/soccer-api/match-events-basic
     * @return Response
     * @throws RequestException
     */
    public function eventBasic(): Response
    {
        return $this->call('event/basic');
    }

}