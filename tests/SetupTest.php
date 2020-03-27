<?php

namespace BroadAgeApi\Test;

use Exception;
use BroadAgeApi\BroadAgeApi;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SetupTest extends TestCase {

    /**
     * @test
     * @throws Exception
     */
    public function testInvalidSubscriptionKey() {

        BroadAgeApi::init([
            'baseURL' => 'https://test-base-url.com',
            'subscriptionKey' => ''
        ]);

        $this->throwException(new InvalidArgumentException);

        BroadAgeApi::soccer()->tournament();

        $this->assertTrue(true);
    }

    /**
     * @test
     * @throws Exception
     */
    public function testInvalidBaseURL() {

        BroadAgeApi::init([
            'baseURL' => '',
            'subscriptionKey' => 'test-subscription-key'
        ]);

        $this->throwException(new InvalidArgumentException);

        BroadAgeApi::soccer()->tournament();

        $this->assertTrue(true);
    }

    /**
     * @test
     * @throws Exception
     */
    public function testInvalidLanguageId() {

        BroadAgeApi::init([
            'languageId' => null,
            'baseURL' => 'https://test-base-url.com',
            'subscriptionKey' => 'test-subscription-key'
        ]);

        $this->throwException(new InvalidArgumentException);

        BroadAgeApi::soccer()->tournament();

        $this->assertTrue(true);
    }

}