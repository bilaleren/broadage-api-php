<?php

namespace BroadAgeApi\Sport\Basketball;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class Team extends BroadAgeApiClient
{

    protected $baseURL = '/basketball/team/';

    public function __construct(int $teamId, ?int $tournamentId = null)
    {
        parent::__construct();

        $this->setTeamId($teamId);

        if (is_int($tournamentId))
            $this->setTournamentId($tournamentId);
    }

    /**
     * Provides the active season squads for teams.
     * @link https://www.broadage.com/developers/basketball-api/team-squad
     * @return Response
     * @throws RequestException
     */
    public function squad(): Response
    {
        return $this->call('squad');
    }

    /**
     * Provides the all match list of the team in the active season.
     * @link https://www.broadage.com/developers/basketball-api/team-schedule
     * @return Response
     * @throws RequestException
     */
    public function schedule(): Response
    {
        return $this->call('schedule');
    }

}