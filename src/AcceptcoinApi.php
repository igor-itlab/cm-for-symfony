<?php

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AcceptcoinApi
{

    /**
     * @var EventDispatcherInterface|null
     */
    private $eventDispatcher;

    /**
     * @var ValidatorInterface|null
     */
    private $validator;

    /**
     * @var AnnotationReader
     */
    private $reader;

    public function __construct(EventDispatcherInterface $eventDispatcher = null, ValidatorInterface $validator=null)
    {
        $this->reader = new AnnotationReader();
        $this->eventDispatcher = $eventDispatcher;
        $this->validator = $validator;
    }




}