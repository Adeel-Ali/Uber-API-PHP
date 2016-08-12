<?php 
/*
 * UberAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 08/12/2016
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
     * @var string $href public property
     */
    public $href;

    /**
     * @todo Write general description for this property
     * @required
     * @maps request_id
     * @var string $requestId public property
     */
    public $requestId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $href         Initialization value for the property $this->href      
     * @param   string            $requestId    Initialization value for the property $this->requestId 
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->href       = func_get_arg(0);
            $this->requestId  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['href']       = $this->href;
        $json['request_id'] = $this->requestId;

        return $json;
    }
}