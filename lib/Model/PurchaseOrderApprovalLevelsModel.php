<?php
/**
 * PurchaseOrderApprovalLevelsModel
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
 * PurchaseOrderApprovalLevelsModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseOrderApprovalLevelsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseOrderApprovalLevelsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approval_level' => 'int',
        'type' => 'string',
        'organization' => 'string',
        'description' => 'string',
        'abbreviated_description' => 'string',
        'active' => 'string',
        'entered_on' => '\DateTime',
        'entered_by' => 'string',
        'changed_on' => '\DateTime',
        'changed_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approval_level' => 'int32',
        'type' => null,
        'organization' => null,
        'description' => null,
        'abbreviated_description' => null,
        'active' => null,
        'entered_on' => 'date-time',
        'entered_by' => null,
        'changed_on' => 'date-time',
        'changed_by' => null
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
        'approval_level' => 'ApprovalLevel',
        'type' => 'Type',
        'organization' => 'Organization',
        'description' => 'Description',
        'abbreviated_description' => 'AbbreviatedDescription',
        'active' => 'Active',
        'entered_on' => 'EnteredOn',
        'entered_by' => 'EnteredBy',
        'changed_on' => 'ChangedOn',
        'changed_by' => 'ChangedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approval_level' => 'setApprovalLevel',
        'type' => 'setType',
        'organization' => 'setOrganization',
        'description' => 'setDescription',
        'abbreviated_description' => 'setAbbreviatedDescription',
        'active' => 'setActive',
        'entered_on' => 'setEnteredOn',
        'entered_by' => 'setEnteredBy',
        'changed_on' => 'setChangedOn',
        'changed_by' => 'setChangedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approval_level' => 'getApprovalLevel',
        'type' => 'getType',
        'organization' => 'getOrganization',
        'description' => 'getDescription',
        'abbreviated_description' => 'getAbbreviatedDescription',
        'active' => 'getActive',
        'entered_on' => 'getEnteredOn',
        'entered_by' => 'getEnteredBy',
        'changed_on' => 'getChangedOn',
        'changed_by' => 'getChangedBy'
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
        $this->container['approval_level'] = isset($data['approval_level']) ? $data['approval_level'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['abbreviated_description'] = isset($data['abbreviated_description']) ? $data['abbreviated_description'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['entered_by'] = isset($data['entered_by']) ? $data['entered_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['approval_level'] === null) {
            $invalidProperties[] = "'approval_level' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['abbreviated_description'] === null) {
            $invalidProperties[] = "'abbreviated_description' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['entered_on'] === null) {
            $invalidProperties[] = "'entered_on' can't be null";
        }
        if ($this->container['entered_by'] === null) {
            $invalidProperties[] = "'entered_by' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['changed_by'] === null) {
            $invalidProperties[] = "'changed_by' can't be null";
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
     * Gets approval_level
     *
     * @return int
     */
    public function getApprovalLevel()
    {
        return $this->container['approval_level'];
    }

    /**
     * Sets approval_level
     *
     * @param int $approval_level <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_APPR_LEVEL  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovalLevel($approval_level)
    {
        $this->container['approval_level'] = $approval_level;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_APPR_TYPE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
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
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets abbreviated_description
     *
     * @return string
     */
    public function getAbbreviatedDescription()
    {
        return $this->container['abbreviated_description'];
    }

    /**
     * Sets abbreviated_description
     *
     * @param string $abbreviated_description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_ABBREV_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 5  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAbbreviatedDescription($abbreviated_description)
    {
        $this->container['abbreviated_description'] = $abbreviated_description;

        return $this;
    }

    /**
     * Gets active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param string $active <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_ACTIVE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets entered_on
     *
     * @return \DateTime
     */
    public function getEnteredOn()
    {
        return $this->container['entered_on'];
    }

    /**
     * Sets entered_on
     *
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredOn($entered_on)
    {
        $this->container['entered_on'] = $entered_on;

        return $this;
    }

    /**
     * Gets entered_by
     *
     * @return string
     */
    public function getEnteredBy()
    {
        return $this->container['entered_by'];
    }

    /**
     * Sets entered_by
     *
     * @param string $entered_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredBy($entered_by)
    {
        $this->container['entered_by'] = $entered_by;

        return $this;
    }

    /**
     * Gets changed_on
     *
     * @return \DateTime
     */
    public function getChangedOn()
    {
        return $this->container['changed_on'];
    }

    /**
     * Sets changed_on
     *
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

        return $this;
    }

    /**
     * Gets changed_by
     *
     * @return string
     */
    public function getChangedBy()
    {
        return $this->container['changed_by'];
    }

    /**
     * Sets changed_by
     *
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO050_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedBy($changed_by)
    {
        $this->container['changed_by'] = $changed_by;

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


