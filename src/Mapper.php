<?php

namespace App;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\ArrayCollection;
use ReflectionException;
use ReflectionMethod;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class Mapper
 * @package Acceptcoin
 * @method mapped(Response $response);
 */
abstract class Mapper
{

    private ApiResource $resource;
    private Serializer $serializer;
    private AnnotationReader $reader;

    public function __construct(ApiResource $resource)
    {
        $this->serializer = $this->initSerializer();
        $this->resource = $resource;
        $this->reader = new AnnotationReader();
    }

    /**
     * @return Serializer
     */
    private function initSerializer(): Serializer
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);
        $reflectionExtractor = new ReflectionExtractor();
        $phpDocExtractor = new PhpDocExtractor();
        $propertyTypeExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [
            new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter, null, $propertyTypeExtractor),
            new ArrayDenormalizer()
        ];

        return new Serializer($normalizers, $encoders);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws ReflectionException
     */
    public function __call($name, $arguments): ArrayCollection
    {
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 10);
        array_walk(
            $trace,
            static function ($value) use (&$func) {
                if (!isset($value['class'], $value['function'])) {
                    return;
                }
                if (is_subclass_of($value['class'], Request::class)) {
                    $func = $value['function'];
                }
            }
        );

        $result = $this->{$func}($arguments[0]);
        $annotation = $this->reader->getMethodAnnotation(new ReflectionMethod($this, $func), ResponseBy::class);
        if (!$annotation) {
            return new ArrayCollection($result);
        }

        try {
            $denormalized = $this->serializer->denormalize($result, $annotation->value . "[]", 'json');
        } catch (ExceptionInterface $e) {
            $result['error'] = $e->getMessage();
            return new ArrayCollection($result);
        }

        return new ArrayCollection($denormalized);
    }


}