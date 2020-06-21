<?php

namespace BroadAgeApi\Sport\Handball;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;

final class Team extends BroadAgeApiClient
{

    protected $baseURL = '/handball/team/';

    public function __construct(int $teamId)
    {
        parent::__construct();

        $this->setTeamId($teamId);
    }

    /**
     * Provides the all match list of the team in the active season.
     * @link https://www.broadage.com/developers/handball-api/team-schedule
     * @return Response
     * @throws RequestException
     */
    public function schedule(): Response
    {
        return $this->call('schedule');
    }

}