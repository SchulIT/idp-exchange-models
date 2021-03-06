<?php

namespace SchulIT\IdpExchange\Response;

use JMS\Serializer\Annotation as Serializer;

class ValueAttribute extends AbstractAttribute {

    /**
     * @Serializer\Type("string")
     */
    public $value;
}