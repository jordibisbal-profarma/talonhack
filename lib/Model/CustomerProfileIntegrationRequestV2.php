<?php
/**
 * CustomerProfileIntegrationRequestV2
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
 * CustomerProfileIntegrationRequestV2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerProfileIntegrationRequestV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerProfileIntegrationRequestV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attributes' => 'object',
        'audiencesChanges' => '\TalonOne\Client\Model\ProfileAudiencesChanges',
        'responseContent' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attributes' => null,
        'audiencesChanges' => null,
        'responseContent' => null
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
        'attributes' => 'attributes',
        'audiencesChanges' => 'audiencesChanges',
        'responseContent' => 'responseContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'audiencesChanges' => 'setAudiencesChanges',
        'responseContent' => 'setResponseContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'audiencesChanges' => 'getAudiencesChanges',
        'responseContent' => 'getResponseContent'
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

    const RESPONSE_CONTENT_CUSTOMER_PROFILE = 'customerProfile';
    const RESPONSE_CONTENT_TRIGGERED_CAMPAIGNS = 'triggeredCampaigns';
    const RESPONSE_CONTENT_LOYALTY = 'loyalty';
    const RESPONSE_CONTENT_EVENT = 'event';
    const RESPONSE_CONTENT_AWARDED_GIVEAWAYS = 'awardedGiveaways';
    const RESPONSE_CONTENT_RULE_FAILURE_REASONS = 'ruleFailureReasons';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseContentAllowableValues()
    {
        return [
            self::RESPONSE_CONTENT_CUSTOMER_PROFILE,
            self::RESPONSE_CONTENT_TRIGGERED_CAMPAIGNS,
            self::RESPONSE_CONTENT_LOYALTY,
            self::RESPONSE_CONTENT_EVENT,
            self::RESPONSE_CONTENT_AWARDED_GIVEAWAYS,
            self::RESPONSE_CONTENT_RULE_FAILURE_REASONS,
        ];
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['audiencesChanges'] = isset($data['audiencesChanges']) ? $data['audiencesChanges'] : null;
        $this->container['responseContent'] = isset($data['responseContent']) ? $data['responseContent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes Arbitrary properties associated with this item.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets audiencesChanges
     *
     * @return \TalonOne\Client\Model\ProfileAudiencesChanges|null
     */
    public function getAudiencesChanges()
    {
        return $this->container['audiencesChanges'];
    }

    /**
     * Sets audiencesChanges
     *
     * @param \TalonOne\Client\Model\ProfileAudiencesChanges|null $audiencesChanges audiencesChanges
     *
     * @return $this
     */
    public function setAudiencesChanges($audiencesChanges)
    {
        $this->container['audiencesChanges'] = $audiencesChanges;

        return $this;
    }

    /**
     * Gets responseContent
     *
     * @return string[]|null
     */
    public function getResponseContent()
    {
        return $this->container['responseContent'];
    }

    /**
     * Sets responseContent
     *
     * @param string[]|null $responseContent Optional list of extra data that you want to get in the response. Use this property to get as much data as you need in one request instead of sending extra requests to other endpoints.  **Note:** `ruleFailureReasons` is always part of the response when the [Application type](https://docs.talon.one/docs/product/applications/overview#application-types) is `sandbox`.
     *
     * @return $this
     */
    public function setResponseContent($responseContent)
    {
        $allowedValues = $this->getResponseContentAllowableValues();
        if (!is_null($responseContent) && array_diff($responseContent, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'responseContent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['responseContent'] = $responseContent;

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


