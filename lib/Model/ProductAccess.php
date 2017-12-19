<?php
/**
 * ProductAccess
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaemo API
 *
 * Public api for Kaemo back office
 *
 * OpenAPI spec version: 1.0.32
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
 * ProductAccess Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductAccess implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductAccess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_customer' => 'int',
        'id_product' => 'int',
        'id_product_attribute' => 'int',
        'type' => 'string',
        'date_add' => 'string',
        'date_exp' => 'string',
        'cancel' => 'int',
        'recurring' => 'int',
        'active' => 'int',
        'message' => 'string',
        'id_order' => 'int'
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
        'id_customer' => 'id_customer',
        'id_product' => 'id_product',
        'id_product_attribute' => 'id_product_attribute',
        'type' => 'type',
        'date_add' => 'date_add',
        'date_exp' => 'date_exp',
        'cancel' => 'cancel',
        'recurring' => 'recurring',
        'active' => 'active',
        'message' => 'message',
        'id_order' => 'id_order'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_customer' => 'setIdCustomer',
        'id_product' => 'setIdProduct',
        'id_product_attribute' => 'setIdProductAttribute',
        'type' => 'setType',
        'date_add' => 'setDateAdd',
        'date_exp' => 'setDateExp',
        'cancel' => 'setCancel',
        'recurring' => 'setRecurring',
        'active' => 'setActive',
        'message' => 'setMessage',
        'id_order' => 'setIdOrder'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_customer' => 'getIdCustomer',
        'id_product' => 'getIdProduct',
        'id_product_attribute' => 'getIdProductAttribute',
        'type' => 'getType',
        'date_add' => 'getDateAdd',
        'date_exp' => 'getDateExp',
        'cancel' => 'getCancel',
        'recurring' => 'getRecurring',
        'active' => 'getActive',
        'message' => 'getMessage',
        'id_order' => 'getIdOrder'
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
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['id_product_attribute'] = isset($data['id_product_attribute']) ? $data['id_product_attribute'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_exp'] = isset($data['date_exp']) ? $data['date_exp'] : null;
        $this->container['cancel'] = isset($data['cancel']) ? $data['cancel'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['id_order'] = isset($data['id_order']) ? $data['id_order'] : null;
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
     * Gets id_customer
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->container['id_customer'];
    }

    /**
     * Sets id_customer
     * @param int $id_customer
     * @return $this
     */
    public function setIdCustomer($id_customer)
    {
        $this->container['id_customer'] = $id_customer;

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
     * Gets id_product_attribute
     * @return int
     */
    public function getIdProductAttribute()
    {
        return $this->container['id_product_attribute'];
    }

    /**
     * Sets id_product_attribute
     * @param int $id_product_attribute
     * @return $this
     */
    public function setIdProductAttribute($id_product_attribute)
    {
        $this->container['id_product_attribute'] = $id_product_attribute;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets date_add
     * @return string
     */
    public function getDateAdd()
    {
        return $this->container['date_add'];
    }

    /**
     * Sets date_add
     * @param string $date_add
     * @return $this
     */
    public function setDateAdd($date_add)
    {
        $this->container['date_add'] = $date_add;

        return $this;
    }

    /**
     * Gets date_exp
     * @return string
     */
    public function getDateExp()
    {
        return $this->container['date_exp'];
    }

    /**
     * Sets date_exp
     * @param string $date_exp
     * @return $this
     */
    public function setDateExp($date_exp)
    {
        $this->container['date_exp'] = $date_exp;

        return $this;
    }

    /**
     * Gets cancel
     * @return int
     */
    public function getCancel()
    {
        return $this->container['cancel'];
    }

    /**
     * Sets cancel
     * @param int $cancel
     * @return $this
     */
    public function setCancel($cancel)
    {
        $this->container['cancel'] = $cancel;

        return $this;
    }

    /**
     * Gets recurring
     * @return int
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     * @param int $recurring
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets active
     * @return int
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param int $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets id_order
     * @return int
     */
    public function getIdOrder()
    {
        return $this->container['id_order'];
    }

    /**
     * Sets id_order
     * @param int $id_order
     * @return $this
     */
    public function setIdOrder($id_order)
    {
        $this->container['id_order'] = $id_order;

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


