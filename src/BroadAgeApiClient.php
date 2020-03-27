<?php

namespace BroadAgeApi;

use GuzzleHttp\Client;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TransferException;
use BroadAgeApi\Exception\ApiRequestException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\TooManyRedirectsException;

abstract class BroadAgeApiClient {

    /**
     * @var Client
     */
    private $client;

    protected $query = [];

    protected $baseURL = null;

    public function __construct() {
        $baseURL = BroadAgeApiOptions::getBaseUrl();
        $languageId = BroadAgeApiOptions::getLanguageId();
        $subscriptionKey = BroadAgeApiOptions::getSubscriptionKey();

        if (empty($subscriptionKey) || !is_string($subscriptionKey)) {
            throw new InvalidArgumentException(
                'Invalid Subscription Key provided. Subscription Key must be a string.', 400
            );
        }

        if (!filter_var($baseURL, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(
                'Invalid Base URL provided. Base URL must be in link format.', 400
            );
        }

        if (empty($languageId) || !is_int($languageId)) {
            throw new InvalidArgumentException(
                'Invalid Language ID provided. Language ID must be a number.', 400
            );
        }

        $defaults = [
            'base_uri' => BroadAgeApiOptions::getBaseUrl() . $this->baseURL,
            'timeout' => 5.0,
            'headers' => [
                'Accept' => BroadAgeApiOptions::getOption('accept'),
                'languageId' => $languageId,
                'Ocp-Apim-Subscription-Key' => $subscriptionKey
            ]
        ];

        $config = array_replace_recursive($defaults, BroadAgeApiOptions::getRequestOptions());

        $this->client = new Client($config);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return ResponseInterface
     * @throws ApiRequestException
     */
    protected function request(
        string $method,
        string $uri,
        array $options = [ ]
    ) {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (TooManyRedirectsException $e) {
            throw new ApiRequestException($e->getMessage(), $e->getCode());
        } catch (ClientException $e) {
            throw new ApiRequestException($e->getMessage(), $e->getCode());
        } catch (ServerException $e) {
            throw new ApiRequestException($e->getMessage(), $e->getCode());
        } catch (BadResponseException $e) {
            throw new ApiRequestException($e->getMessage(), $e->getCode());
        } catch (TransferException $e) {
            throw new ApiRequestException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param int $tournamentId
     */
    protected function setTournamentId(int $tournamentId) {
        $this->query['tournamentId'] = $tournamentId;
    }

    /**
     * @param int $matchId
     */
    protected function setMatchId(int $matchId) {
        $this->query['matchId'] = $matchId;
    }

    /**
     * @param int $teamId
     */
    protected function setTeamId(int $teamId) {
        $this->query['teamId'] = $teamId;
    }

    /**
     * @param string $date
     */
    protected function setDate(string $date) {
        $this->query['date'] = $date;
    }

    /**
     * @param string $uri
     * @param array $options
     * @return object | array | string
     * @throws ApiRequestException
     */
    protected function call(string $uri, array $options = []) {
        $options = array_replace_recursive([
            'query' => $this->query
        ], $options);

        $body = $this->request('GET', $uri, $options)
            ->getBody();

        $body->rewind();

        $content = $body->getContents();

        $accept = BroadAgeApiOptions::getOption('accept');

        return ($accept === 'application/xml' ?
            $content : json_decode($content));
    }

}