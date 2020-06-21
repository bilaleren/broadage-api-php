<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\Handball\Team;
use BroadAgeApi\Sport\Handball\MatchList;
use BroadAgeApi\Sport\Handball\Tournament;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class Handball
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

    /**
     * @param int $teamId
     * @return Team
     */
    public function team(int $teamId): Team
    {
        return new Team($teamId);
    }

}