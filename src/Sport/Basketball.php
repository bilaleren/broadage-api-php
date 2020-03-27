<?php

namespace BroadAgeApi\Sport;

use BroadAgeApi\Sport\Basketball\Team;
use BroadAgeApi\Sport\Basketball\Match;
use BroadAgeApi\Sport\Basketball\MatchList;
use BroadAgeApi\Sport\Basketball\Tournament;
use BroadAgeApi\Sport\Basketball\LeaderBoard;
use BroadAgeApi\Exception\InvalidDateFormatException;

final class Basketball {

    /**
     * @param int | null $tournamentId
     * @return Tournament
     */
    public function tournament(int $tournamentId = null) {
        return new Tournament($tournamentId);
    }

    /**
     * @param int $tournamentId
     * @return LeaderBoard
     */
    public function leaderBoard(int $tournamentId) {
        return new LeaderBoard($tournamentId);
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

    /**
     * @param int $teamId
     * @param int | null $tournamentId
     * @return Team
     */
    public function team(int $teamId, int $tournamentId = null) {
        return new Team($teamId, $tournamentId);
    }

}