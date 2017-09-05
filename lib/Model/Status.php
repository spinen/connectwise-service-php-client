<?php
/**
 * Status
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
 * Status Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Service
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Status implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'board_id' => 'int',
        'sort_order' => 'int',
        'display_on_board' => 'bool',
        'inactive' => 'bool',
        'closed_status' => 'bool',
        'time_entry_not_allowed' => 'bool',
        'default_flag' => 'bool',
        'escalation_status' => 'string',
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
        'board_id' => 'boardId',
        'sort_order' => 'sortOrder',
        'display_on_board' => 'displayOnBoard',
        'inactive' => 'inactive',
        'closed_status' => 'closedStatus',
        'time_entry_not_allowed' => 'timeEntryNotAllowed',
        'default_flag' => 'defaultFlag',
        'escalation_status' => 'escalationStatus',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'board_id' => 'setBoardId',
        'sort_order' => 'setSortOrder',
        'display_on_board' => 'setDisplayOnBoard',
        'inactive' => 'setInactive',
        'closed_status' => 'setClosedStatus',
        'time_entry_not_allowed' => 'setTimeEntryNotAllowed',
        'default_flag' => 'setDefaultFlag',
        'escalation_status' => 'setEscalationStatus',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'board_id' => 'getBoardId',
        'sort_order' => 'getSortOrder',
        'display_on_board' => 'getDisplayOnBoard',
        'inactive' => 'getInactive',
        'closed_status' => 'getClosedStatus',
        'time_entry_not_allowed' => 'getTimeEntryNotAllowed',
        'default_flag' => 'getDefaultFlag',
        'escalation_status' => 'getEscalationStatus',
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

    const ESCALATION_STATUS_NOT_RESPONDED = 'NotResponded';
    const ESCALATION_STATUS_RESPONDED = 'Responded';
    const ESCALATION_STATUS_RESOLUTION_PLAN = 'ResolutionPlan';
    const ESCALATION_STATUS_RESOLVED = 'Resolved';
    const ESCALATION_STATUS_NO_ESCALATION = 'NoEscalation';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEscalationStatusAllowableValues()
    {
        return [
            self::ESCALATION_STATUS_NOT_RESPONDED,
            self::ESCALATION_STATUS_RESPONDED,
            self::ESCALATION_STATUS_RESOLUTION_PLAN,
            self::ESCALATION_STATUS_RESOLVED,
            self::ESCALATION_STATUS_NO_ESCALATION,
        ];
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
        $this->container['board_id'] = isset($data['board_id']) ? $data['board_id'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['display_on_board'] = isset($data['display_on_board']) ? $data['display_on_board'] : null;
        $this->container['inactive'] = isset($data['inactive']) ? $data['inactive'] : null;
        $this->container['closed_status'] = isset($data['closed_status']) ? $data['closed_status'] : null;
        $this->container['time_entry_not_allowed'] = isset($data['time_entry_not_allowed']) ? $data['time_entry_not_allowed'] : null;
        $this->container['default_flag'] = isset($data['default_flag']) ? $data['default_flag'] : null;
        $this->container['escalation_status'] = isset($data['escalation_status']) ? $data['escalation_status'] : null;
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

        $allowed_values = ["NotResponded", "Responded", "ResolutionPlan", "Resolved", "NoEscalation"];
        if (!in_array($this->container['escalation_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'escalation_status', must be one of #{allowed_values}.";
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
        $allowed_values = ["NotResponded", "Responded", "ResolutionPlan", "Resolved", "NoEscalation"];
        if (!in_array($this->container['escalation_status'], $allowed_values)) {
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
            throw new \InvalidArgumentException('invalid length for $name when calling Status., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

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
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets display_on_board
     * @return bool
     */
    public function getDisplayOnBoard()
    {
        return $this->container['display_on_board'];
    }

    /**
     * Sets display_on_board
     * @param bool $display_on_board
     * @return $this
     */
    public function setDisplayOnBoard($display_on_board)
    {
        $this->container['display_on_board'] = $display_on_board;

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
     * Gets closed_status
     * @return bool
     */
    public function getClosedStatus()
    {
        return $this->container['closed_status'];
    }

    /**
     * Sets closed_status
     * @param bool $closed_status
     * @return $this
     */
    public function setClosedStatus($closed_status)
    {
        $this->container['closed_status'] = $closed_status;

        return $this;
    }

    /**
     * Gets time_entry_not_allowed
     * @return bool
     */
    public function getTimeEntryNotAllowed()
    {
        return $this->container['time_entry_not_allowed'];
    }

    /**
     * Sets time_entry_not_allowed
     * @param bool $time_entry_not_allowed
     * @return $this
     */
    public function setTimeEntryNotAllowed($time_entry_not_allowed)
    {
        $this->container['time_entry_not_allowed'] = $time_entry_not_allowed;

        return $this;
    }

    /**
     * Gets default_flag
     * @return bool
     */
    public function getDefaultFlag()
    {
        return $this->container['default_flag'];
    }

    /**
     * Sets default_flag
     * @param bool $default_flag
     * @return $this
     */
    public function setDefaultFlag($default_flag)
    {
        $this->container['default_flag'] = $default_flag;

        return $this;
    }

    /**
     * Gets escalation_status
     * @return string
     */
    public function getEscalationStatus()
    {
        return $this->container['escalation_status'];
    }

    /**
     * Sets escalation_status
     * @param string $escalation_status
     * @return $this
     */
    public function setEscalationStatus($escalation_status)
    {
        $allowed_values = array('NotResponded', 'Responded', 'ResolutionPlan', 'Resolved', 'NoEscalation');
        if (!is_null($escalation_status) && (!in_array($escalation_status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'escalation_status', must be one of 'NotResponded', 'Responded', 'ResolutionPlan', 'Resolved', 'NoEscalation'");
        }
        $this->container['escalation_status'] = $escalation_status;

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


