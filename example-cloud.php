<?php

/*
 * This library is free software, and it is part of the Hola SDK project. Check LICENSE for details.
 *
 * (c) Pharaoh <hola@fr3on.info>
 */

require_once __DIR__ . '/vendor/autoload.php';

$authenticator = new \Hola\SDK\Authenticator\Cloud('ACME Inc', 'My Awesome Application', 'you@acmeinc.com', 'hard to guess, easy to remember');

// Show all Hola and up account that this user has access to
print_r($authenticator->getAccounts());

// Show user details (first name, last name and avatar URL)
print_r($authenticator->getUser());

// Issue a token for account #123456789
$token = $authenticator->issueToken(123456789);

if ($token instanceof \Hola\SDK\TokenInterface) {
    print $token->getUrl() . "\n";
    print $token->getToken() . "\n";
} else {
    print "Invalid response\n";
    die();
}

// Create a client instance
$client = new \Hola\SDK\Client($token);

// Make a request
print_r($client->get('sections')->getJson());
