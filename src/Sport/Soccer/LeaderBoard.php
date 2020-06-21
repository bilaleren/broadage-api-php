<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class LeaderBoard extends BroadAgeApiClient
{

    protected $baseURL = '/soccer/tournament/leaderboard/';

    public function __construct(int $tournamentId)
    {
        parent::__construct();

        $this->setTournamentId($tournamentId);
    }

    /**
     * Goals endpoint provides the top scorers of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-goals
     * @return Response
     * @throws RequestException
     */
    public function goals(): Response
    {
        return $this->call('goal');
    }

    /**
     * Assists endpoint provides the top assist makers of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-assists
     * @return Response
     * @throws RequestException
     */
    public function assists(): Response
    {
        return $this->call('assist');
    }

    /**
     * Provides the yellow card list of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-yellow-cards
     * @return Response
     * @throws RequestException
     */
    public function yellowCards(): Response
    {
        return $this->call('yellow');
    }

    /**
     * Provides the red card list of the tournaments.
     * @link https://www.broadage.com/developers/soccer-api/leaderboard-red-cards
     * @return Response
     * @throws RequestException
     */
    public function redCards(): Response
    {
        return $this->call('red');
    }

}