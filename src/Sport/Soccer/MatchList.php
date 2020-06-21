<?php

namespace BroadAgeApi\Sport\Soccer;

use BroadAgeApi\Util\Response;
use BroadAgeApi\BroadAgeApiClient;
use BroadAgeApi\Exception\RequestException;
use BroadAgeApi\Exception\InvalidDateFormatException;
use function BroadAgeApi\verifyDate;

final class MatchList extends BroadAgeApiClient
{

    protected $baseURL = '/soccer/match/';

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
     * Provides the daily match list in active season.
     * @link https://www.broadage.com/developers/soccer-api/match-list-all
     * @return Response
     * @throws RequestException
     */
    public function all(): Response
    {
        return $this->call('list');
    }

    /**
     * Provides “Scheduled” (which means “Not Started”) match list of the day.
     * @link https://www.broadage.com/developers/soccer-api/match-list-scheduled
     * @return Response
     * @throws RequestException
     */
    public function scheduled(): Response
    {
        return $this->call('list/scheduled');
    }

    /**
     * Provides “Live” match list of the day.
     * @link https://www.broadage.com/developers/soccer-api/match-list-live
     * @return Response
     * @throws RequestException
     */
    public function live(): Response
    {
        return $this->call('list/live');
    }

    /**
     * Provides the daily results in active season.
     * @link https://www.broadage.com/developers/soccer-api/match-list-results
     * @return Response
     * @throws RequestException
     */
    public function results(): Response
    {
        return $this->call('list/results');
    }

    /**
     * Provides the daily list of injured and suspended players match-by-match.
     * @link https://www.broadage.com/developers/soccer-api/missing-players-list
     * @return Response
     * @throws RequestException
     */
    public function missingPlayers(): Response
    {
        return $this->call('missing-players-list');
    }

}