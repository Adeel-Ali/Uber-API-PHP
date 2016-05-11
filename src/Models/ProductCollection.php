<?php 
/*
 * UberAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 05/11/2016
 */

namespace UberAPILib\Models;

use JsonSerializable;

/**
 * Collection of products
 */
class ProductCollection implements JsonSerializable {
    /**
     * List of products
     * @required
     * @var array $products public property
     */
    public $products;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   array             $products   Initialization value for the property $this->products
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->products = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['products'] = $this->products;

        return $json;
    }
}