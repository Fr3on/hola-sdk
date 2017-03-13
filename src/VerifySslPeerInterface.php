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
interface VerifySslPeerInterface
{
    /**
     * Return true if SSL peer will be verified.
     *
     * @return bool
     */
    public function getSslVerifyPeer();

    /**
     * Set if we should verify SSL peer (true by default).
     *
     * @param  bool  $value
     * @return $this
     */
    public function &setSslVerifyPeer($value);
}
