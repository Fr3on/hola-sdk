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
interface ResponseInterface
{
    /**
     * Return HTTP code.
     *
     * @return int
     */
    public function getHttpCode();

    /**
     * Return content type.
     *
     * @return string
     */
    public function getContentType();

    /**
     * Return raw response body.
     *
     * @return string
     */
    public function getBody();

    /**
     * Return true if response is JSON.
     *
     * @return bool
     */
    public function isJson();

    /**
     * Return response body as JSON (when applicable).
     *
     * @return mixed
     */
    public function getJson();
}
