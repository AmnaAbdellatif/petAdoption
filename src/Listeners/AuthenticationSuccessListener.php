<?php

namespace App\Listeners;

use DateInterval;
use DateTime;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationSuccessResponse;
use Symfony\Component\HttpFoundation\Cookie;

class AuthenticationSuccessListener{
    private $jwtTokenTTL;

    private $cookieSecure = false;

    public function __construct($ttl)
    {
        $this->jwtTokenTTL = $ttl;
    }

    /**
     * This function is responsible for the authentication part
     *
     * @param AuthenticationSuccessEvent $event
     * @return JWTAuthenticationSuccessResponse
     */

    public function onAuthenticationSuccess(AuthenticationSuccessEvent $event): JWTAuthenticationSuccessResponse
    {
        /** @var JWTAuthenticationSuccessResponse $response */

        $response = $event->getResponse();
        $data = $event->getData();
        $tokenJWT = $data['token'];
        $event->setData($data);
        $response->headers->setCookie(new Cookie('BEARER',
            $tokenJWT, (
        new DateTime())->add(new \DateInterval('PT' .  $this->jwtTokenTTL . 'S'))
            , '/'
            , null,
            $this->cookieSecure
        )
        );

        return $response;

    }
}