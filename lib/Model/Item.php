<?php
/**
 * Item
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

namespace Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model;

use \ArrayAccess;

/**
 * Item Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Service
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Item implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'inactive' => 'bool',
        'type_associations' => '\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\TypeAssociations[]',
        'add_all_sub_types' => 'bool',
        'remove_all_sub_types' => 'bool',
        'type_id' => 'int',
        'board_id' => 'int',
        '_info' => '\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Metadata'
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
        'inactive' => 'inactive',
        'type_associations' => 'typeAssociations',
        'add_all_sub_types' => 'addAllSubTypes',
        'remove_all_sub_types' => 'removeAllSubTypes',
        'type_id' => 'typeId',
        'board_id' => 'boardId',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'inactive' => 'setInactive',
        'type_associations' => 'setTypeAssociations',
        'add_all_sub_types' => 'setAddAllSubTypes',
        'remove_all_sub_types' => 'setRemoveAllSubTypes',
        'type_id' => 'setTypeId',
        'board_id' => 'setBoardId',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'inactive' => 'getInactive',
        'type_associations' => 'getTypeAssociations',
        'add_all_sub_types' => 'getAddAllSubTypes',
        'remove_all_sub_types' => 'getRemoveAllSubTypes',
        'type_id' => 'getTypeId',
        'board_id' => 'getBoardId',
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
        $this->container['inactive'] = isset($data['inactive']) ? $data['inactive'] : null;
        $this->container['type_associations'] = isset($data['type_associations']) ? $data['type_associations'] : null;
        $this->container['add_all_sub_types'] = isset($data['add_all_sub_types']) ? $data['add_all_sub_types'] : null;
        $this->container['remove_all_sub_types'] = isset($data['remove_all_sub_types']) ? $data['remove_all_sub_types'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['board_id'] = isset($data['board_id']) ? $data['board_id'] : null;
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
            throw new \InvalidArgumentException('invalid length for $name when calling Item., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets inactive
     * @return bool
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     * @param bool $inactive
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

        return $this;
    }

    /**
     * Gets type_associations
     * @return \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\TypeAssociations[]
     */
    public function getTypeAssociations()
    {
        return $this->container['type_associations'];
    }

    /**
     * Sets type_associations
     * @param \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\TypeAssociations[] $type_associations
     * @return $this
     */
    public function setTypeAssociations($type_associations)
    {
        $this->container['type_associations'] = $type_associations;

        return $this;
    }

    /**
     * Gets add_all_sub_types
     * @return bool
     */
    public function getAddAllSubTypes()
    {
        return $this->container['add_all_sub_types'];
    }

    /**
     * Sets add_all_sub_types
     * @param bool $add_all_sub_types
     * @return $this
     */
    public function setAddAllSubTypes($add_all_sub_types)
    {
        $this->container['add_all_sub_types'] = $add_all_sub_types;

        return $this;
    }

    /**
     * Gets remove_all_sub_types
     * @return bool
     */
    public function getRemoveAllSubTypes()
    {
        return $this->container['remove_all_sub_types'];
    }

    /**
     * Sets remove_all_sub_types
     * @param bool $remove_all_sub_types
     * @return $this
     */
    public function setRemoveAllSubTypes($remove_all_sub_types)
    {
        $this->container['remove_all_sub_types'] = $remove_all_sub_types;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets board_id
     * @return int
     */
    public function getBoardId()
    {
        return $this->container['board_id'];
    }

    /**
     * Sets board_id
     * @param int $board_id
     * @return $this
     */
    public function setBoardId($board_id)
    {
        $this->container['board_id'] = $board_id;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Metadata $_info Metadata of the entity
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


