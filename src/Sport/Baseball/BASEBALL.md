## Baseball API Endpoints - [Offical Docs](https://www.broadage.com/developers/baseball-api/)

```php
$baseball = BroadAgeApi::baseball();
```

#### Tournament

```php
$tournament = $baseball->tournament(/* $tournamentId | null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/tournament-list)

```php
$tournament->all();
```

##### Info - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/tournament-info)

```php
$tournament->info();
```

##### Teams - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/tournament-teams)

```php
$tournament->teams();
```

##### Fixture - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/tournament-fixture)

```php
$tournament->fixture();
```

##### Standings - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/tournament-standings)

```php
$tournament->standings();
```

#### Match List

```php
$matchList = $baseball->matchList(/* $date / null */);
```

##### All - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/match-list-all)

```php
$matchList->all();
```

##### Scheduled - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/match-list-scheduled)

```php
$matchList->scheduled();
```

##### Live - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/match-list-live)

```php
$matchList->live();
```

##### Results - [View Broadage Docs](https://www.broadage.com/developers/baseball-api/match-list-results)

```php
$matchList->results();
```