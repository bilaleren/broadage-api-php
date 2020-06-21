<?php

namespace BroadAgeApi\Sport\Baseball;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;
use BroadAgeApi\Exception\InvalidDateFormatException;
use function BroadAgeApi\verifyDate;

final class MatchList extends BroadAgeApiClient
{

    protected $baseURL = '/baseball/match/';

    /**
     * MatchList constructor.
     * @param string | null $date
     * @throws InvalidDateFormatException
     */
    public function __construct(?string $date = null)
    {
        parent::__construct();

        if (is_null($date))
            $date = date('d/m/Y');

        $date = verifyDate($date);

        $this->setDate($date);
    }

    /**
     * Provides the daily match list in active season and includes scheduled, live and finished matches.
     * @link https://www.broadage.com/developers/baseball-api/match-list-all
     * @return Response
     * @throws RequestException
     */
    public function all(): Response
    {
        return $this->call('list');
    }

    /**
     * Provides only the daily scheduled match list in active season.
     * @link https://www.broadage.com/developers/baseball-api/match-list-scheduled
     * @return Response
     * @throws RequestException
     */
    public function scheduled(): Response
    {
        return $this->call('list/scheduled');
    }

    /**
     * Provides only the daily live match list in active season.
     * @link https://www.broadage.com/developers/baseball-api/match-list-live
     * @return Response
     * @throws RequestException
     */
    public function live(): Response
    {
        return $this->call('list/live');
    }

    /**
     * Provides the daily results in active season.
     * @link https://www.broadage.com/developers/baseball-api/match-list-results
     * @return Response
     * @throws RequestException
     */
    public function results(): Response
    {
        return $this->call('list/results');
    }

}