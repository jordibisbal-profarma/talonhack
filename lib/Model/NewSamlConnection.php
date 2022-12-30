<?php
/**
 * NewSamlConnection
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
 * NewSamlConnection Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewSamlConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewSamlConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x509certificate' => 'string',
        'accountId' => 'int',
        'name' => 'string',
        'enabled' => 'bool',
        'issuer' => 'string',
        'signOnURL' => 'string',
        'signOutURL' => 'string',
        'metadataURL' => 'string',
        'audienceURI' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'x509certificate' => null,
        'accountId' => null,
        'name' => null,
        'enabled' => null,
        'issuer' => null,
        'signOnURL' => null,
        'signOutURL' => null,
        'metadataURL' => null,
        'audienceURI' => null
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
        'x509certificate' => 'x509certificate',
        'accountId' => 'accountId',
        'name' => 'name',
        'enabled' => 'enabled',
        'issuer' => 'issuer',
        'signOnURL' => 'signOnURL',
        'signOutURL' => 'signOutURL',
        'metadataURL' => 'metadataURL',
        'audienceURI' => 'audienceURI'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x509certificate' => 'setX509certificate',
        'accountId' => 'setAccountId',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'issuer' => 'setIssuer',
        'signOnURL' => 'setSignOnURL',
        'signOutURL' => 'setSignOutURL',
        'metadataURL' => 'setMetadataURL',
        'audienceURI' => 'setAudienceURI'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x509certificate' => 'getX509certificate',
        'accountId' => 'getAccountId',
        'name' => 'getName',
        'enabled' => 'getEnabled',
        'issuer' => 'getIssuer',
        'signOnURL' => 'getSignOnURL',
        'signOutURL' => 'getSignOutURL',
        'metadataURL' => 'getMetadataURL',
        'audienceURI' => 'getAudienceURI'
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
        $this->container['x509certificate'] = isset($data['x509certificate']) ? $data['x509certificate'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['signOnURL'] = isset($data['signOnURL']) ? $data['signOnURL'] : null;
        $this->container['signOutURL'] = isset($data['signOutURL']) ? $data['signOutURL'] : null;
        $this->container['metadataURL'] = isset($data['metadataURL']) ? $data['metadataURL'] : null;
        $this->container['audienceURI'] = isset($data['audienceURI']) ? $data['audienceURI'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['x509certificate'] === null) {
            $invalidProperties[] = "'x509certificate' can't be null";
        }
        if ((mb_strlen($this->container['x509certificate']) < 1)) {
            $invalidProperties[] = "invalid value for 'x509certificate', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
        if ((mb_strlen($this->container['issuer']) < 1)) {
            $invalidProperties[] = "invalid value for 'issuer', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['signOnURL'] === null) {
            $invalidProperties[] = "'signOnURL' can't be null";
        }
        if ((mb_strlen($this->container['signOnURL']) < 1)) {
            $invalidProperties[] = "invalid value for 'signOnURL', the character length must be bigger than or equal to 1.";
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
     * Gets x509certificate
     *
     * @return string
     */
    public function getX509certificate()
    {
        return $this->container['x509certificate'];
    }

    /**
     * Sets x509certificate
     *
     * @param string $x509certificate X.509 Certificate.
     *
     * @return $this
     */
    public function setX509certificate($x509certificate)
    {

        if ((mb_strlen($x509certificate) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x509certificate when calling NewSamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['x509certificate'] = $x509certificate;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name ID of the SAML service.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NewSamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Determines if this SAML connection active.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string $issuer Identity Provider Entity ID.
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {

        if ((mb_strlen($issuer) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issuer when calling NewSamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets signOnURL
     *
     * @return string
     */
    public function getSignOnURL()
    {
        return $this->container['signOnURL'];
    }

    /**
     * Sets signOnURL
     *
     * @param string $signOnURL Single Sign-On URL.
     *
     * @return $this
     */
    public function setSignOnURL($signOnURL)
    {

        if ((mb_strlen($signOnURL) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signOnURL when calling NewSamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['signOnURL'] = $signOnURL;

        return $this;
    }

    /**
     * Gets signOutURL
     *
     * @return string|null
     */
    public function getSignOutURL()
    {
        return $this->container['signOutURL'];
    }

    /**
     * Sets signOutURL
     *
     * @param string|null $signOutURL Single Sign-Out URL.
     *
     * @return $this
     */
    public function setSignOutURL($signOutURL)
    {
        $this->container['signOutURL'] = $signOutURL;

        return $this;
    }

    /**
     * Gets metadataURL
     *
     * @return string|null
     */
    public function getMetadataURL()
    {
        return $this->container['metadataURL'];
    }

    /**
     * Sets metadataURL
     *
     * @param string|null $metadataURL Metadata URL.
     *
     * @return $this
     */
    public function setMetadataURL($metadataURL)
    {
        $this->container['metadataURL'] = $metadataURL;

        return $this;
    }

    /**
     * Gets audienceURI
     *
     * @return string|null
     */
    public function getAudienceURI()
    {
        return $this->container['audienceURI'];
    }

    /**
     * Sets audienceURI
     *
     * @param string|null $audienceURI The application-defined unique identifier that is the intended audience of the SAML assertion. This is most often the SP Entity ID of your application. When not specified, the ACS URL will be used.
     *
     * @return $this
     */
    public function setAudienceURI($audienceURI)
    {
        $this->container['audienceURI'] = $audienceURI;

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

