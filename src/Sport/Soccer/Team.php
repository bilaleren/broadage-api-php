<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class Team extends BroadAgeApiClient
{

    protected $baseURL = '/soccer/team/';

    public function __construct(int $teamId, ?int $tournamentId = null)
    {
        parent::__construct();

        $this->setTeamId($teamId);

        if (is_int($tournamentId))
            $this->setTournamentId($tournamentId);
    }

    /**
     * Provides the active season squads for teams.
     * @link https://www.broadage.com/developers/soccer-api/team-squad
     * @return Response
     * @throws RequestException
     */
    public function squad(): Response
    {
        return $this->call('squad');
    }

    /**
     * Provides the active season squads for teams with detailed statistics for players.
     * @link https://www.broadage.com/developers/soccer-api/team-squad-statistics
     * @return Response
     * @throws RequestException
     */
    public function squadStatistics(): Response
    {
        return $this->call('squad/stats');
    }

    /**
     * Provides the all match list of the team in the active season.
     * @link https://www.broadage.com/developers/soccer-api/team-schedule
     * @return Response
     * @throws RequestException
     */
    public function schedule(): Response
    {
        return $this->call('schedule');
    }

}