<?php

/*
 * This library is free software, and it is part of the Hola SDK project. Check LICENSE for details.
 *
 * (c) Pharaoh <hola@fr3on.info>
 */

namespace Hola\SDK\Exceptions;

use Hola\SDK\Exception;

/**
 * HTTP API call exception.
 */
class FileNotReadable extends Exception
{
    /**
     * Construct the new exception instance.
     *
     * @param string $path
     */
    public function __construct($path)
    {
        if (empty($message)) {
            $message = "File '$path' is not readable";
        }

        parent::__construct($message);
    }
}
