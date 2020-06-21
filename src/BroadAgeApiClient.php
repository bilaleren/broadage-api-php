<?php

namespace BroadAgeApi;

use ReflectionClass;
use GuzzleHttp\Client;
use BroadAgeApi\Util\Config;
use InvalidArgumentException;
use BroadAgeApi\Util\Response;
use BroadAgeApi\Util\Languages;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TransferException;
use BroadAgeApi\Exception\RequestException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\TooManyRedirectsException;

abstract class BroadAgeApiClient
{

    /**
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    protected $query = [];

    /**
     * @var string | null
     */
    protected $baseURL = null;

    public function __construct()
    {
        $accept = Config::getAccept();
        $baseURL = Config::getBaseUrl();
        $languageId = Config::getLanguageId();
        $subscriptionKey = Config::getSubscriptionKey();
        $languageCodes = array_values(
            (new ReflectionClass(Languages::class))
                ->getConstants()
        );

        if (!filter_var($baseURL, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(
                'Invalid Base URL provided. Base URL must be in link format.', 400
            );
        }

        if (empty($subscriptionKey) || !is_string($subscriptionKey)) {
            throw new InvalidArgumentException(
                'Invalid Subscription Key provided. Subscription Key must be a string.', 400
            );
        }

        if (!in_array($languageId, $languageCodes, true)) {
            throw new InvalidArgumentException(
                'Language code is not supported. Supported language codes: ' . implode(', ', $languageCodes), 400
            );
        }

        if (!in_array($accept, $accepts = ['application/json', 'application/xml'])) {
            throw new InvalidArgumentException(
                'Output type is not supported. Supported output types: ' . implode(', ', $accepts), 400
            );
        }

        $defaults = [
            'base_uri' => $baseURL . $this->baseURL,
            'timeout' => 5.0,
            'headers' => [
                'Accept' => $accept,
                'languageId' => $languageId,
                'Ocp-Apim-Subscription-Key' => $subscriptionKey
            ]
        ];

        $config = array_replace_recursive(
            $defaults,
            Config::getRequestOptions()
        );

        $this->client = new Client($config);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return ResponseInterface
     * @throws RequestException
     */
    protected function request(string $method, string $uri, array $options = []): ResponseInterface
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (TooManyRedirectsException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        } catch (ClientException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        } catch (ServerException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        } catch (BadResponseException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        } catch (TransferException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        } catch (GuzzleException $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        }

    }

    /**
     * @param int $tournamentId
     */
    protected function setTournamentId(int $tournamentId): void
    {
        $this->query['tournamentId'] = $tournamentId;
    }

    /**
     * @param int $matchId
     */
    protected function setMatchId(int $matchId): void
    {
        $this->query['matchId'] = $matchId;
    }

    /**
     * @param int $teamId
     */
    protected function setTeamId(int $teamId): void
    {
        $this->query['teamId'] = $teamId;
    }

    /**
     * @param string $date
     */
    protected function setDate(string $date): void
    {
        $this->query['date'] = $date;
    }

    /**
     * @param string $uri
     * @param array $options
     * @return Response
     * @throws RequestException
     */
    protected function call(string $uri, array $options = []): Response
    {
        return new Response(
            $this->request('GET', $uri, array_replace_recursive([
                'query' => $this->query
            ], $options))
        );
    }

}