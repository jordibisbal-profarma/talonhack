<?php
/**
 * RejectCouponEffectProps
 *
 * PHP version 5
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Talon.One API
 *
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerSession](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2) endpoint is `https://mycompany.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TalonOne\Client\Model;

use \ArrayAccess;
use \TalonOne\Client\ObjectSerializer;

/**
 * RejectCouponEffectProps Class Doc Comment
 *
 * @category Class
 * @description The properties specific to the \&quot;rejectCoupon\&quot; effect. This gets triggered whenever the coupon was rejected. See rejectionReason for more info on why.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RejectCouponEffectProps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RejectCouponEffectProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => 'string',
        'rejectionReason' => 'string',
        'conditionIndex' => 'int',
        'effectIndex' => 'int',
        'details' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'value' => null,
        'rejectionReason' => null,
        'conditionIndex' => null,
        'effectIndex' => null,
        'details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'value' => 'value',
        'rejectionReason' => 'rejectionReason',
        'conditionIndex' => 'conditionIndex',
        'effectIndex' => 'effectIndex',
        'details' => 'details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'rejectionReason' => 'setRejectionReason',
        'conditionIndex' => 'setConditionIndex',
        'effectIndex' => 'setEffectIndex',
        'details' => 'setDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'rejectionReason' => 'getRejectionReason',
        'conditionIndex' => 'getConditionIndex',
        'effectIndex' => 'getEffectIndex',
        'details' => 'getDetails'
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
        return self::$openAPIModelName;
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['rejectionReason'] = isset($data['rejectionReason']) ? $data['rejectionReason'] : null;
        $this->container['conditionIndex'] = isset($data['conditionIndex']) ? $data['conditionIndex'] : null;
        $this->container['effectIndex'] = isset($data['effectIndex']) ? $data['effectIndex'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['rejectionReason'] === null) {
            $invalidProperties[] = "'rejectionReason' can't be null";
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The coupon code that was rejected.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets rejectionReason
     *
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->container['rejectionReason'];
    }

    /**
     * Sets rejectionReason
     *
     * @param string $rejectionReason The reason why this coupon was rejected.
     *
     * @return $this
     */
    public function setRejectionReason($rejectionReason)
    {
        $this->container['rejectionReason'] = $rejectionReason;

        return $this;
    }

    /**
     * Gets conditionIndex
     *
     * @return int|null
     */
    public function getConditionIndex()
    {
        return $this->container['conditionIndex'];
    }

    /**
     * Sets conditionIndex
     *
     * @param int|null $conditionIndex The index of the condition that caused the rejection of the coupon.
     *
     * @return $this
     */
    public function setConditionIndex($conditionIndex)
    {
        $this->container['conditionIndex'] = $conditionIndex;

        return $this;
    }

    /**
     * Gets effectIndex
     *
     * @return int|null
     */
    public function getEffectIndex()
    {
        return $this->container['effectIndex'];
    }

    /**
     * Sets effectIndex
     *
     * @param int|null $effectIndex The index of the effect that caused the rejection of the coupon.
     *
     * @return $this
     */
    public function setEffectIndex($effectIndex)
    {
        $this->container['effectIndex'] = $effectIndex;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details More details about the failure.
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

