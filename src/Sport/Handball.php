<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\Handball\Team;
use BroadAgeApi\Sport\Handball\MatchList;
use BroadAgeApi\Sport\Handball\Tournament;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class Handball {

    /**
     * @param int | null $tournamentId
     * @return Tournament
     */
    public function tournament(int $tournamentId = null) {
        return new Tournament($tournamentId);
    }

    /**
     * @param string | null $date
     * @return MatchList
     * @throws InvalidDateFormatException
     */
    public function matchList(string $date = null) {
        return new MatchList($date);
    }

    public function team(int $teamId) {
        return new Team($teamId);
    }

}