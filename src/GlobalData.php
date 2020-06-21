<?php

namespace BroadAgeApi;

use BroadAgeApi\Util\Response;
use BroadAgeApi\Exception\RequestException;

final class GlobalData extends BroadAgeApiClient
{

    protected $baseURL = '/global/';

    /**
     * Provides the list of the sports which are supported in the global coverage.
     * @link https://www.broadage.com/developers/global-api/sports-list
     * @return Response
     * @throws RequestException
     */
    public function sportsList(): Response
    {
        return $this->call('sport/list');
    }

    /**
     * Provides the list of the countries which belong to the tournaments.
     * @link https://www.broadage.com/developers/global-api/country-list
     * @return Response
     * @throws RequestException
     */
    public function countryList(): Response
    {
        return $this->call('country/list');
    }

    /**
     * Provides the list of the global rounds for the sports.
     * @link https://www.broadage.com/developers/global-api/round-list
     * @return Response
     * @throws RequestException
     */
    public function roundList(): Response
    {
        return $this->call('round/list');
    }

    /**
     * Provides the list of the global statuses for the sports.
     * @link https://www.broadage.com/developers/global-api/status-list
     * @return Response
     * @throws RequestException
     */
    public function statusList(): Response
    {
        return $this->call('status/list');
    }

}