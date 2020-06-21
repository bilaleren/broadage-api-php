## Football API Endpoints - [Offical Docs](https://www.broadage.com/developers/football-api/)

```php
$football = BroadAgeApi::football();
```

#### Tournament

```php
$tournament = $football->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/football-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/football-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/football-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/football-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/football-api/tournament-standings)

```php
$tournament->standings();
```

#### Match List

```php
$matchList = $football->matchList(/* $date | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-list-results)

```php
$matchList->results();
```

#### Match

```php
$match = $football->match($matchId);
```

##### Box Score - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-boxscore)

```php
$match->boxScore();
```

##### Key Statistics - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-key-statistics)

```php
$match->keyStatistics();
   ```

##### Team Statistics - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-team-statistics)

```php
$match->teamStatistics();
```

##### Play by Play - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-play-by-play)

```php
$match->gameLeaders();
```

##### Game Leaders - [View Broadage Docs](https://www.broadage.com/developers/football-api/match-game-leaders)

```php
$match->gameLeaders();
```