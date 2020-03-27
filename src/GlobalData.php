<?php

namespace BroadAgeApi;

use BroadAgeApi\Exception\ApiRequestException;

final class GlobalData extends BroadAgeApiClient {

    protected $baseURL = '/global/';

    /**
     * Provides the list of the sports which are supported in the global coverage.
     * @link https://www.broadage.com/developers/global-api/sports-list
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function sportsList() {
        return $this->call('sport/list');
    }

    /**
     * Provides the list of the countries which belong to the tournaments.
     * @link https://www.broadage.com/developers/global-api/country-list
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function countryList() {
        return $this->call('country/list');
    }

    /**
     * Provides the list of the global rounds for the sports.
     * @link https://www.broadage.com/developers/global-api/round-list
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function roundList() {
        return $this->call('round/list');
    }

    /**
     * Provides the list of the global statuses for the sports.
     * @link https://www.broadage.com/developers/global-api/status-list
     * @return array | object | string
     * @throws ApiRequestException
     */
    public function statusList() {
        return $this->call('status/list');
    }

}