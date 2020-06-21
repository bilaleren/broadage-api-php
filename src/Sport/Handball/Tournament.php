<?php

namespace BroadAgeApi\Sport\Handball;

use BroadAgeApi\Util\Response;
use InvalidArgumentException;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Helper\CheckArgumentTrait;
use BroadAgeApi\Exception\RequestException;

final class Tournament extends BroadAgeApiClient
{

    use CheckArgumentTrait;

    protected $baseURL = '/handball/tournament/';

    public function __construct(?int $tournamentId = null)
    {
        parent::__construct();

        if (is_int($tournamentId))
            $this->setTournamentId($tournamentId);
    }

    /**
     * Provides the list of the tournaments which are supported in your global coverage.
     * @link https://www.broadage.com/developers/handball-api/tournament-list
     * @return Response
     * @throws RequestException
     */
    public function all(): Response
    {
        return $this->call('list');
    }

    /**
     * Provides the information about tournaments. Names, Season, Stage(s).
     * @link https://www.broadage.com/developers/handball-api/tournament-info
     * @return Response
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function info(): Response
    {
        $this->checkTournamentId();
        return $this->call('info');
    }

    /**
     * Provides the information about teams which are in the tournament.
     * @link https://www.broadage.com/developers/handball-api/tournament-teams
     * @return Response
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function teams(): Response
    {
        $this->checkTournamentId();
        return $this->call('teams');
    }

    /**
     * Provides the match list of the tournaments and works only for active season.
     * @link https://www.broadage.com/developers/handball-api/tournament-fixture
     * @return Response
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function fixture(): Response
    {
        $this->checkTournamentId();
        return $this->call('fixture');
    }

    /**
     * Standings endpoint serves league tables in overall, home and away formats.
     * @link https://www.broadage.com/developers/handball-api/tournament-standings
     * @return Response
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function standings(): Response
    {
        $this->checkTournamentId();
        return $this->call('standings');
    }

}