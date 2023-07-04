<?php

namespace AcceptcoinApi\Security;

class Signature
{

    /**
     * @param string $data
     * @param string $secret
     * @return string
     */
    public static function createSignature(string $data, string $secret): string
    {
        return hash_hmac('sha256', base64_encode($data), $secret);
    }

    /**
     * @param string $data
     * @param string $secret
     * @param string $signature
     * @return bool
     */
    public static function check(string $data, string $secret, string $signature): bool
    {
        return self::createSignature($data, $secret) === $signature;
    }
}