<?php

namespace BroadAgeApi\Sport\Baseball;

use InvalidArgumentException;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\ApiRequestException;

final class Tournament extends BroadAgeApiClient {

    protected $baseURL = '/baseball/tournament/';

    public function __construct(int $tournamentId = null) {
        parent::__construct();

        if (is_int($tournamentId))
            $this->setTournamentId($tournamentId);
    }

    /**
     * Provides the list of the tournaments which are supported in your global coverage.
     * @link https://www.broadage.com/developers/baseball-api/tournament-list
     * @return object | array | string
     * @throws ApiRequestException
     */
    public function all() {
        return $this->call('list');
    }

    /**
     * Provides the information about tournaments. Names, Season, Stage(s).
     * @link https://www.broadage.com/developers/baseball-api/tournament-info
     * @return object | array | string
     * @throws ApiRequestException
     * @throws InvalidArgumentException
     */
    public function info() {
        if (!isset($this->query['tournamentId']))
            throw new InvalidArgumentException('Invalid Tournament ID provided.', 400);

        return $this->call('info');
    }

    /**
     * Provides the information about teams which are in the tournament.
     * @link https://www.broadage.com/developers/baseball-api/tournament-teams
     * @return object | array | string
     * @throws ApiRequestException
     * @throws InvalidArgumentException
     */
    public function teams() {
        if (!isset($this->query['tournamentId']))
            throw new InvalidArgumentException('Invalid Tournament ID provided.', 400);

        return $this->call('teams');
    }

    /**
     * Provides the match list of the tournaments and works only for active season.
     * @link https://www.broadage.com/developers/baseball-api/tournament-fixture
     * @return object | array | string
     * @throws ApiRequestException
     * @throws InvalidArgumentException
     */
    public function fixture() {
        if (!isset($this->query['tournamentId']))
            throw new InvalidArgumentException('Invalid Tournament ID provided.', 400);

        return $this->call('fixture');
    }

    /**
     * Standings endpoint serves league tables in overall, home and away formats.
     * @link https://www.broadage.com/developers/baseball-api/tournament-standings
     * @return object | array | string
     * @throws ApiRequestException
     * @throws InvalidArgumentException
     */
    public function standings() {
        if (!isset($this->query['tournamentId']))
            throw new InvalidArgumentException('Invalid Tournament ID provided.', 400);

        return $this->call('standings');
    }

}