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
interface AuthenticatorInterface extends VerifySslPeerInterface
{
    /**
     * @return string
     */
    public function getYourOrgName();

    /**
     * @param  string $value
     * @return $this
     */
    public function &setYourOrgName($value);

    /**
     * @return string
     */
    public function getYourAppName();

    /**
     * @param  string $value
     * @return $this
     */
    public function &setYourAppName($value);

    /**
     * @return string
     */
    public function getEmailAddress();

    /**
     * @param  string $value
     * @return $this
     */
    public function &setEmailAddress($value);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param  string $value
     * @return $this
     */
    public function &setPassword($value);

    /**
     * @param  mixed[]        ...$arguments
     * @return TokenInterface
     */
    public function issueToken(...$arguments);
}
