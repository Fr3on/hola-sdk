<?php

/*
 * This library is free software, and it is part of the Hola SDK project. Check LICENSE for details.
 *
 * (c) Pharaoh <hola@fr3on.info>
 */

namespace Hola\SDK\Exceptions;

/**
 * @package Hola\SDK\Exceptions
 */
class ListAccounts extends Authentication
{
    /**
     * @param string          $message
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $previous = null)
    {
        if (empty($message)) {
            $message = 'Failed to list user accounts';
        }

        parent::__construct($message, $previous);
    }
}
