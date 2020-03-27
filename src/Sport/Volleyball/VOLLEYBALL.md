## Volleyball API Endpoints - [Offical Docs](https://www.broadage.com/developers/volleyball-api/)

```php
$volleyball = BroadAgeApi::volleyball();
```

#### Tournament

```php
$tournament = $volleyball->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/tournament-standings)

```php
$tournament->standings();
```

#### Match List

```php
$matchList = $volleyball->matchList(/* $date / null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/match-list-results)

```php
$matchList->results();
```

#### Team

```php
$team = $volleyball->team($teamId);
```

##### Schedule - [View Broadage Docs](https://www.broadage.com/developers/volleyball-api/team-schedule)

```php
$team->schedule();
```