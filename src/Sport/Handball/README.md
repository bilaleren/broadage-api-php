## Handball API Endpoints - [Offical Docs](https://www.broadage.com/developers/handball-api/)

```php
$handball = BroadAgeApi::handball();
```

#### Tournament

```php
$tournament = $handball->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/handball-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/handball-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/handball-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/handball-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/handball-api/tournament-standings)

```php
$tournament->standings();
```

#### Match List

```php
$matchList = $handball->matchList(/* $date | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/handball-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/handball-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/handball-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/handball-api/match-list-results)

```php
$matchList->results();
```

#### Team

```php
$team = $handball->team($teamId);
```

##### Schedule - [View Broadage Docs](https://www.broadage.com/developers/handball-api/team-schedule)

```php
$team->schedule();
```