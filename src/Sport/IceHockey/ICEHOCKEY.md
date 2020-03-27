## Ice Hockey API Endpoints - [Offical Docs](https://www.broadage.com/developers/ice-hockey-api/)

```php
$iceHockey = BroadAgeApi::iceHockey();
```

#### Tournament

```php
$tournament = $iceHockey->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/tournament-standings)

```php
$tournament->standings();
```

#### Match List

```php
$matchList = $iceHockey->matchList(/* $date / null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/ice-hockey-api/match-list-results)

```php
$matchList->results();
```