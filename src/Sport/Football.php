<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\Football\Match;
use BroadAgeApi\Sport\Football\MatchList;
use BroadAgeApi\Sport\Football\Tournament;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class Football {

    /**
     * @param int|null $tournamentId
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
     * @param int $matchId
     * @return Match
     */
    public function match(int $matchId) {
        return new Match($matchId);
    }

}