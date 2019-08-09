# Google Civic Information

A PHP package for working w/ the Google Civic Info API.

## Install

Normal install via Composer.

## Usage

Just call the desired method and pass arguments as a single array:

```php
use Travis\GoogleCivicInfo as Civic;

// show all elections in the system
$test = Civic::elections([
    'key' => '<YOUR_GOOGLE_API_KEY>', // always required
]);

// show election info based on address
$test = Civic::voterinfo([
    'key' => '<YOUR_GOOGLE_API_KEY>', // always required
    'address' => '<YOUR_MAILING_ADDRESS>',
]);

// show representative information based on address
$test = Civic::representatives([
    'key' => '<YOUR_GOOGLE_API_KEY>', // always required
    'address' => '<YOUR_MAILING_ADDRESS>',
]);
```

Check the [API](https://developers.google.com/civic-information/docs/v2/elections) documentation for more information.

## Issues

From what I can gather:

- They will only provide useful election data a month before the election.
- They will only provide election data for cities of population 250K or more.

See the [data guidelines](https://developers.google.com/civic-information/docs/data_guidelines) for more information.