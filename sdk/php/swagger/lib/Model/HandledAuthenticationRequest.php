<?php
/**
 * HandledAuthenticationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  HydraSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HydraSDK\Model;

use \ArrayAccess;

/**
 * HandledAuthenticationRequest Class Doc Comment
 *
 * @category    Class
 * @package     HydraSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HandledAuthenticationRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HandledAuthenticationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acr' => 'string',
        'force_subject_identifier' => 'string',
        'remember' => 'bool',
        'remember_for' => 'int',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acr' => null,
        'force_subject_identifier' => null,
        'remember' => null,
        'remember_for' => 'int64',
        'subject' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'acr' => 'acr',
        'force_subject_identifier' => 'force_subject_identifier',
        'remember' => 'remember',
        'remember_for' => 'remember_for',
        'subject' => 'subject'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acr' => 'setAcr',
        'force_subject_identifier' => 'setForceSubjectIdentifier',
        'remember' => 'setRemember',
        'remember_for' => 'setRememberFor',
        'subject' => 'setSubject'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acr' => 'getAcr',
        'force_subject_identifier' => 'getForceSubjectIdentifier',
        'remember' => 'getRemember',
        'remember_for' => 'getRememberFor',
        'subject' => 'getSubject'
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
        $this->container['acr'] = isset($data['acr']) ? $data['acr'] : null;
        $this->container['force_subject_identifier'] = isset($data['force_subject_identifier']) ? $data['force_subject_identifier'] : null;
        $this->container['remember'] = isset($data['remember']) ? $data['remember'] : null;
        $this->container['remember_for'] = isset($data['remember_for']) ? $data['remember_for'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['subject'] === null) {
            $invalid_properties[] = "'subject' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['subject'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets acr
     * @return string
     */
    public function getAcr()
    {
        return $this->container['acr'];
    }

    /**
     * Sets acr
     * @param string $acr ACR sets the Authentication AuthorizationContext Class Reference value for this authentication session. You can use it to express that, for example, a user authenticated using two factor authentication.
     * @return $this
     */
    public function setAcr($acr)
    {
        $this->container['acr'] = $acr;

        return $this;
    }

    /**
     * Gets force_subject_identifier
     * @return string
     */
    public function getForceSubjectIdentifier()
    {
        return $this->container['force_subject_identifier'];
    }

    /**
     * Sets force_subject_identifier
     * @param string $force_subject_identifier ForceSubjectIdentifier forces the \"pairwise\" user ID of the end-user that authenticated. The \"pairwise\" user ID refers to the (Pairwise Identifier Algorithm)[http://openid.net/specs/openid-connect-core-1_0.html#PairwiseAlg] of the OpenID Connect specification. It allows you to set an obfuscated subject (\"user\") identifier that is unique to the client.  Please note that this changes the user ID on endpoint /userinfo and sub claim of the ID Token. It does not change the sub claim in the OAuth 2.0 Introspection.  Per default, ORY Hydra handles this value with its own algorithm. In case you want to set this yourself you can use this field. Please note that setting this field has no effect if `pairwise` is not configured in ORY Hydra or the OAuth 2.0 Client does not expect a pairwise identifier (set via `subject_type` key in the client's configuration).  Please also be aware that ORY Hydra is unable to properly compute this value during authentication. This implies that you have to compute this value on every authentication process (probably depending on the client ID or some other unique value).  If you fail to compute the proper value, then authentication processes which have id_token_hint set might fail.
     * @return $this
     */
    public function setForceSubjectIdentifier($force_subject_identifier)
    {
        $this->container['force_subject_identifier'] = $force_subject_identifier;

        return $this;
    }

    /**
     * Gets remember
     * @return bool
     */
    public function getRemember()
    {
        return $this->container['remember'];
    }

    /**
     * Sets remember
     * @param bool $remember Remember, if set to true, tells ORY Hydra to remember this user by telling the user agent (browser) to store a cookie with authentication data. If the same user performs another OAuth 2.0 Authorization Request, he/she will not be asked to log in again.
     * @return $this
     */
    public function setRemember($remember)
    {
        $this->container['remember'] = $remember;

        return $this;
    }

    /**
     * Gets remember_for
     * @return int
     */
    public function getRememberFor()
    {
        return $this->container['remember_for'];
    }

    /**
     * Sets remember_for
     * @param int $remember_for RememberFor sets how long the authentication should be remembered for in seconds. If set to `0`, the authorization will be remembered indefinitely.
     * @return $this
     */
    public function setRememberFor($remember_for)
    {
        $this->container['remember_for'] = $remember_for;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject is the user ID of the end-user that authenticated.
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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
            return json_encode(\HydraSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\HydraSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}

