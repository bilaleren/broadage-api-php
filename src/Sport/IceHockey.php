<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\IceHockey\MatchList;
use BroadAgeApi\Sport\IceHockey\Tournament;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class IceHockey {

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

}