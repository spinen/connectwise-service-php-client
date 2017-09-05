<?php
/**
 * KnowledgeBaseArticle
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
 * KnowledgeBaseArticle Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Service
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KnowledgeBaseArticle implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KnowledgeBaseArticle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'issue' => 'string',
        'resolution' => 'string',
        'location_id' => 'int',
        'business_unit_id' => 'int',
        'board' => '\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\BoardReference',
        'category_id' => 'int',
        'sub_category_id' => 'int',
        'date_created' => 'string',
        'created_by' => 'string',
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
        'title' => 'title',
        'issue' => 'issue',
        'resolution' => 'resolution',
        'location_id' => 'locationId',
        'business_unit_id' => 'businessUnitId',
        'board' => 'board',
        'category_id' => 'categoryId',
        'sub_category_id' => 'subCategoryId',
        'date_created' => 'dateCreated',
        'created_by' => 'createdBy',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'issue' => 'setIssue',
        'resolution' => 'setResolution',
        'location_id' => 'setLocationId',
        'business_unit_id' => 'setBusinessUnitId',
        'board' => 'setBoard',
        'category_id' => 'setCategoryId',
        'sub_category_id' => 'setSubCategoryId',
        'date_created' => 'setDateCreated',
        'created_by' => 'setCreatedBy',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'issue' => 'getIssue',
        'resolution' => 'getResolution',
        'location_id' => 'getLocationId',
        'business_unit_id' => 'getBusinessUnitId',
        'board' => 'getBoard',
        'category_id' => 'getCategoryId',
        'sub_category_id' => 'getSubCategoryId',
        'date_created' => 'getDateCreated',
        'created_by' => 'getCreatedBy',
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['business_unit_id'] = isset($data['business_unit_id']) ? $data['business_unit_id'] : null;
        $this->container['board'] = isset($data['board']) ? $data['board'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['sub_category_id'] = isset($data['sub_category_id']) ? $data['sub_category_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
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
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['issue'] === null) {
            $invalid_properties[] = "'issue' can't be null";
        }
        if ($this->container['resolution'] === null) {
            $invalid_properties[] = "'resolution' can't be null";
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
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['issue'] === null) {
            return false;
        }
        if ($this->container['resolution'] === null) {
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
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets issue
     * @return string
     */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
     * Sets issue
     * @param string $issue
     * @return $this
     */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;

        return $this;
    }

    /**
     * Gets resolution
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     * @param string $resolution
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets business_unit_id
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->container['business_unit_id'];
    }

    /**
     * Sets business_unit_id
     * @param int $business_unit_id
     * @return $this
     */
    public function setBusinessUnitId($business_unit_id)
    {
        $this->container['business_unit_id'] = $business_unit_id;

        return $this;
    }

    /**
     * Gets board
     * @return \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\BoardReference
     */
    public function getBoard()
    {
        return $this->container['board'];
    }

    /**
     * Sets board
     * @param \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\BoardReference $board
     * @return $this
     */
    public function setBoard($board)
    {
        $this->container['board'] = $board;

        return $this;
    }

    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets sub_category_id
     * @return int
     */
    public function getSubCategoryId()
    {
        return $this->container['sub_category_id'];
    }

    /**
     * Sets sub_category_id
     * @param int $sub_category_id
     * @return $this
     */
    public function setSubCategoryId($sub_category_id)
    {
        $this->container['sub_category_id'] = $sub_category_id;

        return $this;
    }

    /**
     * Gets date_created
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param string $date_created
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets created_by
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param string $created_by
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

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


