<?php

/*
 * This library is free software, and it is part of the Hola SDK project. Check LICENSE for details.
 *
 * (c) Pharaoh <hola@fr3on.info>
 */

namespace Hola\SDK;

/**
 * @package Hola\SDK
 */
interface TokenInterface
{
    /**
     * @return string
     */
    public function getToken();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return string
     */
    public function __toString();
}
