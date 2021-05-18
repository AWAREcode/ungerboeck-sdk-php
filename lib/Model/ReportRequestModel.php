<?php
/**
 * ReportRequestModel
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
 * ReportRequestModel Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'export_type' => 'int',
        'language' => 'string',
        'run_as_user_id' => 'string',
        'parameters' => '\FomF\Ungerboeck\Client\Model\ParameterValues[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'export_type' => 'int32',
        'language' => null,
        'run_as_user_id' => null,
        'parameters' => null
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
        'export_type' => 'ExportType',
        'language' => 'Language',
        'run_as_user_id' => 'RunAsUserID',
        'parameters' => 'Parameters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'export_type' => 'setExportType',
        'language' => 'setLanguage',
        'run_as_user_id' => 'setRunAsUserId',
        'parameters' => 'setParameters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'export_type' => 'getExportType',
        'language' => 'getLanguage',
        'run_as_user_id' => 'getRunAsUserId',
        'parameters' => 'getParameters'
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
        $this->container['export_type'] = isset($data['export_type']) ? $data['export_type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['run_as_user_id'] = isset($data['run_as_user_id']) ? $data['run_as_user_id'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['export_type'] === null) {
            $invalidProperties[] = "'export_type' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['run_as_user_id'] === null) {
            $invalidProperties[] = "'run_as_user_id' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
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
     * Gets export_type
     *
     * @return int
     */
    public function getExportType()
    {
        return $this->container['export_type'];
    }

    /**
     * Sets export_type
     *
     * @param int $export_type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the value of the export type. Use USISDKConstants.ReportConstants.ExportType to decode.  If its zero, it will use the default based on the report type.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setExportType($export_type)
    {
        $this->container['export_type'] = $export_type;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the culture languange, see microsoft link for the language string  https://docs.microsoft.com/en-us/windows/desktop/wmformat/language-strings   if left empty, it will use the default of the logged in user  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets run_as_user_id
     *
     * @return string
     */
    public function getRunAsUserId()
    {
        return $this->container['run_as_user_id'];
    }

    /**
     * Sets run_as_user_id
     *
     * @param string $run_as_user_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the userID to run the report with. Not the user id to log in with.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setRunAsUserId($run_as_user_id)
    {
        $this->container['run_as_user_id'] = $run_as_user_id;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \FomF\Ungerboeck\Client\Model\ParameterValues[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \FomF\Ungerboeck\Client\Model\ParameterValues[] $parameters <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> These are the parameters needed to run the report  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

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

