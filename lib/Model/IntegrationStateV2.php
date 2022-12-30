<?php
/**
 * IntegrationStateV2
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
 * IntegrationStateV2 Class Doc Comment
 *
 * @category Class
 * @description Contains all entities that might interest Talon.One integrations. This is the response type returned by the V2 PUT customer_session endpoint
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationStateV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntegrationStateV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customerSession' => '\TalonOne\Client\Model\CustomerSessionV2',
        'customerProfile' => '\TalonOne\Client\Model\CustomerProfile',
        'event' => '\TalonOne\Client\Model\Event',
        'loyalty' => '\TalonOne\Client\Model\Loyalty',
        'referral' => '\TalonOne\Client\Model\InventoryReferral',
        'coupons' => '\TalonOne\Client\Model\Coupon[]',
        'triggeredCampaigns' => '\TalonOne\Client\Model\Campaign[]',
        'effects' => '\TalonOne\Client\Model\Effect[]',
        'ruleFailureReasons' => '\TalonOne\Client\Model\RuleFailureReason[]',
        'createdCoupons' => '\TalonOne\Client\Model\Coupon[]',
        'createdReferrals' => '\TalonOne\Client\Model\Referral[]',
        'awardedGiveaways' => '\TalonOne\Client\Model\Giveaway[]',
        'return' => '\TalonOne\Client\Model\ModelReturn',
        'previousReturns' => '\TalonOne\Client\Model\ModelReturn[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customerSession' => null,
        'customerProfile' => null,
        'event' => null,
        'loyalty' => null,
        'referral' => null,
        'coupons' => null,
        'triggeredCampaigns' => null,
        'effects' => null,
        'ruleFailureReasons' => null,
        'createdCoupons' => null,
        'createdReferrals' => null,
        'awardedGiveaways' => null,
        'return' => null,
        'previousReturns' => null
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
        'customerSession' => 'customerSession',
        'customerProfile' => 'customerProfile',
        'event' => 'event',
        'loyalty' => 'loyalty',
        'referral' => 'referral',
        'coupons' => 'coupons',
        'triggeredCampaigns' => 'triggeredCampaigns',
        'effects' => 'effects',
        'ruleFailureReasons' => 'ruleFailureReasons',
        'createdCoupons' => 'createdCoupons',
        'createdReferrals' => 'createdReferrals',
        'awardedGiveaways' => 'awardedGiveaways',
        'return' => 'return',
        'previousReturns' => 'previousReturns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerSession' => 'setCustomerSession',
        'customerProfile' => 'setCustomerProfile',
        'event' => 'setEvent',
        'loyalty' => 'setLoyalty',
        'referral' => 'setReferral',
        'coupons' => 'setCoupons',
        'triggeredCampaigns' => 'setTriggeredCampaigns',
        'effects' => 'setEffects',
        'ruleFailureReasons' => 'setRuleFailureReasons',
        'createdCoupons' => 'setCreatedCoupons',
        'createdReferrals' => 'setCreatedReferrals',
        'awardedGiveaways' => 'setAwardedGiveaways',
        'return' => 'setReturn',
        'previousReturns' => 'setPreviousReturns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerSession' => 'getCustomerSession',
        'customerProfile' => 'getCustomerProfile',
        'event' => 'getEvent',
        'loyalty' => 'getLoyalty',
        'referral' => 'getReferral',
        'coupons' => 'getCoupons',
        'triggeredCampaigns' => 'getTriggeredCampaigns',
        'effects' => 'getEffects',
        'ruleFailureReasons' => 'getRuleFailureReasons',
        'createdCoupons' => 'getCreatedCoupons',
        'createdReferrals' => 'getCreatedReferrals',
        'awardedGiveaways' => 'getAwardedGiveaways',
        'return' => 'getReturn',
        'previousReturns' => 'getPreviousReturns'
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
        $this->container['customerSession'] = isset($data['customerSession']) ? $data['customerSession'] : null;
        $this->container['customerProfile'] = isset($data['customerProfile']) ? $data['customerProfile'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['loyalty'] = isset($data['loyalty']) ? $data['loyalty'] : null;
        $this->container['referral'] = isset($data['referral']) ? $data['referral'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['triggeredCampaigns'] = isset($data['triggeredCampaigns']) ? $data['triggeredCampaigns'] : null;
        $this->container['effects'] = isset($data['effects']) ? $data['effects'] : null;
        $this->container['ruleFailureReasons'] = isset($data['ruleFailureReasons']) ? $data['ruleFailureReasons'] : null;
        $this->container['createdCoupons'] = isset($data['createdCoupons']) ? $data['createdCoupons'] : null;
        $this->container['createdReferrals'] = isset($data['createdReferrals']) ? $data['createdReferrals'] : null;
        $this->container['awardedGiveaways'] = isset($data['awardedGiveaways']) ? $data['awardedGiveaways'] : null;
        $this->container['return'] = isset($data['return']) ? $data['return'] : null;
        $this->container['previousReturns'] = isset($data['previousReturns']) ? $data['previousReturns'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['effects'] === null) {
            $invalidProperties[] = "'effects' can't be null";
        }
        if ($this->container['createdCoupons'] === null) {
            $invalidProperties[] = "'createdCoupons' can't be null";
        }
        if ($this->container['createdReferrals'] === null) {
            $invalidProperties[] = "'createdReferrals' can't be null";
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
     * Gets customerSession
     *
     * @return \TalonOne\Client\Model\CustomerSessionV2|null
     */
    public function getCustomerSession()
    {
        return $this->container['customerSession'];
    }

    /**
     * Sets customerSession
     *
     * @param \TalonOne\Client\Model\CustomerSessionV2|null $customerSession customerSession
     *
     * @return $this
     */
    public function setCustomerSession($customerSession)
    {
        $this->container['customerSession'] = $customerSession;

        return $this;
    }

    /**
     * Gets customerProfile
     *
     * @return \TalonOne\Client\Model\CustomerProfile|null
     */
    public function getCustomerProfile()
    {
        return $this->container['customerProfile'];
    }

    /**
     * Sets customerProfile
     *
     * @param \TalonOne\Client\Model\CustomerProfile|null $customerProfile customerProfile
     *
     * @return $this
     */
    public function setCustomerProfile($customerProfile)
    {
        $this->container['customerProfile'] = $customerProfile;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \TalonOne\Client\Model\Event|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \TalonOne\Client\Model\Event|null $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets loyalty
     *
     * @return \TalonOne\Client\Model\Loyalty|null
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \TalonOne\Client\Model\Loyalty|null $loyalty loyalty
     *
     * @return $this
     */
    public function setLoyalty($loyalty)
    {
        $this->container['loyalty'] = $loyalty;

        return $this;
    }

    /**
     * Gets referral
     *
     * @return \TalonOne\Client\Model\InventoryReferral|null
     */
    public function getReferral()
    {
        return $this->container['referral'];
    }

    /**
     * Sets referral
     *
     * @param \TalonOne\Client\Model\InventoryReferral|null $referral referral
     *
     * @return $this
     */
    public function setReferral($referral)
    {
        $this->container['referral'] = $referral;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return \TalonOne\Client\Model\Coupon[]|null
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param \TalonOne\Client\Model\Coupon[]|null $coupons coupons
     *
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets triggeredCampaigns
     *
     * @return \TalonOne\Client\Model\Campaign[]|null
     */
    public function getTriggeredCampaigns()
    {
        return $this->container['triggeredCampaigns'];
    }

    /**
     * Sets triggeredCampaigns
     *
     * @param \TalonOne\Client\Model\Campaign[]|null $triggeredCampaigns triggeredCampaigns
     *
     * @return $this
     */
    public function setTriggeredCampaigns($triggeredCampaigns)
    {
        $this->container['triggeredCampaigns'] = $triggeredCampaigns;

        return $this;
    }

    /**
     * Gets effects
     *
     * @return \TalonOne\Client\Model\Effect[]
     */
    public function getEffects()
    {
        return $this->container['effects'];
    }

    /**
     * Sets effects
     *
     * @param \TalonOne\Client\Model\Effect[] $effects effects
     *
     * @return $this
     */
    public function setEffects($effects)
    {
        $this->container['effects'] = $effects;

        return $this;
    }

    /**
     * Gets ruleFailureReasons
     *
     * @return \TalonOne\Client\Model\RuleFailureReason[]|null
     */
    public function getRuleFailureReasons()
    {
        return $this->container['ruleFailureReasons'];
    }

    /**
     * Sets ruleFailureReasons
     *
     * @param \TalonOne\Client\Model\RuleFailureReason[]|null $ruleFailureReasons ruleFailureReasons
     *
     * @return $this
     */
    public function setRuleFailureReasons($ruleFailureReasons)
    {
        $this->container['ruleFailureReasons'] = $ruleFailureReasons;

        return $this;
    }

    /**
     * Gets createdCoupons
     *
     * @return \TalonOne\Client\Model\Coupon[]
     */
    public function getCreatedCoupons()
    {
        return $this->container['createdCoupons'];
    }

    /**
     * Sets createdCoupons
     *
     * @param \TalonOne\Client\Model\Coupon[] $createdCoupons createdCoupons
     *
     * @return $this
     */
    public function setCreatedCoupons($createdCoupons)
    {
        $this->container['createdCoupons'] = $createdCoupons;

        return $this;
    }

    /**
     * Gets createdReferrals
     *
     * @return \TalonOne\Client\Model\Referral[]
     */
    public function getCreatedReferrals()
    {
        return $this->container['createdReferrals'];
    }

    /**
     * Sets createdReferrals
     *
     * @param \TalonOne\Client\Model\Referral[] $createdReferrals createdReferrals
     *
     * @return $this
     */
    public function setCreatedReferrals($createdReferrals)
    {
        $this->container['createdReferrals'] = $createdReferrals;

        return $this;
    }

    /**
     * Gets awardedGiveaways
     *
     * @return \TalonOne\Client\Model\Giveaway[]|null
     */
    public function getAwardedGiveaways()
    {
        return $this->container['awardedGiveaways'];
    }

    /**
     * Sets awardedGiveaways
     *
     * @param \TalonOne\Client\Model\Giveaway[]|null $awardedGiveaways awardedGiveaways
     *
     * @return $this
     */
    public function setAwardedGiveaways($awardedGiveaways)
    {
        $this->container['awardedGiveaways'] = $awardedGiveaways;

        return $this;
    }

    /**
     * Gets return
     *
     * @return \TalonOne\Client\Model\ModelReturn|null
     */
    public function getReturn()
    {
        return $this->container['return'];
    }

    /**
     * Sets return
     *
     * @param \TalonOne\Client\Model\ModelReturn|null $return return
     *
     * @return $this
     */
    public function setReturn($return)
    {
        $this->container['return'] = $return;

        return $this;
    }

    /**
     * Gets previousReturns
     *
     * @return \TalonOne\Client\Model\ModelReturn[]|null
     */
    public function getPreviousReturns()
    {
        return $this->container['previousReturns'];
    }

    /**
     * Sets previousReturns
     *
     * @param \TalonOne\Client\Model\ModelReturn[]|null $previousReturns previousReturns
     *
     * @return $this
     */
    public function setPreviousReturns($previousReturns)
    {
        $this->container['previousReturns'] = $previousReturns;

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

