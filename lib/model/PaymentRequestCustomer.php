<?php

/**
 * PHP SDK for Cardpay API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class PaymentRequestCustomer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRequestCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'birth_date' => 'string',
        'email' => 'string',
        'full_name' => 'string',
        'id' => 'string',
        'locale' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'birth_date' => null,
        'email' => null,
        'full_name' => null,
        'id' => null,
        'locale' => null,
        'phone' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'birth_date' => 'birth_date',
        'email' => 'email',
        'full_name' => 'full_name',
        'id' => 'id',
        'locale' => 'locale',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birth_date' => 'setBirthDate',
        'email' => 'setEmail',
        'full_name' => 'setFullName',
        'id' => 'setId',
        'locale' => 'setLocale',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birth_date' => 'getBirthDate',
        'email' => 'getEmail',
        'full_name' => 'getFullName',
        'id' => 'getId',
        'locale' => 'getLocale',
        'phone' => 'getPhone'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 256)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['full_name']) && (mb_strlen($this->container['full_name']) > 256)) {
            $invalidProperties[] = "invalid value for 'full_name', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['full_name']) && (mb_strlen($this->container['full_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'full_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 256)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 12)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 11)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 11.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets birth_date
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string $birth_date Customer birth date in format `YYYY-MM-DD`. For Zenith bank in DIRECTBANKINGNGA: Customer password in format date of birth. *(mandatory for DIRECTBANKINGNGA payment method only)*
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address of Customer *(mandatory by default for BANKCARD, PAYPAL, 'Latin America', AIRTEL, MPESA, MTN, UGANDAMOBILE, VODAFONE, TIGO, DIRECTBANKINGNGA and AQRCODE payment methods only)*. Can be defined as optional by CardPay manager.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 256)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PaymentRequestCustomer., must be smaller than or equal to 256.');
        }
        if (!is_null($email) && (mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PaymentRequestCustomer., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name Customer full name *(mandatory for 'Latin America' payment methods only)*
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        if (!is_null($full_name) && (mb_strlen($full_name) > 256)) {
            throw new \InvalidArgumentException('invalid length for $full_name when calling PaymentRequestCustomer., must be smaller than or equal to 256.');
        }
        if (!is_null($full_name) && (mb_strlen($full_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $full_name when calling PaymentRequestCustomer., must be bigger than or equal to 1.');
        }

        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Customer ID in Merchant's system *(mandatory for WEBMONEY payment method only)*
     *
     * @return $this
     */
    public function setId($id)
    {
        if (!is_null($id) && (mb_strlen($id) > 256)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PaymentRequestCustomer., must be smaller than or equal to 256.');
        }
        if (!is_null($id) && (mb_strlen($id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $id when calling PaymentRequestCustomer., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Preferred locale for the payment page ([ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code). The default locale will be applied if the selected locale is not supported. Supported locales are: `ru`, `en`, `zh`, `ja`
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Customer phone number. Format: `+` sign and 10 or 11 digits, example: `+12345678901` Mandatory for DIRECTBANKINGNGA payment method. For other payment methods: optional by default, can be defined as mandatory by CardPay manager.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 12)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling PaymentRequestCustomer., must be smaller than or equal to 12.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 11)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling PaymentRequestCustomer., must be bigger than or equal to 11.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

