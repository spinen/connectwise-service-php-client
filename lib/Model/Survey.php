<?php
/**
 * Survey
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Service
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Service API
 *
 * ConnectWise Service API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Service\Model;

use \ArrayAccess;

/**
 * Survey Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Service
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Survey implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Survey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'inactive_flag' => 'bool',
        'header_include_logo_flag' => 'bool',
        'header_text' => 'string',
        'header_text_visible_flag' => 'bool',
        'footer_text' => 'string',
        'footer_text_visible_flag' => 'bool',
        'thank_you_text' => 'string',
        'notify_who' => '\Spinen\ConnectWise\Clients\Service\Model\GenericIdIdentifierReference',
        'notify_who_visible_flag' => 'bool',
        'notify_member' => '\Spinen\ConnectWise\Clients\Service\Model\MemberReference',
        '_info' => '\Spinen\ConnectWise\Clients\Service\Model\Metadata'
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
        'name' => 'name',
        'inactive_flag' => 'inactiveFlag',
        'header_include_logo_flag' => 'headerIncludeLogoFlag',
        'header_text' => 'headerText',
        'header_text_visible_flag' => 'headerTextVisibleFlag',
        'footer_text' => 'footerText',
        'footer_text_visible_flag' => 'footerTextVisibleFlag',
        'thank_you_text' => 'thankYouText',
        'notify_who' => 'notifyWho',
        'notify_who_visible_flag' => 'notifyWhoVisibleFlag',
        'notify_member' => 'notifyMember',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'inactive_flag' => 'setInactiveFlag',
        'header_include_logo_flag' => 'setHeaderIncludeLogoFlag',
        'header_text' => 'setHeaderText',
        'header_text_visible_flag' => 'setHeaderTextVisibleFlag',
        'footer_text' => 'setFooterText',
        'footer_text_visible_flag' => 'setFooterTextVisibleFlag',
        'thank_you_text' => 'setThankYouText',
        'notify_who' => 'setNotifyWho',
        'notify_who_visible_flag' => 'setNotifyWhoVisibleFlag',
        'notify_member' => 'setNotifyMember',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'inactive_flag' => 'getInactiveFlag',
        'header_include_logo_flag' => 'getHeaderIncludeLogoFlag',
        'header_text' => 'getHeaderText',
        'header_text_visible_flag' => 'getHeaderTextVisibleFlag',
        'footer_text' => 'getFooterText',
        'footer_text_visible_flag' => 'getFooterTextVisibleFlag',
        'thank_you_text' => 'getThankYouText',
        'notify_who' => 'getNotifyWho',
        'notify_who_visible_flag' => 'getNotifyWhoVisibleFlag',
        'notify_member' => 'getNotifyMember',
        '_info' => 'getInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inactive_flag'] = isset($data['inactive_flag']) ? $data['inactive_flag'] : null;
        $this->container['header_include_logo_flag'] = isset($data['header_include_logo_flag']) ? $data['header_include_logo_flag'] : null;
        $this->container['header_text'] = isset($data['header_text']) ? $data['header_text'] : null;
        $this->container['header_text_visible_flag'] = isset($data['header_text_visible_flag']) ? $data['header_text_visible_flag'] : null;
        $this->container['footer_text'] = isset($data['footer_text']) ? $data['footer_text'] : null;
        $this->container['footer_text_visible_flag'] = isset($data['footer_text_visible_flag']) ? $data['footer_text_visible_flag'] : null;
        $this->container['thank_you_text'] = isset($data['thank_you_text']) ? $data['thank_you_text'] : null;
        $this->container['notify_who'] = isset($data['notify_who']) ? $data['notify_who'] : null;
        $this->container['notify_who_visible_flag'] = isset($data['notify_who_visible_flag']) ? $data['notify_who_visible_flag'] : null;
        $this->container['notify_member'] = isset($data['notify_member']) ? $data['notify_member'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 50)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['header_text']) && (strlen($this->container['header_text']) > 4000)) {
            $invalid_properties[] = "invalid value for 'header_text', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['footer_text']) && (strlen($this->container['footer_text']) > 500)) {
            $invalid_properties[] = "invalid value for 'footer_text', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['thank_you_text']) && (strlen($this->container['thank_you_text']) > 4000)) {
            $invalid_properties[] = "invalid value for 'thank_you_text', the character length must be smaller than or equal to 4000.";
        }

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
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        if (strlen($this->container['header_text']) > 4000) {
            return false;
        }
        if (strlen($this->container['footer_text']) > 500) {
            return false;
        }
        if (strlen($this->container['thank_you_text']) > 4000) {
            return false;
        }
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Survey., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets inactive_flag
     * @return bool
     */
    public function getInactiveFlag()
    {
        return $this->container['inactive_flag'];
    }

    /**
     * Sets inactive_flag
     * @param bool $inactive_flag
     * @return $this
     */
    public function setInactiveFlag($inactive_flag)
    {
        $this->container['inactive_flag'] = $inactive_flag;

        return $this;
    }

    /**
     * Gets header_include_logo_flag
     * @return bool
     */
    public function getHeaderIncludeLogoFlag()
    {
        return $this->container['header_include_logo_flag'];
    }

    /**
     * Sets header_include_logo_flag
     * @param bool $header_include_logo_flag
     * @return $this
     */
    public function setHeaderIncludeLogoFlag($header_include_logo_flag)
    {
        $this->container['header_include_logo_flag'] = $header_include_logo_flag;

        return $this;
    }

    /**
     * Gets header_text
     * @return string
     */
    public function getHeaderText()
    {
        return $this->container['header_text'];
    }

    /**
     * Sets header_text
     * @param string $header_text
     * @return $this
     */
    public function setHeaderText($header_text)
    {
        if (!is_null($header_text) && (strlen($header_text) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $header_text when calling Survey., must be smaller than or equal to 4000.');
        }

        $this->container['header_text'] = $header_text;

        return $this;
    }

    /**
     * Gets header_text_visible_flag
     * @return bool
     */
    public function getHeaderTextVisibleFlag()
    {
        return $this->container['header_text_visible_flag'];
    }

    /**
     * Sets header_text_visible_flag
     * @param bool $header_text_visible_flag
     * @return $this
     */
    public function setHeaderTextVisibleFlag($header_text_visible_flag)
    {
        $this->container['header_text_visible_flag'] = $header_text_visible_flag;

        return $this;
    }

    /**
     * Gets footer_text
     * @return string
     */
    public function getFooterText()
    {
        return $this->container['footer_text'];
    }

    /**
     * Sets footer_text
     * @param string $footer_text
     * @return $this
     */
    public function setFooterText($footer_text)
    {
        if (!is_null($footer_text) && (strlen($footer_text) > 500)) {
            throw new \InvalidArgumentException('invalid length for $footer_text when calling Survey., must be smaller than or equal to 500.');
        }

        $this->container['footer_text'] = $footer_text;

        return $this;
    }

    /**
     * Gets footer_text_visible_flag
     * @return bool
     */
    public function getFooterTextVisibleFlag()
    {
        return $this->container['footer_text_visible_flag'];
    }

    /**
     * Sets footer_text_visible_flag
     * @param bool $footer_text_visible_flag
     * @return $this
     */
    public function setFooterTextVisibleFlag($footer_text_visible_flag)
    {
        $this->container['footer_text_visible_flag'] = $footer_text_visible_flag;

        return $this;
    }

    /**
     * Gets thank_you_text
     * @return string
     */
    public function getThankYouText()
    {
        return $this->container['thank_you_text'];
    }

    /**
     * Sets thank_you_text
     * @param string $thank_you_text
     * @return $this
     */
    public function setThankYouText($thank_you_text)
    {
        if (!is_null($thank_you_text) && (strlen($thank_you_text) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $thank_you_text when calling Survey., must be smaller than or equal to 4000.');
        }

        $this->container['thank_you_text'] = $thank_you_text;

        return $this;
    }

    /**
     * Gets notify_who
     * @return \Spinen\ConnectWise\Clients\Service\Model\GenericIdIdentifierReference
     */
    public function getNotifyWho()
    {
        return $this->container['notify_who'];
    }

    /**
     * Sets notify_who
     * @param \Spinen\ConnectWise\Clients\Service\Model\GenericIdIdentifierReference $notify_who
     * @return $this
     */
    public function setNotifyWho($notify_who)
    {
        $this->container['notify_who'] = $notify_who;

        return $this;
    }

    /**
     * Gets notify_who_visible_flag
     * @return bool
     */
    public function getNotifyWhoVisibleFlag()
    {
        return $this->container['notify_who_visible_flag'];
    }

    /**
     * Sets notify_who_visible_flag
     * @param bool $notify_who_visible_flag
     * @return $this
     */
    public function setNotifyWhoVisibleFlag($notify_who_visible_flag)
    {
        $this->container['notify_who_visible_flag'] = $notify_who_visible_flag;

        return $this;
    }

    /**
     * Gets notify_member
     * @return \Spinen\ConnectWise\Clients\Service\Model\MemberReference
     */
    public function getNotifyMember()
    {
        return $this->container['notify_member'];
    }

    /**
     * Sets notify_member
     * @param \Spinen\ConnectWise\Clients\Service\Model\MemberReference $notify_member
     * @return $this
     */
    public function setNotifyMember($notify_member)
    {
        $this->container['notify_member'] = $notify_member;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Service\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Service\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

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
            return json_encode(\Spinen\ConnectWise\Clients\Service\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Service\ObjectSerializer::sanitizeForSerialization($this));
    }
}


