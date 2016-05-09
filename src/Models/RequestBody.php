<?php 
/*
 * UberAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 05/09/2016
 */

namespace UberAPILib\Models;

use JsonSerializable;

/**
 * Request body containing post body parameters
 */
class RequestBody implements JsonSerializable {
    /**
     * The unique ID of the product being requested.
     * @required
     * @maps product_id
     * @var string $productId public property
     */
    public $productId;

    /**
     * The beginning or "pickup" latitude.
     * @required
     * @maps start_latitude
     * @var double $startLatitude public property
     */
    public $startLatitude;

    /**
     * The beginning or "pickup" longitude.
     * @required
     * @maps start_longitude
     * @var double $startLongitude public property
     */
    public $startLongitude;

    /**
     * The final or destination latitude.
     * @required
     * @maps end_latitude
     * @var double $endLatitude public property
     */
    public $endLatitude;

    /**
     * The final or destination longitude.
     * @required
     * @maps end_longitude
     * @var double $endLongitude public property
     */
    public $endLongitude;

    /**
     * The unique identifier of the surge session for a user. Required when returned from a 409 Conflict response on previous POST attempt.
     * @required
     * @maps surge_confirmation_id
     * @var string $surgeConfirmationId public property
     */
    public $surgeConfirmationId;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $productId               Initialization value for the property $this->productId            
	 * @param   double            $startLatitude           Initialization value for the property $this->startLatitude        
	 * @param   double            $startLongitude          Initialization value for the property $this->startLongitude       
	 * @param   double            $endLatitude             Initialization value for the property $this->endLatitude          
	 * @param   double            $endLongitude            Initialization value for the property $this->endLongitude         
	 * @param   string            $surgeConfirmationId     Initialization value for the property $this->surgeConfirmationId  
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->productId             = func_get_arg(0);
            $this->startLatitude         = func_get_arg(1);
            $this->startLongitude        = func_get_arg(2);
            $this->endLatitude           = func_get_arg(3);
            $this->endLongitude          = func_get_arg(4);
            $this->surgeConfirmationId   = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['product_id']            = $this->productId;
        $json['start_latitude']        = $this->startLatitude;
        $json['start_longitude']       = $this->startLongitude;
        $json['end_latitude']          = $this->endLatitude;
        $json['end_longitude']         = $this->endLongitude;
        $json['surge_confirmation_id'] = $this->surgeConfirmationId;

        return $json;
    }
}