<?php
/**
 * Subscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Public api for Kinow back office
 *
 * OpenAPI spec version: 1.0.49
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaemo\Client\Model;

use \ArrayAccess;

/**
 * Subscription Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_product' => 'int',
        'duration' => 'int',
        'trial_duration' => 'int',
        'trial_percent' => 'int',
        'trial_sub' => 'int',
        'limit' => 'bool',
        'limit_duration' => 'int',
        'alert_type' => 'string',
        'alert_qty' => 'int',
        'active' => 'bool',
        'recurring_payment' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'id_product' => 'id_product',
        'duration' => 'duration',
        'trial_duration' => 'trial_duration',
        'trial_percent' => 'trial_percent',
        'trial_sub' => 'trial_sub',
        'limit' => 'limit',
        'limit_duration' => 'limit_duration',
        'alert_type' => 'alert_type',
        'alert_qty' => 'alert_qty',
        'active' => 'active',
        'recurring_payment' => 'recurring_payment'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_product' => 'setIdProduct',
        'duration' => 'setDuration',
        'trial_duration' => 'setTrialDuration',
        'trial_percent' => 'setTrialPercent',
        'trial_sub' => 'setTrialSub',
        'limit' => 'setLimit',
        'limit_duration' => 'setLimitDuration',
        'alert_type' => 'setAlertType',
        'alert_qty' => 'setAlertQty',
        'active' => 'setActive',
        'recurring_payment' => 'setRecurringPayment'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_product' => 'getIdProduct',
        'duration' => 'getDuration',
        'trial_duration' => 'getTrialDuration',
        'trial_percent' => 'getTrialPercent',
        'trial_sub' => 'getTrialSub',
        'limit' => 'getLimit',
        'limit_duration' => 'getLimitDuration',
        'alert_type' => 'getAlertType',
        'alert_qty' => 'getAlertQty',
        'active' => 'getActive',
        'recurring_payment' => 'getRecurringPayment'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['trial_duration'] = isset($data['trial_duration']) ? $data['trial_duration'] : null;
        $this->container['trial_percent'] = isset($data['trial_percent']) ? $data['trial_percent'] : null;
        $this->container['trial_sub'] = isset($data['trial_sub']) ? $data['trial_sub'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['limit_duration'] = isset($data['limit_duration']) ? $data['limit_duration'] : null;
        $this->container['alert_type'] = isset($data['alert_type']) ? $data['alert_type'] : null;
        $this->container['alert_qty'] = isset($data['alert_qty']) ? $data['alert_qty'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['recurring_payment'] = isset($data['recurring_payment']) ? $data['recurring_payment'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_product
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     * @param int $id_product
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets trial_duration
     * @return int
     */
    public function getTrialDuration()
    {
        return $this->container['trial_duration'];
    }

    /**
     * Sets trial_duration
     * @param int $trial_duration
     * @return $this
     */
    public function setTrialDuration($trial_duration)
    {
        $this->container['trial_duration'] = $trial_duration;

        return $this;
    }

    /**
     * Gets trial_percent
     * @return int
     */
    public function getTrialPercent()
    {
        return $this->container['trial_percent'];
    }

    /**
     * Sets trial_percent
     * @param int $trial_percent
     * @return $this
     */
    public function setTrialPercent($trial_percent)
    {
        $this->container['trial_percent'] = $trial_percent;

        return $this;
    }

    /**
     * Gets trial_sub
     * @return int
     */
    public function getTrialSub()
    {
        return $this->container['trial_sub'];
    }

    /**
     * Sets trial_sub
     * @param int $trial_sub
     * @return $this
     */
    public function setTrialSub($trial_sub)
    {
        $this->container['trial_sub'] = $trial_sub;

        return $this;
    }

    /**
     * Gets limit
     * @return bool
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param bool $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets limit_duration
     * @return int
     */
    public function getLimitDuration()
    {
        return $this->container['limit_duration'];
    }

    /**
     * Sets limit_duration
     * @param int $limit_duration
     * @return $this
     */
    public function setLimitDuration($limit_duration)
    {
        $this->container['limit_duration'] = $limit_duration;

        return $this;
    }

    /**
     * Gets alert_type
     * @return string
     */
    public function getAlertType()
    {
        return $this->container['alert_type'];
    }

    /**
     * Sets alert_type
     * @param string $alert_type
     * @return $this
     */
    public function setAlertType($alert_type)
    {
        $this->container['alert_type'] = $alert_type;

        return $this;
    }

    /**
     * Gets alert_qty
     * @return int
     */
    public function getAlertQty()
    {
        return $this->container['alert_qty'];
    }

    /**
     * Sets alert_qty
     * @param int $alert_qty
     * @return $this
     */
    public function setAlertQty($alert_qty)
    {
        $this->container['alert_qty'] = $alert_qty;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets recurring_payment
     * @return int
     */
    public function getRecurringPayment()
    {
        return $this->container['recurring_payment'];
    }

    /**
     * Sets recurring_payment
     * @param int $recurring_payment
     * @return $this
     */
    public function setRecurringPayment($recurring_payment)
    {
        $this->container['recurring_payment'] = $recurring_payment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


