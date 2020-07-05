<?php

namespace SchulIT\IdpExchange\Response;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Serializer\Discriminator(field="type", map={"single": "SchulIT\IdpExchange\Response\ValueAttribute", "multiple": "SchulIT\IdpExchange\Response\ValuesAttribute"})
 */
abstract class AbstractAttribute {
    /**
     * @Serializer\Type("string")
     * @Assert\NotBlank()
     */
    public $name;
}