<?php


namespace AcceptcoinApi\Services;


/**
 * Class MethodEnum
 * @package ApiClient\Services
 * @method static POST()
 * @method static GET()
 * @method static PUT()
 * @method static PATH()
 * @method static DELETE()
 */
class Method
{
    protected static string $POST = 'POST';
    protected static string $GET = 'GET';
    protected static string $PUT = 'PUT';
    protected static string $PATCH = 'PATCH';
    protected static string $DELETE = 'DELETE';

    /**
     * @var string
     */
    public string $value;

    /**
     * Method constructor.
     */
    protected function __construct()
    {
    }

    /**
     * @param $name
     * @param $arguments
     * @return Method
     */
    public static function __callStatic($name, $arguments): Method
    {
        $instance = new self();
        $properties = get_class_vars(self::class);
        if (!array_key_exists($name, $properties)) {
            $instance->value = $properties[self::$POST];
        } else {
            $instance->value = $properties[$name];
        }

        return $instance;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
