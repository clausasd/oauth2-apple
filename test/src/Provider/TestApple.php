<?php

namespace Claus\OAuth2\Client\Test\Provider;

use Claus\OAuth2\Client\Provider\Apple;

/**
 * Class TestApple
 * @package Claus\OAuth2\Client\Test\Provider
 * @author Patrick Bußmann <patrick.bussmann@bussmann-it.de>
 */
class TestApple extends Apple
{
    /**
     * @return \Lcobucci\JWT\Signer\Key|null
     */
    public function getLocalKey()
    {
        return null;
    }
}
