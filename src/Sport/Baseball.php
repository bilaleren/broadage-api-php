<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\Baseball\MatchList;
use BroadAgeApi\Sport\Baseball\Tournament;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class Baseball
{

    /**
     * @param int | null $tournamentId
     * @return Tournament
     */
    public function tournament(?int $tournamentId = null): Tournament
    {
        return new Tournament($tournamentId);
    }

    /**
     * @param string | null $date
     * @return MatchList
     * @throws InvalidDateFormatException
     */
    public function matchList(?string $date = null): MatchList
    {
        return new MatchList($date);
    }

}