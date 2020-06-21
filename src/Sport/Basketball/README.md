## Basketball API Endpoints - [Offical Docs](https://www.broadage.com/developers/basketball-api/)

```php
$basketball = BroadAgeApi::basketball();
```

#### Tournament

```php
$tournament = $basketball->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/tournament-standings)

```php
$tournament->standings();
```

#### Leaderboard

```php
$leaderBoard = $basketball->leaderBoard($tournamentId);
```

##### Points - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/leaderboard-points)

```php
$leaderBoard->points();
```

##### Assists - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/leaderboard-assists)

```php
$leaderBoard->assists();
```

##### Rebounds - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/leaderboard-rebounds)

```php
$leaderBoard->rebounds();
```

#### Match List

```php
$matchList = $basketball->matchList(/* $date | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-list-results)

```php
$matchList->results();
```

#### Match

```php
$match = $basketball->match($matchId);
```

##### Summary - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-summary)

```php
$match->summary();
```

##### Box Score - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-boxscore)

```php
$match->boxScore();
```

##### Statistics - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-statistics)

```php
$match->statistics();
   ```

##### Play by Play - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-play-by-play)

```php
$match->playByPlay();
```

##### Game Leaders - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/match-game-leaders)

```php
$match->gameLeaders();
```

#### Team

```php
$team = $basketball->team($teamId, /* $tournamentId | null */);
```

##### Squad - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/team-squad)

```php
$team->squad();
```

##### Schedule - [View Broadage Docs](https://www.broadage.com/developers/basketball-api/team-schedule)

```php
$team->schedule();
```