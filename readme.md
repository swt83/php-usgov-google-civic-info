# Google Civic Information

A PHP package for working w/ the Google Civic Info API.

NOTE: The API is not very useful, as the data is not always available.

## Install

Normal install via Composer.

## Methods

The [API](https://developers.google.com/civic-information/docs/v2/elections) documentation is a little lacking, so here is a map of method names to make things easier:

** Election Data **

- ``elections``
- ``voterinfo``

** Representative Data **

Coming soon.

** Divisions Data **

Coming soon.

## Usage

Just call the desired method and pass arguments as a single array:

```php
$test = Travis\GoogleCivicInfo::elections(array(
    'key' => '<YOUR_GOOGLE_API_KEY>', // always required
));
```

Check the [API](https://developers.google.com/civic-information/docs/v2/elections) documentation for more information.

### Errors

Check the response object for an ``error`` value to detect errors.