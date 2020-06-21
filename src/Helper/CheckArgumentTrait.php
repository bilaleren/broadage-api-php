<?php

namespace BroadAgeApi\Helper;

use InvalidArgumentException;

trait CheckArgumentTrait
{

    /**
     * @throws InvalidArgumentException
     * @return void
     */
    protected function checkTournamentId(): void
    {
        if (!isset($this->query['tournamentId']) || !is_int($this->query['tournamentId']))
            throw new InvalidArgumentException('Invalid Tournament ID provided.', 400);
    }

}