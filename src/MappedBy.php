<?php


namespace AcceptcoinApi;

/**
 * Class MappedBy
 * @package Acceptcoin
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes({
 *   @Attribute("value", type = "string"),
 * })
 */
final class MappedBy
{
    public string $value;
}
