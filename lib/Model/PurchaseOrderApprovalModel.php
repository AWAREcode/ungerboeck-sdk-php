<?php
/**
 * PurchaseOrderApprovalModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ungerboeck API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FomF\Ungerboeck\Client\Model;

use \ArrayAccess;
use \FomF\Ungerboeck\Client\ObjectSerializer;

/**
 * PurchaseOrderApprovalModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderApprovalModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseOrderApprovalModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization' => 'string',
        'number' => 'int',
        'item_sequence' => 'int',
        'sequence' => 'int',
        'level' => 'string',
        'action' => 'string',
        'approved_on' => '\DateTime',
        'approved_by' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization' => null,
        'number' => 'int32',
        'item_sequence' => 'int32',
        'sequence' => 'int32',
        'level' => null,
        'action' => null,
        'approved_on' => 'date-time',
        'approved_by' => null,
        'note' => null
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
        'organization' => 'Organization',
        'number' => 'Number',
        'item_sequence' => 'ItemSequence',
        'sequence' => 'Sequence',
        'level' => 'Level',
        'action' => 'Action',
        'approved_on' => 'ApprovedOn',
        'approved_by' => 'ApprovedBy',
        'note' => 'Note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization' => 'setOrganization',
        'number' => 'setNumber',
        'item_sequence' => 'setItemSequence',
        'sequence' => 'setSequence',
        'level' => 'setLevel',
        'action' => 'setAction',
        'approved_on' => 'setApprovedOn',
        'approved_by' => 'setApprovedBy',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization' => 'getOrganization',
        'number' => 'getNumber',
        'item_sequence' => 'getItemSequence',
        'sequence' => 'getSequence',
        'level' => 'getLevel',
        'action' => 'getAction',
        'approved_on' => 'getApprovedOn',
        'approved_by' => 'getApprovedBy',
        'note' => 'getNote'
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
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['item_sequence'] = isset($data['item_sequence']) ? $data['item_sequence'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['approved_on'] = isset($data['approved_on']) ? $data['approved_on'] : null;
        $this->container['approved_by'] = isset($data['approved_by']) ? $data['approved_by'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['item_sequence'] === null) {
            $invalidProperties[] = "'item_sequence' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['approved_on'] === null) {
            $invalidProperties[] = "'approved_on' can't be null";
        }
        if ($this->container['approved_by'] === null) {
            $invalidProperties[] = "'approved_by' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
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
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_PO_REQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets item_sequence
     *
     * @return int
     */
    public function getItemSequence()
    {
        return $this->container['item_sequence'];
    }

    /**
     * Sets item_sequence
     *
     * @param int $item_sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_PO_REQ_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItemSequence($item_sequence)
    {
        $this->container['item_sequence'] = $item_sequence;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_APPR_STATUS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_ACTION  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets approved_on
     *
     * @return \DateTime
     */
    public function getApprovedOn()
    {
        return $this->container['approved_on'];
    }

    /**
     * Sets approved_on
     *
     * @param \DateTime $approved_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_APPR_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovedOn($approved_on)
    {
        $this->container['approved_on'] = $approved_on;

        return $this;
    }

    /**
     * Gets approved_by
     *
     * @return string
     */
    public function getApprovedBy()
    {
        return $this->container['approved_by'];
    }

    /**
     * Sets approved_by
     *
     * @param string $approved_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_APPR_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovedBy($approved_by)
    {
        $this->container['approved_by'] = $approved_by;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO103_COMMENT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 255  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


