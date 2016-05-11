<?php 
/*
 * UberAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 05/11/2016
 */

namespace UberAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ErrorBase implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $meta public property
     */
    public $meta;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $errors public property
     */
    public $errors;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $meta     Initialization value for the property $this->meta  
	 * @param   array             $errors   Initialization value for the property $this->errors
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->meta   = func_get_arg(0);
            $this->errors = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['meta']   = $this->meta;
        $json['errors'] = $this->errors;

        return $json;
    }
}