<?php 
/*
 * UberAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 05/11/2016
 */

namespace UberAPILib\Models;

use JsonSerializable;

/**
 * Request Map Response
 */
class RequestMapResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps request_id
     * @var string $requestId public property
     */
    public $requestId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $href public property
     */
    public $href;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $requestId    Initialization value for the property $this->requestId 
	 * @param   string            $href         Initialization value for the property $this->href      
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->requestId  = func_get_arg(0);
            $this->href       = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['request_id'] = $this->requestId;
        $json['href']       = $this->href;

        return $json;
    }
}