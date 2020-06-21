<?php

namespace BroadAgeApi\Sport\Basketball;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class LeaderBoard extends BroadAgeApiClient
{

    protected $baseURL = '/basketball/tournament/leaderboard/';

    public function __construct(int $tournamentId)
    {
        parent::__construct();

        $this->setTournamentId($tournamentId);
    }

    /**
     * Points endpoint provides the top scorers of the tournaments.
     * @link https://www.broadage.com/developers/basketball-api/leaderboard-points
     * @return Response
     * @throws RequestException
     */
    public function points(): Response
    {
        return $this->call('point');
    }

    /**
     * Assists endpoint provides the top assist makers of the tournaments.
     * @link https://www.broadage.com/developers/basketball-api/leaderboard-assists
     * @return Response
     * @throws RequestException
     */
    public function assists(): Response
    {
        return $this->call('assist');
    }

    /**
     * Rebounds endpoint provides the top rebounders of the tournaments.
     * @link https://www.broadage.com/developers/basketball-api/leaderboard-rebounds
     * @return Response
     * @throws RequestException
     */
    public function rebounds(): Response
    {
        return $this->call('rebound');
    }

}