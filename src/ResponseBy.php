<?php

namespace AcceptcoinApi;

/**
 * Class ResponseBy
 * @package ApiClient
 * @Annotation
 * @Target({"METHOD"})
 * @Attributes({
 *   @Attribute("value", type = "string"),
 * })
 */
class ResponseBy
{
    public string $value;

}