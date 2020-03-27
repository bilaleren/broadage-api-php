<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\Volleyball\Team;
use BroadAgeApi\Sport\Volleyball\MatchList;
use BroadAgeApi\Sport\Volleyball\Tournament;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class Volleyball {

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

    /**
     * @param int $teamId
     * @return Team
     */
    public function team(int $teamId) {
        return new Team($teamId);
    }

}