<?php
/**
 * Customer
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
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.3.10
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
 * Customer Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'lastname' => 'string',
        'firstname' => 'string',
        'email' => 'string',
        'id_gender' => 'int',
        'birthday' => 'string',
        'newsletter' => 'bool',
        'optin' => 'bool',
        'active' => 'bool',
        'id_lang' => 'int',
        'date_add' => 'string',
        'date_upd' => 'string',
        'max_viewing' => 'int',
        'custom' => 'string',
        'password' => 'string',
        'last_passwd_gen' => 'string',
        'id_country' => 'int'
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
        'lastname' => 'lastname',
        'firstname' => 'firstname',
        'email' => 'email',
        'id_gender' => 'id_gender',
        'birthday' => 'birthday',
        'newsletter' => 'newsletter',
        'optin' => 'optin',
        'active' => 'active',
        'id_lang' => 'id_lang',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'max_viewing' => 'max_viewing',
        'custom' => 'custom',
        'password' => 'password',
        'last_passwd_gen' => 'last_passwd_gen',
        'id_country' => 'id_country'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lastname' => 'setLastname',
        'firstname' => 'setFirstname',
        'email' => 'setEmail',
        'id_gender' => 'setIdGender',
        'birthday' => 'setBirthday',
        'newsletter' => 'setNewsletter',
        'optin' => 'setOptin',
        'active' => 'setActive',
        'id_lang' => 'setIdLang',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'max_viewing' => 'setMaxViewing',
        'custom' => 'setCustom',
        'password' => 'setPassword',
        'last_passwd_gen' => 'setLastPasswdGen',
        'id_country' => 'setIdCountry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lastname' => 'getLastname',
        'firstname' => 'getFirstname',
        'email' => 'getEmail',
        'id_gender' => 'getIdGender',
        'birthday' => 'getBirthday',
        'newsletter' => 'getNewsletter',
        'optin' => 'getOptin',
        'active' => 'getActive',
        'id_lang' => 'getIdLang',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'max_viewing' => 'getMaxViewing',
        'custom' => 'getCustom',
        'password' => 'getPassword',
        'last_passwd_gen' => 'getLastPasswdGen',
        'id_country' => 'getIdCountry'
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
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id_gender'] = isset($data['id_gender']) ? $data['id_gender'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['newsletter'] = isset($data['newsletter']) ? $data['newsletter'] : null;
        $this->container['optin'] = isset($data['optin']) ? $data['optin'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['max_viewing'] = isset($data['max_viewing']) ? $data['max_viewing'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['last_passwd_gen'] = isset($data['last_passwd_gen']) ? $data['last_passwd_gen'] : null;
        $this->container['id_country'] = isset($data['id_country']) ? $data['id_country'] : null;
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
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname 
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname 
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets id_gender
     * @return int
     */
    public function getIdGender()
    {
        return $this->container['id_gender'];
    }

    /**
     * Sets id_gender
     * @param int $id_gender 
     * @return $this
     */
    public function setIdGender($id_gender)
    {
        $this->container['id_gender'] = $id_gender;

        return $this;
    }

    /**
     * Gets birthday
     * @return string
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     * @param string $birthday 
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets newsletter
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     * @param bool $newsletter 
     * @return $this
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets optin
     * @return bool
     */
    public function getOptin()
    {
        return $this->container['optin'];
    }

    /**
     * Sets optin
     * @param bool $optin 
     * @return $this
     */
    public function setOptin($optin)
    {
        $this->container['optin'] = $optin;

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
     * Gets id_lang
     * @return int
     */
    public function getIdLang()
    {
        return $this->container['id_lang'];
    }

    /**
     * Sets id_lang
     * @param int $id_lang 
     * @return $this
     */
    public function setIdLang($id_lang)
    {
        $this->container['id_lang'] = $id_lang;

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
     * Gets date_upd
     * @return string
     */
    public function getDateUpd()
    {
        return $this->container['date_upd'];
    }

    /**
     * Sets date_upd
     * @param string $date_upd 
     * @return $this
     */
    public function setDateUpd($date_upd)
    {
        $this->container['date_upd'] = $date_upd;

        return $this;
    }

    /**
     * Gets max_viewing
     * @return int
     */
    public function getMaxViewing()
    {
        return $this->container['max_viewing'];
    }

    /**
     * Sets max_viewing
     * @param int $max_viewing 
     * @return $this
     */
    public function setMaxViewing($max_viewing)
    {
        $this->container['max_viewing'] = $max_viewing;

        return $this;
    }

    /**
     * Gets custom
     * @return string
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     * @param string $custom 
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password Only available in body
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets last_passwd_gen
     * @return string
     */
    public function getLastPasswdGen()
    {
        return $this->container['last_passwd_gen'];
    }

    /**
     * Sets last_passwd_gen
     * @param string $last_passwd_gen 
     * @return $this
     */
    public function setLastPasswdGen($last_passwd_gen)
    {
        $this->container['last_passwd_gen'] = $last_passwd_gen;

        return $this;
    }

    /**
     * Gets id_country
     * @return int
     */
    public function getIdCountry()
    {
        return $this->container['id_country'];
    }

    /**
     * Sets id_country
     * @param int $id_country Only available in body
     * @return $this
     */
    public function setIdCountry($id_country)
    {
        $this->container['id_country'] = $id_country;

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


