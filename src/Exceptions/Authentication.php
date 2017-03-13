<?php

/*
 * This library is free software, and it is part of the Hola SDK project. Check LICENSE for details.
 *
 * (c) Pharaoh <hola@fr3on.info>
 */

namespace Hola\SDK\Exceptions;

use Hola\SDK\Exception;

/**
 * @package Hola\SDK\Exceptions
 */
class Authentication extends Exception
{
    /**
     * @param string          $message
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $previous = null)
    {
        if (empty($message)) {
            $message = 'Failed to authenticate';
        }

        parent::__construct($message, 0, $previous);
    }
}
