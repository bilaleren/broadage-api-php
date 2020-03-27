## Soccer API Endpoints - [Offical Docs](https://www.broadage.com/developers/soccer-api/)

```php
$soccer = BroadAgeApi::soccer();
```

#### Tournament

```php
$tournament = $soccer->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/tournament-standings)

```php
$tournament->standings();
```

#### Leaderboard

```php
$leaderBoard = $soccer->leaderBoard($tournamentId);
```

##### Goals - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/leaderboard-goals)

```php
$leaderBoard->goals();
```

##### Assists - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/leaderboard-assists)

```php
$leaderBoard->assists();
```

##### Yellow Cards - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/leaderboard-yellow-cards)

```php
$leaderBoard->yellowCards();
```

##### Red Cards - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/leaderboard-red-cards)

```php
$leaderBoard->redCards();
```

#### Match List

```php
$matchList = $soccer->matchList(/* $date / null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-list-results)

```php
$matchList->results();
```

##### Missing Players - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/missing-players-list)

```php
$matchList->missingPlayers();
```

#### Match

```php
$match = $soccer->match($matchId);
```

##### Summary - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-summary)

```php
$match->summary();
```

##### Lineup - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-lineup)

```php
$match->lineup();
```

##### Statistics - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-statistics)

```php
$match->statistics();
```

##### Commentary - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-commentary)

```php
$match->commentary();
```

##### Event All - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-events-all)

```php
$match->eventAll();
```

##### Event Basic - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/match-events-basic)

```php
$match->eventBasic();
```

#### Team

```php
$team = $soccer->team($teamId, /* $tournamentId | null */);
```

##### Squad - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/team-squad)

```php
$team->squad();
```

##### Squad with Statistics - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/team-squad-statistics)

```php
$team->squadStatistics();
```

##### Schedule - [View Broadage Docs](https://www.broadage.com/developers/soccer-api/team-schedule)

```php
$team->schedule();
```