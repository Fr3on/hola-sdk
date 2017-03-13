# Hola SDK

This is a simple PHP library that makes communication with Hola easy.

## Installation

If you choose to install this application with Composer instead of pulling down the git repository you will need to add a composer.json file to the location you would like to pull the repository down to featuring:

```json
{
    "require": {
        "hola/hola-sdk": "^1.0"
    }
}
```
    
Run a `composer update` to install the package.

*Note*: If you used an older version of Hola API wrapper and loaded it using `dev-master`, lock it to version 1.0 by setting require statement to `^1.0` and calling `composer update`.

## Connecting to Hola Cloud Accounts

```php
<?php

require_once '/path/to/vendor/autoload.php';

// Provide name of your company, name of the app that you are developing, your email address and password.
$authenticator = new \Hola\SDK\Authenticator\Cloud('Name Inc', 'My Awesome Application', 'test@domain.com', 'hard to guess, easy to remember');

// Show all Hola and up account that this user has access to.
print_r($authenticator->getAccounts());

// Show user details (first name, last name and avatar URL).
print_r($authenticator->getUser());

// Issue a token for account #123456789.
$token = $authenticator->issueToken(123456789);

// Did we get it?
if ($token instanceof \Hola\SDK\TokenInterface) {
    print $token->getUrl() . "\n";
    print $token->getToken() . "\n";
} else {
    print "Invalid response\n";
    die();
}
```

## SSL problems?

If curl complains that SSL peer verification has failed, you can turn it off like this:

```php
// Cloud
$authenticator = new \Hola\SDK\Authenticator\Cloud('Name Inc', 'My Awesome Application', 'test@domain.com', 'hard to guess, easy to remember', false);
$authenticator->setSslVerifyPeer(false);
```

**Note:** Option to turn off SSL peer verification has been added in Hola SDK 1.0.0

## Constructing a client instance

Once we have our token, we can construct a client and make API calls:

```php
$client = new \Hola\SDK\Client($token);
```

Listing all lectures in section #65 is easy. Just call:

```php
$client->get('sections/65/lectures');
```

To create a lecture, simply send a POST request:

```php
try {
    $client->post('sections/65/lectures', [
      'name' => 'This is a lecture name',
      'assignee_id' => 48
    ]);
} catch(AppException $e) {
    print $e->getMessage() . '<br><br>';
    // var_dump($e->getServerResponse()); (need more info?)
}
```

To update a lecture, PUT request will be needed:

```php
try {
    $client->put('sections/65/lectures/123', [
        'name' => 'Updated named'
    ]);
} catch(AppException $e) {
    print $e->getMessage() . '<br><br>';
    // var_dump($e->getServerResponse()); (need more info?)
}
```

``post()`` and ``put()`` methods can take two arguments:

1. ``command`` (required) - API command,
3. ``variables`` - array of request variables (payload)

To remove a lecture, call:

```php
try {
    $client->delete('sections/65/lecture/123');
} catch(AppException $e) {
    print $e->getMessage() . '<br><br>';
    // var_dump($e->getServerResponse()); (need more info?)
}
```

``delete()`` method only requires ``command`` argument to be provided.

For full list of available API command, please check [Hola API documentation](https://developers.fr3on.info).
